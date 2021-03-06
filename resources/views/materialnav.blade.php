<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dawes Dental Place</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    {{--href="{{ URL::asset('css/masterCss.css') }}"--}}
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/material-kit.css') }}" rel="stylesheet" />
</head>
<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                {{--<span class="icon-bar"></span>--}}
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://www.creative-tim.com">
                <i id="home-icon" class="fa fa-home"></i>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" target="_blank">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Services
                    </a>
                </li>

                <li>
                    <a href="#" target="_blank">
                        About
                    </a>
                </li>

                <li>
                    <a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->


<div class="wrapper">
    <div id="div1"></div>
    <div id="div2"></div>

    <style>
        #div1 {
            height: 500px;
            background-color: orangered;
        }

        #div2 {
            height: 500px;
            background-color: blue;
        }

        #home-icon {
            font-size: 25px;
            color: white;
            padding-top: 10px;
        }
    </style>
</div>


</body>
<!--   Core JS Files   -->
<script src="{{ URL::asset('js/puta.js') }}"></script>
<script src="{{ URL::asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/material.min.js') }}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
{{--<script src="{{ URL::asset('js/nouislider.min.js') }}" type="text/javascript"></script>--}}

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{ URL::asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ URL::asset('js/material-kit.js') }}" type="text/javascript"></script>

<script type="text/javascript">

//    $().ready(function(){
//        // the body of this function is in assets/material-kit.js
//        materialKit.initSliders();
//        window_width = $(window).width();
//
//        if (window_width >= 992){
//            big_image = $('.wrapper > .header');
//
//            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
//        }
//
//    });
</script>
</html>
