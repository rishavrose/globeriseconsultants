<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set('Asia/Kolkata');
class ContactFormController extends Controller
{
    public function submitContactForm(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'visa_type' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields correctly.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Prepare email data
            $emailData = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'visa_type' => $request->visa_type,
                'submitted_at' => now()->format('Y-m-d H:i:s')
            ];

            // Send email to admin using PHPMailer
            $this->sendAdminEmail($emailData);

            // Send acknowledgment email to user using PHPMailer
            $this->sendUserAcknowledgment($emailData);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your inquiry! We will get back to you soon.'
            ]);

        } catch (\Exception $e) {
            \Log::error('Contact form submission error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ], 500);
        }
    }

    /**
     * Send email to admin using PHPMailer
     */
    private function sendAdminEmail($emailData)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST', 'smtp.gmail.com');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = env('MAIL_PORT', 587);

            // Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress(env('MAIL_ADMIN_ADDRESS'), 'Globerise Admin');
            $mail->addReplyTo($emailData['email'], $emailData['name']);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission - Globerise Consultants';
            
            // Create HTML content
            $htmlContent = $this->getAdminEmailTemplate($emailData);
            $mail->Body = $htmlContent;
            
            // Plain text version
            $mail->AltBody = "New Contact Form Submission\n\n" .
                           "Name: {$emailData['name']}\n" .
                           "Email: {$emailData['email']}\n" .
                           "Phone: {$emailData['phone']}\n" .
                           "Country: {$emailData['country']}\n" .
                           "Visa Type: {$emailData['visa_type']}\n" .
                           "Submitted At: {$emailData['submitted_at']}";

            $mail->send();
        } catch (Exception $e) {
            throw new \Exception("Admin email could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

    /**
     * Send acknowledgment email to user using PHPMailer
     */
    private function sendUserAcknowledgment($emailData)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST', 'smtp.gmail.com');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = env('MAIL_PORT', 587);

            // Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($emailData['email'], $emailData['name']);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Thank you for contacting Globerise Consultants';
            
            // Create HTML content
            $htmlContent = $this->getUserEmailTemplate($emailData);
            $mail->Body = $htmlContent;
            
            // Plain text version
            $mail->AltBody = "Dear {$emailData['name']},\n\n" .
                           "Thank you for reaching out to Globerise Consultants!\n\n" .
                           "We have received your inquiry regarding {$emailData['visa_type']} for {$emailData['country']}.\n\n" .
                           "Our team will review your inquiry and get back to you within 24 hours.\n\n" .
                           "Best regards,\nGloberise Consultants Team";

            $mail->send();
        } catch (Exception $e) {
            throw new \Exception("User acknowledgment email could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

    /**
     * Get admin email template
     */
    private function getAdminEmailTemplate($emailData)
    {
        return '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>New Contact Form Submission</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #007bff; color: white; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
                .content { background-color: #f8f9fa; padding: 20px; border: 1px solid #ddd; border-top: none; }
                .info-row { margin-bottom: 15px; padding: 10px; background-color: white; border-left: 4px solid #007bff; }
                .label { font-weight: bold; color: #007bff; display: inline-block; width: 120px; }
                .value { color: #333; }
                .footer { background-color: #6c757d; color: white; padding: 15px; text-align: center; border-radius: 0 0 5px 5px; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class="header">
                <h1>New Contact Form Submission</h1>
                <p>Globerise Consultants</p>
            </div>
            
            <div class="content">
                <p>You have received a new inquiry through the contact form on your website.</p>
                
                <div class="info-row">
                    <span class="label">Name:</span>
                    <span class="value">' . htmlspecialchars($emailData['name']) . '</span>
                </div>
                
                <div class="info-row">
                    <span class="label">Email:</span>
                    <span class="value">' . htmlspecialchars($emailData['email']) . '</span>
                </div>
                
                <div class="info-row">
                    <span class="label">Phone:</span>
                    <span class="value">' . htmlspecialchars($emailData['phone']) . '</span>
                </div>
                
                <div class="info-row">
                    <span class="label">Country:</span>
                    <span class="value">' . htmlspecialchars($emailData['country']) . '</span>
                </div>
                
                <div class="info-row">
                    <span class="label">Visa Type:</span>
                    <span class="value">' . htmlspecialchars($emailData['visa_type']) . '</span>
                </div>
                
                <div class="info-row">
                    <span class="label">Submitted At:</span>
                    <span class="value">' . htmlspecialchars($emailData['submitted_at']) . '</span>
                </div>
            </div>
            
            <div class="footer">
                <p>This email was sent from the contact form on Globerise Consultants website.</p>
                <p>Please respond to the customer at ' . htmlspecialchars($emailData['email']) . '</p>
            </div>
        </body>
        </html>';
    }

    /**
     * Get user acknowledgment email template
     */
    private function getUserEmailTemplate($emailData)
    {
        return '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Thank you for contacting Globerise Consultants</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #28a745; color: white; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
                .content { background-color: #f8f9fa; padding: 20px; border: 1px solid #ddd; border-top: none; }
                .highlight { background-color: #e7f3ff; padding: 15px; border-left: 4px solid #007bff; margin: 20px 0; }
                .contact-info { background-color: white; padding: 15px; border-radius: 5px; margin: 15px 0; }
                .footer { background-color: #6c757d; color: white; padding: 15px; text-align: center; border-radius: 0 0 5px 5px; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class="header">
                <h1>Thank You for Your Inquiry!</h1>
                <p>Globerise Consultants</p>
            </div>
            
            <div class="content">
                <p>Dear ' . htmlspecialchars($emailData['name']) . ',</p>
                
                <p>Thank you for reaching out to Globerise Consultants! We have successfully received your inquiry regarding <strong>' . htmlspecialchars($emailData['visa_type']) . '</strong> for <strong>' . htmlspecialchars($emailData['country']) . '</strong>.</p>
                
                <div class="highlight">
                    <h3>What happens next?</h3>
                    <ul>
                        <li>Our expert consultants will review your inquiry within 24 hours</li>
                        <li>You will receive a detailed response with next steps</li>
                        <li>We may contact you at ' . htmlspecialchars($emailData['phone']) . ' for additional information if needed</li>
                    </ul>
                </div>
                
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><strong>Phone:</strong> +91-7065195955, +91-9318355539</p>
                    <p><strong>Email:</strong> info@globeriseconsultants.com</p>
                    <p><strong>Address:</strong> 408, 4th Floor, A-09 GD ITL Northex Tower Netaji Subhash Place, Delhi - 110034</p>
                </div>
                
                <p>At Globerise Consultants, we believe that borders should never be a barrier to your dreams. Our experienced team is here to guide you through every step of your global journey.</p>
                
                <p>Best regards,<br>
                <strong>Globerise Consultants Team</strong></p>
            </div>
            
            <div class="footer">
                <p>This is an automated acknowledgment email. Please do not reply to this email.</p>
                <p>Visit our website: <a href="https://test.globeriseconsultants.com" style="color: #ffffff;">www.globeriseconsultants.com</a></p>
            </div>
        </body>
        </html>';
    }
}
