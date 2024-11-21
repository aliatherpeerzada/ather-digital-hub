<!DOCTYPE html>
<html>

<head>
    <title>Newsletter Subscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-left: 10px solid #f1c40f;
            /* Left border for emphasis */
        }

        h1 {
            color: #f1c40f;
            /* Yellow color for the heading */
            text-align: center;
        }

        p {
            line-height: 1.6;
            font-size: 16px;
            color: #333;
        }

        .message {
            margin-bottom: 30px;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #333;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #333;
            /* Button background color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }

        .btn:hover {
            background-color: #e74c3c;
            /* Button hover color */
        }

        img {
            display: block;
            margin: 0 auto 20px;
            /* Center the logo with bottom margin */
            max-width: 100%;
            /* Responsive image */
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Thank You for Subscribing!</h1>
        

        <p class="message">Dear Subscriber, <strong>{{ $data['subscription_email'] }}</strong>,</p>

        <p>We are excited to welcome you to our newsletter community! From now on, you'll be the first to hear about our
            latest updates, special offers, and exclusive content—all delivered straight to your inbox.</p>

        <p>Stay tuned for exciting news, and thank you for joining us!</p>

        <p>Best regards,</p>
        <p>Ali Ather Hub Team</p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Ali Ather Hub. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
