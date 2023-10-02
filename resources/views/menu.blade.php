<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: hsl(210, 88%, 3%);
            text-align: center; 
        }

        li.nav-item {
            display: inline-block; 
        }

        li.nav-item a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li.nav-item a:hover {
            background-color: #0056b3;
        }

        /* Contenido principal */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

       
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <ul class="navbar">
        <li class="nav-item"><a href="/">Inicio</a></li>
        <li class="nav-item"><a href="clientes">Nuevo Cliente</a></li>
        <li class="nav-item"><a href="{{ route('consulta') }}">Consulta</a></li>
    </ul>
    <div class="container">
        @yield("content")
    </div>
</body>
</html>
