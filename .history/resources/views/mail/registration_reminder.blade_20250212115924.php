<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgb(12, 158, 184);
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        a.button:hover {
            background-color: rgb(12, 158, 184);
        }
    </style>
</head>

<body>
    <div class="container">
        <p>Dear {{ $name }},</p>

        <p>We noticed that you recently created an account on the ICoNDACoM 2025 website, but your registration is not
            yet complete. We're excited to have you join our community and don't want you to miss out on the full
            benefits we offer!</p>

        <p>Completing your registration will give you access to:</p>
        <ul>
            <li>Exclusive conference materials</li>
            <li>Full event participation</li>
            <li>Networking opportunities with experts</li>
        </ul>

        <p>It only takes a few minutes to finish. Simply click the link below to complete your registration:</p>

        <p><a href="{{ $link }}" class="button">Complete Registration Now</a></p>

        <p>If you have any questions or need assistance, feel free to reach out to us at <a
                href="mailto:icondacom.mth@buk.edu.ng">icondacom.mth@buk.edu.ng</a> or call us at +2348067864645.</p>

        <p>We look forward to welcoming you fully aboard!</p>

        <p>Best regards,<br>
            ICoNDACoM 2025 Admin Team<br>
            Numerical Optimization Research Group<br>
            Bayero University, Kano<br>
            <a href="https://icondacom.com.ng">https://icondacom.com.ng</a>
        </p>
    </div>
</body>

</html>
