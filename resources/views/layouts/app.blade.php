<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Una bonita descripción">
    <meta name="author" content="Felipe Silva">
    <title>Contratista Minera</title>
    @include('layouts.css')
</head>

<body class="color3">
    <!-- Main Header -->
    @include('layouts.header')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <hr>
    <div class="wrapper color1">
        <div class="container color4">
        @include('layouts.footer')
        </div>
    </div>
</body>
</html>