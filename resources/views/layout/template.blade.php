<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="{{asset('image/logo2.png')}}" rel="icon">
  <link href="{{asset('image/logo2.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

    @yield('content')

</body>

<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('contactform/contactform.js')}}"></script>

</html>
