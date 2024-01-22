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
            <img src="/path/to/logo.png" alt="Logo Perusahaan" class="logo">
            <h1 class="company-name">Job Tracking Website</h1>
        </div>
    </header>
    <main>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, earum consequuntur esse eveniet quos
            officiis aut, consequatur cumque autem laudantium atque fuga, omnis sed nisi placeat vel blanditiis dolorem
            eum?</p>
        <div class="button-container">
            <a href="{{ route('login') }}"><button>Login</button></a>
            <a href="{{ route('register') }}"><button>Register</button></a>
        </div>
    </main>
</body>

</html>
