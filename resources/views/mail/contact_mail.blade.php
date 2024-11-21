<!DOCTYPE html>
<html>

<head>
    <title>New Contact Submission</title>
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
            /* Left border for emphasis */
        }

        h1 {
            color: #f1c40f;
            /* Yellow color for the heading */
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .info {
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #333;
            padding-top: 20px;
            border-top: 1px solid #ddd;
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
        <h1>New Contact Form Submission</h1>
        

        <div class="info">
            <p><span class="label">Name:</span> {{ $data['name'] }}</p>
            <p><span class="label">Email:</span> {{ $data['email'] }}</p>
            <p><span class="label">Phone Number:</span> {{ $data['phone'] }}</p>
            <p><span class="label">Message:</span> {{ $data['message'] }}</p>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Ali Ather Hub. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
