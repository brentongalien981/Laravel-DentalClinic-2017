@extends('layouts.master')

@section('index')
    <div class="container-fluid text-center" id="company">
        <div id="my-company-mask"></div>



        <div class="row">

            <div class="col-sm-8 col-sm-offset-1 text-left">
                <h2>Dawes Place Dental</h2>

                <h4>
                    Dr. Rowena Bucad-Javier<br>
                    &amp; Associates
                </h4>
                <button class="btn btn-primary btn-lg">Get in Touch</button>
            </div>


            <div class="col-sm-3">
                <i class="fa fa-globe my-icons my-icons-lg"></i>
            </div>

        </div>
    </div>


    <style>
        .my-icons-lg {
            font-size: 150px;
        }

        #company {

            background-image: url("/img/clinic.jpg");

            background-repeat: no-repeat;

            padding: 170px 25px;
            /*padding-bottom: 250;*/
            height: 580px;
        }

        #my-company-mask {
            width: 100%;
            height: 580px;
            position: absolute;
            left: 0px;
            top: 0px;
            opacity: 0.05;


            /*#29e557*/
            background: #41b0ff; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left, #41b0ff,#29e557); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(right, #41b0ff,#29e557); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(right, #41b0ff,#29e557); /* For Firefox 3.6 to 15 */
            background: linear-gradient(to right, #41b0ff,#29e557); /* Standard syntax */

            margin: 0px;
            padding: 0px;
        }
    </style>


    @include('services')
    @include('about')
    @include('team')
    @include('testimonials')
    @include('contact')
@endsection