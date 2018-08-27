<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Last Bench Talk</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    

   
   
    <link href="{{url('resources/assets/front_asset/css/media_query.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('resources/assets/front_asset/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{url('resources/assets/front_asset/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="{{url('resources/assets/front_asset/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('resources/assets/front_asset/css/owl.theme.default.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="{{url('resources/assets/front_asset/css/style_1.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="{{url('resources/assets/front_asset/js/modernizr-3.5.0.min.js')}}"></script>



    @yield('style')
</head>
<body>


    @include('common.member_header')
    
    @yield('content')
  

    <!-- Right Panel -->
<script src="{{url('resources/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>

@include('common.member_footer')
@yield('script')
</body>
</html>
