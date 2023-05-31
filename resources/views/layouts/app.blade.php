<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ثمار</title>

    <!-- ===::Top Icon ===  -->
    <link rel="icon" href="{{ asset("assets/images/logo/logo.png") }}">
    <!-- ===::fonts ===  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- ===::css and bootstrap ===  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <!-- ===::IconS   ===  -->
    <link rel="stylesheet" href="{{ asset("assets/css/all.min.css") }}">

</head>
<body>
    <!-- Nav Bar  -->
    @include('layouts.navigation')

    <!-- Sidebar  -->
    @include('layouts.sidebar')

    <!-- Page Content -->
    <div class="main-content">
        @yield("content")
    </div>

    <!-- Footer  -->
    @include('layouts.footer')

    <!-- ===::links js file ---------------------------------------  -->
    <!-- ===::normalize Icon ===  -->
    <!--    <script src="https://kit.fontawesome.com/60137ed173.js" crossorigin="anonymous"></script> Dont Work-->
    <script src="{{asset("assets/js/all.min.js")}}"></script>
    <script src="https://kit.fontawesome.com/c274bc1010.js" crossorigin="anonymous"></script>
    <!-- ===::bootstrap ===  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- ===::Jquery ===  -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- ===::main js code ===  -->
    <script src="{{asset("assets/js/main.js")}}"></script>
    <script src="{{asset("assets/js/all.min.js")}}"></script>
</body>
</html>
