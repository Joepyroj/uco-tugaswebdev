<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <title>Register</title>
</head>

<body>
    <header>

    </header>
    <main>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <img src="/path/to/logo.png" alt="Logo Perusahaan">
            <h1>Nama Perusahaan</h1>
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" required>
            </div>
            <div>
                <label for="location">Location:</label>
                <input type="text" name="location" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Submit</button>
        </form>
        <p>Already a member? <a href="#">Login</a></p>
    </main>
</body>

</html>
