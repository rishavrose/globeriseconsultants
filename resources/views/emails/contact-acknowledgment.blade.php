<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank you for contacting Globerise Consultants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #28a745;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
        }
        .highlight {
            background-color: #e7f3ff;
            padding: 15px;
            border-left: 4px solid #007bff;
            margin: 20px 0;
        }
        .contact-info {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .footer {
            background-color: #6c757d;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 0 0 5px 5px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Thank You for Your Inquiry!</h1>
        <p>Globerise Consultants</p>
    </div>
    
    <div class="content">
        <p>Dear {{ $name }},</p>
        
        <p>Thank you for reaching out to Globerise Consultants! We have successfully received your inquiry regarding <strong>{{ $visa_type }}</strong> for <strong>{{ $country }}</strong>.</p>
        
        <div class="highlight">
            <h3>What happens next?</h3>
            <ul>
                <li>Our expert consultants will review your inquiry within 24 hours</li>
                <li>You will receive a detailed response with next steps</li>
                <li>We may contact you at {{ $phone }} for additional information if needed</li>
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
</html>
