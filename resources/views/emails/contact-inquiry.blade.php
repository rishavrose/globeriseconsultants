<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
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
            background-color: #007bff;
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
        .info-row {
            margin-bottom: 15px;
            padding: 10px;
            background-color: white;
            border-left: 4px solid #007bff;
        }
        .label {
            font-weight: bold;
            color: #007bff;
            display: inline-block;
            width: 120px;
        }
        .value {
            color: #333;
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
        <h1>New Contact Form Submission</h1>
        <p>Globerise Consultants</p>
    </div>
    
    <div class="content">
        <p>You have received a new inquiry through the contact form on your website.</p>
        
        <div class="info-row">
            <span class="label">Name:</span>
            <span class="value">{{ $name }}</span>
        </div>
        
        <div class="info-row">
            <span class="label">Email:</span>
            <span class="value">{{ $email }}</span>
        </div>
        
        <div class="info-row">
            <span class="label">Phone:</span>
            <span class="value">{{ $phone }}</span>
        </div>
        
        <div class="info-row">
            <span class="label">Country:</span>
            <span class="value">{{ $country }}</span>
        </div>
        
        <div class="info-row">
            <span class="label">Visa Type:</span>
            <span class="value">{{ $visa_type }}</span>
        </div>
        
        <div class="info-row">
            <span class="label">Submitted At:</span>
            <span class="value">{{ $submitted_at }}</span>
        </div>
    </div>
    
    <div class="footer">
        <p>This email was sent from the contact form on Globerise Consultants website.</p>
        <p>Please respond to the customer at {{ $email }}</p>
    </div>
</body>
</html>
