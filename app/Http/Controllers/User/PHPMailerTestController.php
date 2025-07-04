<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PHPMailerTestController extends Controller
{
    public function testEmail()
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
            $mail->addAddress('rishavsinghh1@gmail.com', 'Test User');

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'PHPMailer Test - Globerise Consultants';
            $mail->Body    = '<h1>PHPMailer Test Successful!</h1><p>This email confirms that PHPMailer is working correctly with your Globerise Consultants website.</p>';
            $mail->AltBody = 'PHPMailer Test Successful! This email confirms that PHPMailer is working correctly.';

            $mail->send();
            
            return response()->json([
                'success' => true,
                'message' => 'Test email sent successfully!'
            ]);
            
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Email could not be sent. Mailer Error: {$mail->ErrorInfo}"
            ], 500);
        }
    }
}
