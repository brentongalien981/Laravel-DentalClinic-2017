<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- TODO:REMINDER --}}
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Dawes Dental Place</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>--}}
    {{--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- CSS Files -->
    {{--href="{{ URL::asset('css/masterCss.css') }}"--}}
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/material-kit.css" rel="stylesheet"/>
    <link href="css/slide-animation.css" rel="stylesheet">




    <!--   Core JS Files   -->
    <script src="js/puta.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    {{--<script src="{{ URL::asset('js/nouislider.min.js') }}" type="text/javascript"></script>--}}

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="js/material-kit.js" type="text/javascript"></script>

    <script src="js/slide-animation.js" type="text/javascript"></script>





    {{--My Shits--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/my-main.css" rel="stylesheet"/>
</head>

{{--<body class="index-page">--}}
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

@include('layouts.nav')

<div id="my-wrapper">
    @yield('index')
</div>



</body>





<script type="text/javascript">

    //        $().ready(function(){
    //            // the body of this function is in assets/material-kit.js
    //            materialKit.initSliders();
    //            window_width = $(window).width();
    //
    //            if (window_width >= 992){
    //                big_image = $('.wrapper > .header');
    //
    //                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
    //            }
    //
    //        });
</script>





{{-- SCRIPT for smooth scrolling. --}}
<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    })
</script>
</html>
