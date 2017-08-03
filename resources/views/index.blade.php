@extends('layouts.master')

@section('index')
    <div class="container-fluid text-center" id="company">


        <div>
            <img id="company-banner" class="" src="/img/clinic3.jpg">

            <div id="my-company-mask">
            </div>


            <div id="header-descriptions" class="container container-fluid">

                <div class="row">

                    <div class="col-sm-4 col-sm-offset-2 col-xs-10 col-xs-offset-2 text-left">
                        <h2 id="company-name">Dawes Place Dental</h2>

                        <h4>
                            Dr. Rowena Bucad-Javier<br>
                            &amp; Associates
                        </h4>
                        <button class="btn btn-danger btn-sm">Book Now</button>
                    </div>


                    <div class="col-sm-4 col-sm-offset-2 col-xs-10 col-xs-offset-2 text-left" id="banner-contact">

                        <div class="row">
                            <p class="col-sm-1 col-xs-1"><i class="fa fa-map-marker"></i></p>

                            <p class="col-sm-11 col-xs-11">105-50 Thorncilffe Park Dr<br>
                                East York, ON<br>
                                L6E 1V5
                            </p>
                        </div>


                        <div class="row">
                            <p class="col-sm-1 col-xs-1"><i class="fa fa-phone"></i></p>

                            <p class="col-sm-11 col-xs-11">(416) 824-8036</p>
                        </div>


                        <div class="row">
                            <p class="col-sm-1 col-xs-1"><i class="fa fa-envelope-open-o"></i></p>

                            <p class="col-sm-11 col-xs-11">dawesplace@dental.com</p>
                        </div>


                    </div>

                </div>

            </div>

        </div>


    </div>






    <style>
        .my-icons-lg {
            font-size: 150px;
        }

        #company {

            /*background-image: url("/img/clinic.jpg");*/

            background-repeat: no-repeat;

            /*padding: 170px 25px;*/
            padding: 0;
            /*padding-bottom: 250;*/
            /*height: 560px;*/
        }

        #company-banner {
            /*display: inline-block;*/
            width: 100%;
            /*height: 80%;*/
            /*zoom: 2.0;*/
            /*min-width: 75%;*/
            /*min-width: 640px;*/
            /*position: absolute;*/
            /*height: 560px;*/
            /*left: 0;*/
            /*top: 0px;*/
            /*z-index: -5;*/
            /*min-height: 560px;*/
            /*margin: 0;*/
            /*padding: 0;*/
        }

        #my-company-mask {
            width: 100%;
            height: 100%;
            /*height: 500px;*/
            /*background-color: red;*/
            /*height: 560px;*/
            position: absolute;
            left: 0px;
            top: 0px;
            opacity: 0.1;
            /*z-index: 10;*/

            /*#29e557*/
            background: #41b0ff; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left, #41b0ff, #29e557); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(right, #41b0ff, #29e557); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(right, #41b0ff, #29e557); /* For Firefox 3.6 to 15 */
            background: linear-gradient(to right, #41b0ff, #29e557); /* Standard syntax */

            margin: 0px;
            padding: 0px;
        }

        #header-descriptions {
            /*#header-descriptionZ {*/
            position: absolute;
            /*background-color: pink;*/
            width: 100%;

            left: 0px;
            top: 0px;
            /*top: 25%;*/
            margin: 0;
            padding: 0;
            color: rgb(0, 0, 0);
            font-weight: 100;
            /*text-shadow: 0.1px 0.1px 0.1px rgb(150, 150, 150);*/
            /*z-index: 2;*/
            /*margin-top: 25%;*/
        }

        /*#header-descriptions h2 {*/
        /*font-size: 100%;*/
        /*}*/

        #banner-contact {
            padding-top: 40px;
            padding-left: 20px;
        }
    </style>





    <script>
        function manageBannerContactDisplay() {

            // If the browser width is less than 770px,
            // remove the banner-contact.
            if ($('#my-company-mask').width() <= 770) {
                $('#banner-contact').css('display', 'none');
            }

            // .. if it's greater than 770px, show it back..
            if ($('#my-company-mask').width() > 770) {
                $('#banner-contact').css('display', 'block');
            }
        }


        function manageCompanyMaskDisplay() {

            // For the banner mask.
            $('#my-company-mask').width($('#company-banner').width());


            $('#my-company-mask').height($('#company-banner').height());


//            console.log("$('#company-banner').width()::: " + $('#company-banner').width());
//            console.log("$('#company-banner').height()::: " + $('#company-banner').height());


            // TODO:DEBUG
            console.log("$('#my-company-mask').width()::: " + $('#my-company-mask').width());
            console.log("$('#my-company-mask').height()::: " + $('#my-company-mask').height());


//            header-descriptions
            var imgHeight = $('#company-banner').height();
            imgHeight /= 2;

            $('#header-descriptions').css('top', (imgHeight - 100) + 'px');

//            var companyNameFont = imgHeight / 12;
//            companyNameFont /= 2;
////            $('#company-name').css('fontSize', companyNameFont + 'px');
//            $('#header-descriptions').css('fontSize', companyNameFont + 'px');

        }



        // Event listeners.
        $(window).resize(function () {

            manageBannerContactDisplay();
            manageCompanyMaskDisplay();
        });





        // Tasks.
        manageBannerContactDisplay();
        manageCompanyMaskDisplay();

    </script>


    @include('services')
    @include('about')
    @include('team')
    @include('testimonials')
    @include('contact')
@endsection