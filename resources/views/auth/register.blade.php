<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">

    <title>Register</title>
</head>

<body>
    <header class="bg-light p-3">

    </header>
    <main class="container mt-4">
        <form action="{{ route('register') }}" method="POST" class="border p-4 bg-white">
            @csrf
            <img src="company.png" alt="Logo Perusahaan" class="img-fluid logo">
            <h1 class="mt-4">Jobify</h1>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p class="mt-3">Already a member? <a href="{{ route('login') }}">Login</a></p>
    </main>

    <!-- Bootstrap JS and jQuery (make sure to include them if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"
        integrity="sha384-q4ce88cNOZHSK8lzn1qz7C3XAM0t21Sw9xZXfcmzHMI0C7x9VaH0CBkv7a/EMFph"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyfoRS3DPcUDAdcbhjxu7xjBteqRD1"
        crossorigin="anonymous"></script>
</body>

</html>
