@extends('layouts.master')

@section('index')
    <div class="container-fluid text-center" id="company">
        <div class="row">
            <div class="col-sm-2">
                &nbsp;
            </div>

            <div class="col-sm-6 text-left">
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
            background: #29e557; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left, #29e557, #41b0ff); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(right, #29e557, #41b0ff); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(right, #29e557, #41b0ff); /* For Firefox 3.6 to 15 */
            background: linear-gradient(to right, #29e557, #41b0ff); /* Standard syntax */

            padding: 150px 25px;
        }
    </style>


    @include('services')
    @include('about')
@endsection