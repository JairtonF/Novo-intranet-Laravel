<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/estilos-footer.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/semantic.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>

    

</head>

<body>
    

    @extends('layouts.navbar')

    @yield('navbar')

    @yield('footer')

</body>

</html>