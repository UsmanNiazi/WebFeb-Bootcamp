<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Verification</title>
</head>
<body>
    <p style="text-align:center;">Click the email verification link that was sent to your email address.</p>
    <form action="/email/verification-notification" method="post">
        @csrf
        <button type="submit">Re-Send</button>
    </form>
    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        A new email verification link has been emailed to you!
    </div>
@endif
</body>
</html>