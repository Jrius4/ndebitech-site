<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.materia.min.css')}}">
<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/custom-icons.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style.blue.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}">
<link rel="shortcut icon" href="{{asset('/img/logos/ndebi-tech-favi-blue.png')}}" type="image/x-icon">
    <title>Ndebi tech</title>
</head>
<body>
    @include('layouts.home.navbar')

        @yield('content')

    @include('layouts.home.footer')


    <!-- JavaScript files-->
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/assets/js/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/assets/js/front.js')}}"></script>
    
</body>
</html>