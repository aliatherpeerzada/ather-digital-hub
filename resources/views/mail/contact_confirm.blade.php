<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-left: 10px solid #f1c40f;
        }

        h1 {
            color: #f1c40f;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #333;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .highlight {
            color: #f1c40f;
            font-weight: bold;
        }

        /* Button styling */
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #f1c40f;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            text-align: center;
        }

        .button:hover {
            background-color: #e1b90f;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Form Submission Confirmation</h1>

        <p>Dear <span class="highlight">{{ $data['name'] }}</span>,</p>
        <p>Thank you for reaching out to us! Your contact form has been successfully submitted, and someone from our
            team will reach out to you soon.</p>

        <p>We appreciate your interest and look forward to assisting you.</p>

        <p>Best regards,</p>
        <p>Ali Ather Hub Team</p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Ali Ather Hub. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
