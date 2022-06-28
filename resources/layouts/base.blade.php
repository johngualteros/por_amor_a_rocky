<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Por Amor A Rocky</title>
    <link rel="icon" href="https://poramorarocky.com/wp-content/uploads/2020/04/FondoRecurso-5.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>
    @include('./sidebar.blade.php')

    @yield('content')

    <script src="../js/adoptions.js"></script>
    <script src="../js/pets.js"></script>
    <script src="../js/users.js"></script>
    <script src="../js/vaccines.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
</body>

</html>
