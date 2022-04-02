<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="{{asset('../assets/css/maicons.css')}}">

    <link rel="stylesheet" href="{{asset('../assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('../assets/vendor/owl-carousel/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('../assets/vendor/animate/animate.css')}}">

    <link rel="stylesheet" href="{{asset('../assets/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('/public/active.css')}}">
    <link rel="stylesheet" href="{{asset('/public/active.js')}}">
</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('layouts.header')

<div class="page-hero bg-image overlay-dark" style="background-image: url({{asset('../assets/img/bg_image_1.jpg')}});">
    @yield('home_section')
    @yield('about_section')
    @yield('doctors_section')
    @yield('news_section')
    @yield('contact_section')
</div>


@yield('homeContent')
@yield('aboutContent')
@yield('doctorsContent')
@yield('newsContent')
@yield('contactContent')

@include('layouts.footer')

<script src="{{asset('../assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('../assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('../assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('../assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('../assets/js/theme.js')}}"></script>

</body>
</html>
