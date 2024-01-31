<!-- resources/views/emails/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form Submission</title>
</head>

<body>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Message: {{ $message->toString() }}</p>
</body>

</html>
