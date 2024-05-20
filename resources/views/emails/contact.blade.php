<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        <p>Dear Website Owner,</p>
        <p>You have received a new message from your website's contact form. Please find the details below:</p>
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Subject:</strong> {{ $contact->subject }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Message:</strong> {{ $contact->message }}</p>
        <p>Please review the message and respond to the sender accordingly.</p>
        <p>Thank you for using our service.</p>
        <p>Best regards,<br>Hyperverm Pest Control System</p>
    </div>
</body>

</html>
