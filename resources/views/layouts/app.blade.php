<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .custom-pagination .pagination li:first-child,
        .custom-pagination .pagination li:last-child {
            display: none;
        }

        .custom-pagination .pagination li a {
            font-size: 14px; /* Adjust the font size as needed */
            padding: 0.25rem 0.5rem; /* Adjust padding as needed */
        }
    </style>

    <title>Dashboard</title>
</head>


<body>
    @yield('content')

    <!-- Bootstrap JS (optional, if you need features like dropdowns, modals, etc.) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
