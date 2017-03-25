<!--Bootstrap 4  css-->
{!! Html::style('css/bootstrap.min.css') !!}
<!--Font Awesome 4.7.0 -->
{!! Html::style('css/font-awesome.min.css') !!}
<!-- main css -->
{!! Html::style('css/main.css') !!}
<!--Skins-->
{!! Html::style('css/estilo1.css') !!}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--Bootstrap requires Tether-->
{!! Html::script('js/tether.min.js') !!}
<!-- jQuery 3.1.1 -->
{!! Html::script('js/jquery-3.1.1.min.js') !!}
<!--Bootstrap 4 js-->
{!! Html::script('js/bootstrap.min.js') !!}
@yield('scripts')