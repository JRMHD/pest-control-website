<!DOCTYPE html>
<html>

<head>
    <title>New Appointment Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #007bff;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            color: #ffffff;
            text-align: center;
        }

        .email-header h2 {
            margin: 0;
        }

        .email-body {
            padding: 20px;
            color: #333333;
        }

        .email-body p {
            margin: 10px 0;
        }

        .email-footer {
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #777777;
        }

        .email-footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h2>New Appointment Received</h2>
        </div>
        <div class="email-body">
            <p>Dear Hyperverm Team,</p>
            <p>We have received a new appointment request with the following details:</p>
            <p><strong>Department:</strong> {{ $appointment->department }}</p>
            <p><strong>Date:</strong> {{ $appointment->date }}</p>
            <p><strong>Time:</strong> {{ $appointment->time }}</p>
            <p><strong>Name:</strong> {{ $appointment->name }}</p>
            <p><strong>Phone:</strong> {{ $appointment->phone }}</p>
            <p><strong>Message:</strong> {{ $appointment->message }}</p>
            <p>Please contact the client at your earliest convenience to confirm the appointment and discuss any further
                details.</p>
            <p>Thank you,<br>Hyperverm Pest Control System</p>
        </div>
        <div class="email-footer">
            <p>&copy; 2024 Hyperverm. All rights reserved.</p>
            <p><a href="https://www.hypervermpestcontrol.com">Visit our website</a></p>
        </div>
    </div>
</body>

</html>
