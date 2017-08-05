<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Bootstrap Theme Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    {{--My Shits--}}
    <link href="/css/services.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet">
</head>
<body>

<div class="container">
    {{--<button--}}
    {{--class="btn btn-success"--}}
    {{--data-toggle="collapse"--}}
    {{--data-target="#restoration-sub-services">--}}
    {{--collapse--}}
    {{--</button>--}}

    {{--<div id="restoration-sub-services" class="collapse">--}}
    {{--<div>--}}
    {{--<h3 class="">Restoration</h3>--}}

    {{--<p class="">Some quick example text to build on the card title and make up the--}}
    {{--bulk of the--}}
    {{--Some quick example text to build on the card title and make up the bulk of the--}}
    {{--Some quick example text to build on the card title and make up the bulk of the--}}
    {{--card's content.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}





    {{--START: services-accordion--}}
    <div id="services-accordion">


        {{-- START: Restoration sub-service container. --}}
        <div class="sub-services-container bg-success">

            {{-- END: Restoration sub-service container. --}}

            {{--START: Restoration collapse link--}}
            <div class="">
                <h4>
                    <a data-toggle="collapse"
                       data-parent="#services-accordion"
                       href="#restoration-sub-services"
                       class="restoration-link">
                        <img src="/img/icons/dentist-tooth-with-metallic-root.svg">Restoration
                    </a>
                </h4>
            </div>
            {{--END: Restoration collapse link--}}


            {{--START: Restoration sub-services link--}}
            <div
                    id="restoration-sub-services"
                    class="collapse">

                {{--START: Porcelain fillings sub-service card--}}
                <div class="card services-card">

                    <div class="row">


                        <div class="col-sm-4 card-img-container">
                            <!--Card image-->
                            <div class="">
                                <img src="/img/services-restoration.jpg" class="img-fluid services-img">
                            </div>
                            <!--/.Card image-->
                        </div>


                        <div class="col-sm-8 card-block-description-container">
                            <!--Card content-->
                            <div class="card-block card-block-description align-middle">
                                <!--Title-->
                                <h3 class="card-title text-danger">Porcelain fillings</h3>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <p>by <strong class="">CEO Dexter Javier</strong></p>
                            </div>
                            <!--/.Card content-->
                        </div>

                    </div>

                </div>
                {{--END: Porcelain fillings sub-service card--}}





                {{--START: Crowns sub-service card--}}
                <div class="card services-card">

                    <div class="row">


                        <div class="col-sm-4 card-img-container">
                            <!--Card image-->
                            <div class="">
                                <img src="/img/services-restoration.jpg" class="img-fluid services-img">
                            </div>
                            <!--/.Card image-->
                        </div>


                        <div class="col-sm-8 card-block-description-container">
                            <!--Card content-->
                            <div class="card-block card-block-description align-middle">
                                <!--Title-->
                                <h3 class="card-title text-danger">Crowns</h3>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <p>by <strong class="">CEO Dexter Javier</strong></p>
                            </div>
                            <!--/.Card content-->
                        </div>

                    </div>

                </div>
                {{--END: Crowns sub-service card--}}





                {{--START: Composite resin sub-service card--}}
                <div class="card services-card">

                    <div class="row">


                        <div class="col-sm-4 card-img-container">
                            <!--Card image-->
                            <div class="">
                                <img src="/img/services-restoration.jpg" class="img-fluid services-img">
                            </div>
                            <!--/.Card image-->
                        </div>


                        <div class="col-sm-8 card-block-description-container">
                            <!--Card content-->
                            <div class="card-block card-block-description align-middle">
                                <!--Title-->
                                <h3 class="card-title text-danger">Composite resin</h3>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <p>by <strong class="">CEO Dexter Javier</strong></p>
                            </div>
                            <!--/.Card content-->
                        </div>

                    </div>

                </div>
                {{--END: Composite resin sub-service card--}}

            </div>
            {{--END: Restoration sub-services link--}}

        </div>


        {{-- START: Implant sub-service container. --}}
        <div class="sub-services-container bg-success">

            {{--START: Implant collapse link--}}
            <div class="">
                <h4>
                    <a data-toggle="collapse"
                       data-parent="#services-accordion"
                       href="#implant-sub-services"
                       class="restoration-link">
                        <img src="/img/icons/dentist-tools.svg">Implant
                    </a>
                </h4>
            </div>
            {{--END: Implant collapse link--}}


            {{--START: Implant sub-services link--}}
            <div
                    id="implant-sub-services"
                    class="collapse">

                {{--START: Porcelain fillings sub-service card--}}
                <div class="card services-card">

                    <div class="row">


                        <div class="col-sm-4 card-img-container">
                            <!--Card image-->
                            <div class="">
                                <img src="/img/services-restoration.jpg" class="img-fluid services-img">
                            </div>
                            <!--/.Card image-->
                        </div>


                        <div class="col-sm-8 card-block-description-container">
                            <!--Card content-->
                            <div class="card-block card-block-description align-middle">
                                <!--Title-->
                                <h3 class="card-title text-danger">Porcelain fillings</h3>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <p>by <strong class="">CEO Dexter Javier</strong></p>
                            </div>
                            <!--/.Card content-->
                        </div>

                    </div>

                </div>
                {{--END: Porcelain fillings sub-service card--}}





                {{--START: Crowns sub-service card--}}
                <div class="card services-card">

                    <div class="row">


                        <div class="col-sm-4 card-img-container">
                            <!--Card image-->
                            <div class="">
                                <img src="/img/services-restoration.jpg" class="img-fluid services-img">
                            </div>
                            <!--/.Card image-->
                        </div>


                        <div class="col-sm-8 card-block-description-container">
                            <!--Card content-->
                            <div class="card-block card-block-description align-middle">
                                <!--Title-->
                                <h3 class="card-title text-danger">Crowns</h3>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <p>by <strong class="">CEO Dexter Javier</strong></p>
                            </div>
                            <!--/.Card content-->
                        </div>

                    </div>

                </div>
                {{--END: Crowns sub-service card--}}





                {{--START: Composite resin sub-service card--}}
                <div class="card services-card">

                    <div class="row">


                        <div class="col-sm-4 card-img-container">
                            <!--Card image-->
                            <div class="">
                                <img src="/img/services-restoration.jpg" class="img-fluid services-img">
                            </div>
                            <!--/.Card image-->
                        </div>


                        <div class="col-sm-8 card-block-description-container">
                            <!--Card content-->
                            <div class="card-block card-block-description align-middle">
                                <!--Title-->
                                <h3 class="card-title text-danger">Composite resin</h3>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <p>by <strong class="">CEO Dexter Javier</strong></p>
                            </div>
                            <!--/.Card content-->
                        </div>

                    </div>

                </div>
                {{--END: Composite resin sub-service card--}}

            </div>
            {{--END: Implant sub-services link--}}

        </div>
        {{-- END: Implant sub-service container. --}}

    </div>
    {{--END: services-accordion--}}


</div>
</body>
</html>