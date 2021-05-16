<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Page is not found</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/frontend/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/imagebg.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">

</head>
<body class="boxed_wrapper">


<!-- error-section -->
<section class="error-section">
    <div class="pattern-box">
        <div class="pattern pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-50.png') }});"></div>
        <div class="pattern pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-51.png') }});"></div>
        <div class="pattern pattern-3" style="background-image: url({{ asset('assets/frontend/images/shape/shape-52.png') }});"></div>
        <div class="pattern pattern-4" style="background-image: url({{ asset('assets/frontend/images/shape/shape-53.png') }});"></div>
    </div>
    <div class="auto-container">
        <div class="inner-box centred">
            <figure class="image-box"><img src="{{ asset('assets/frontend/images/resource/error-1.png') }}" alt=""></figure>
            <h2>Page is not found</h2>
            <p>We're not being able to find the page you're looking for</p>
            <a href="{{ url('/') }}" class="theme-btn style-one">Back to Home<span>+</span></a>
        </div>
    </div>
</section>
<!-- error-section end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-angle-up"></span>
</button>

<!-- jequery plugins -->
<script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
<script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
<script src="{{ asset('assets/frontend/js/validation.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/frontend/js/appear.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/frontend/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/frontend/js/tilt.jquery.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('assets/frontend/js/script.js') }}"></script>

</body>
</html>
