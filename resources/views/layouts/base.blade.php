<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Por Amor A Rocky</title>
    <link rel="icon" href="https://poramorarocky.com/wp-content/uploads/2020/04/FondoRecurso-5.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
     <!-- LINK VANILA DATATABLES CSS -->
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css"
    />
    <!-- LINK VANILA DATATABLES JS -->
    <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"
    ></script>
</head>

<body class="body">
    @yield('content')

    <script src="{{ asset('js/adoptions.js') }}" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
        var datat = document.querySelector("#datat");
        var dataTable = new DataTable("#datat", {
            perPage: 20,
            labels: {
                placeholder: "Busca por un campo...",
                perPage: "{select} registros por página",
                noRows: "No se encontraron registros",
                info: "Mostrando {start} a {end} de {rows} registros",
            },
        });
    </script>
</body>

</html>
