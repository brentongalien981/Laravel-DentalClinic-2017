<div class="container-fluid text-left" id="services">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h2 class="">Our Servies</h2>
        </div>

    </div>


    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">


            <div class="card services-card">

                <div class="row">

                    <div class="col-sm-4 card-img-container">
                        <!--Card image-->
                        <div class="">
                            <img src="/img/services-cosmetic.jpg" class="img-fluid services-img">
                        </div>
                        <!--/.Card image-->
                    </div>


                    <div class="col-sm-8 card-block-description-container">
                        <!--Card content-->
                        <div class="card-block card-block-description align-middle">
                            <!--Title-->
                            <h3 class="card-title">Cosmetic</h3>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the
                                Some quick example text to build on the card title and make up the bulk of the
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>

                            <p>by <strong>Dr. Rowena Javier</strong></p>
                        </div>
                        <!--/.Card content-->
                    </div>


                </div>

            </div>


            <div class="card services-card">

                <div class="row">

                    <div class="col-sm-4 card-img-container">
                        <!--Card image-->
                        <div class="">
                            <img src="/img/services-implant.jpg" class="img-fluid services-img">
                        </div>
                        <!--/.Card image-->
                    </div>


                    <div class="col-sm-8 card-block-description-container">
                        <!--Card content-->
                        <div class="card-block card-block-description align-middle">
                            <!--Title-->
                            <h3 class="card-title text-info">Implant</h3>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the
                                Some quick example text to build on the card title and make up the bulk of the
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>

                            <p>by <strong>Dr. Lea Bucad</strong></p>
                        </div>
                        <!--/.Card content-->
                    </div>

                </div>

            </div>


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
                            <h3 class="card-title text-danger">Restoration</h3>
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

                    <div id="puta1" class="services-card-details col-sm-12">

                        <h5>Detailed Services</h5>
                        <hr>

                        <ul>
                            <li><a href="#">list item 1</a></li>
                            <li><a href="#">list item 2</a></li>
                            <li><a href="#">list item 3</a></li>
                        </ul>
                        <hr>

                        <div><a href="#">view all services</a></div>
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>


<style>
    #services {
        background-color: rgb(249, 249, 249);
        padding: 100px 40px;
    }

    /*.par-md {*/
    /*font-size: 17px;*/
    /*line-height: 1.7em;*/
    /*}*/

    .services-img {
        width: 100%;
    }

    .card {
        width: 100%;
        /*height: 120%;*/

    }

    .services-card {
        border-radius: 5px;
        margin-bottom: 100px;
        background-color: rgb(249, 249, 249);
        /*border: none;*/
        box-shadow: none;
    }

    .card img {
        width: 100%;
        height: 100%;

        border-radius: 5px;
        box-shadow: 0px 10px 20px rgb(180, 180, 180);
    }

    .card-img-container {

    }

    #services h2 {

        margin-bottom: 50px;
    }

    .services-card-details {
        /*width: 100px;*/
        height: 100%;
        position: absolute;
        background-color: rgb(240, 240, 240);
        opacity: 0;
        /*z-index: 5;*/
        margin-left: 13px;
        padding: 20px;
        border-radius: 5px;
        visibility: hidden;
        box-shadow: 0px 10px 20px rgb(180, 180, 180);
    }

    .card-block-description p {
        font-weight: 100;
        color: rgb(170, 170, 170);
    }

    .card-block-description strong {
        font-weight: 100;
        color: black;
    }

    .card-block-description h3 {
        font-size: 36px;
        font-weight: 100;
    }

    .services-card hr {
        background-color: rgb(200, 200, 200);
        height: 1px;
        padding: 0;
        margin-top: -8px;
    }

    .services-card-details {
        padding-left: 70px;
        padding-right: 70px;
    }
</style>


<script>
    $('.services-card').hover(function () {

        $('#puta1').css("visibility", "visible");
//        $('#puta1').css("opacity", "0.5");
        $("#puta1").animate({opacity: "0.9"}, 500);

    }, function () {
        $("#puta1").animate({opacity: "0.1"}, 400, function () {
            $('#puta1').css("visibility", "hidden");
        });


    });

    //    document.getElementById('puta1').onmouseover = function () {
    //        window.alert("shit");
    //    };
    //
    //    window.alert("tanasdjf");
</script>






