<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <title>Halaman</title>
</head>

<body>
    <header>
        <div>
            <img src="company.png" alt="Logo Perusahaan" class="logo">
            <h1 class="company-name">Job Tracking Website</h1>
        </div>
    </header>
    <main>
        <p></p>
        <div class="button-container">
            <a href="{{ route('login') }}"><button>Login</button></a>
            <a href="{{ route('register') }}"><button>Register</button></a>
        </div>
    </main>
</body>

</html>
