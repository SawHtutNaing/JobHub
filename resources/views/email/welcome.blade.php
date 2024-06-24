<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our Application</title>
</head>
<body>
    <h1>Welcome, {{ $user->name }}!</h1>
    <p>Thank you for registering with us. We're excited to have you on board.</p>
    <p>Feel free to explore our application and let us know if you have any questions.</p>
    <p>Best regards,<br>{{ config('app.name') }}</p>
</body>
</html>
