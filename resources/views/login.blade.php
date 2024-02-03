<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <title>Login</title>
</head>

<body>
    <main>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Login</h1>
            @if (session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert error">
                    {{ $errors->first() }}
                </div>
            @endif
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="b">
                <button type="submit">Login</button>
                <p>Not a member? <a href="{{ route('register.form') }}">Register</a></p>
            </div>
        </form>

    </main>
</body>

</html>
