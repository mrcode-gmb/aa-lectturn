<!DOCTYPE html>
<html>

<head>
    <title>ICoNDACoM Application Notification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="font-family: 'Figtree', Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px;">
        <div class="mail-sender" style="text-align: center;">
            <h2 style="color: #333333; font-weight: 600;">Hi, {{ $user->name }}!</h2>
            <p style="color: #555555; font-size: 16px;">Sorry! Your application for ICoNDACoM has been <b
                    style="color: red;">Rejected</b>.</p>
            <p style="color: #555555; font-size: 16px;">If you have any questions or need further clarification, please
                feel free to contact us.</p>
            <br>
            <p style="color: #555555; font-size: 16px;">Thank you for participating in ICoNDACoM. We wish you the best
                of luck!</p>
        </div>

        <div class="mail-base-regard" style="text-align: center; margin-top: 30px;">
            <p style="color: #333333; font-size: 14px;"><b>Best Regards,</b> <br>
                By ICoNDACoM</p>
        </div>

        <div class="mail-center"
            style="text-align: center; margin-top: 20px; padding-top: 10px; border-top: 1px solid #dddddd;">
            <p style="color: #aaaaaa; font-size: 12px;">© {{ date('Y') }} ICoNDACoM. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
