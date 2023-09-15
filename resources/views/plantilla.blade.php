<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet"  >

    <title>@yield('title')</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .active{
            background-color: red;
            color: white;
            text-decoration: none;

        }
        nav ul li a {
            text-decoration: none;
            color : inherit;
        }
        nav ul li {
            display : inline;
        }

        .par {
            background-color: aqua;
        }

        .impar {
            background-color: darkkhaki;
        }
      
    </style>
</head>
<body>
    @include('partials/nav')
    <h1>{{Str::ucFirst(Request::route()->getName() ?? 'Incio')}}</h1>

    @yield('contenido')
    @include('partials/pie')
</body>
</html>