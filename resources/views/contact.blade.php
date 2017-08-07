{{--<div class="" id="contact-main-container">--}}
    {{--<div class="row">--}}
        {{--<h3 class="text-left col-sm-4 col-sm-offset-1" id="contact-title">Contact Us</h3>--}}
    {{--</div>--}}
{{--</div>--}}


<div id="contact-main-container" class="">
</div>

<div id="map">
</div>

<div id="contact-details-container" class="row">
    {{-- START: Dental Clinic Contact Info --}}
    <div class="col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-left">

        <div class="card my-contact-details slideanim">
            <div class="header header-info" id="my-contact-content">

                <div class="row">

                    {{--<h4 class="col-sm-1 label label-warning"><i class="fa fa-handshake-o"></i></h4>--}}


                    <h4 id="contact-us-title" class="col-sm-10 label-danger"><i class="fa fa-handshake-o"></i> Contact Us</h4>

                </div>

                <div class="row">

                    <h4 class="col-sm-1"><i class="fa fa-home"></i></h4>
                    {{--<i class="fa fa-home col-sm-1"></i>--}}


                    <h4 class="col-sm-10">Dawes Place Dental Clinic</h4>

                </div>


                <div class="row">
                    <p class="col-sm-1"><i class="fa fa-map-marker"></i></p>

                    <p class="col-sm-10">105-50 Thorncilffe Park Dr<br>
                        East York, ON<br>
                        L6E 1V5
                    </p>
                </div>


                <div class="row">
                    <p class="col-sm-1"><i class="fa fa-phone"></i></p>

                    <p class="col-sm-10">(416) 824-8036</p>
                </div>


                <div class="row">
                    <p class="col-sm-1"><i class="fa fa-envelope-open-o"></i></p>

                    <p class="col-sm-10">dawesplace@dental.com</p>
                </div>


            </div>
        </div>

    </div>
    {{-- END: Dental Clinic Contact Info --}}
</div>


<script>
    function initMap() {
        var dawes = {lat: 43.6998132, lng: -79.2980773};
//        43.6998132,-79.2980773
        var centerLocation = {lat: 43.7003646, lng: -79.3027575};
//        43.7006377,-79.3004014,17.05
        var map = new google.maps.Map(document.getElementById('map'), {
            center: centerLocation,
            zoom: 17,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: dawes,
            map: map,
            title: 'Dawes Dental'
        });


        //
        displayContactDetails();
    }


    function displayContactDetails() {
        document.getElementById("map").appendChild(document.getElementById("contact-details-container"));
    }
</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('app.google_maps_api_key') }}&callback=initMap">
</script>


<div class="section text-center" id="message-form-container">


    {{-- Form --}}
    <div class="row">

        {{-- START: Email Form --}}
        <div class="col-md-10 col-md-offset-1" id="email-form">

            <div class="card card-signup slideanim">

                <form class="form" method="" action="">
                    <div class="header header-success text-center">
                        <h3>Message us on</h3>
                        <div class="social-line">
                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>


                    <p class="text-divider">or e-mail us</p>


                    <div class="content">


                        <div class="row">

                            {{-- For inputs name, email, and phone. --}}
                            <div class="col-md-12">

                                <div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-user-circle-o"></i>
										</span>
                                    <input type="text" class="form-control" placeholder="Name...">
                                </div>


                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" placeholder="Email...">
                                </div>


                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                                    <input type="tel" placeholder="Phone #..." class="form-control"/>
                                </div>


                                <!-- If you want to add a checkbox to this form, uncomment this code

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                        Subscribe to newsletter
                                    </label>
                                </div> -->


                                <div class="input-group">
                            <span class="input-group-addon" style="padding-bottom: 23%;">
                                <i class="fa fa-envelope"></i>
                            </span>

                                    <textarea class="form-control" placeholder="Here can be your nice text..."
                                              rows="10"></textarea>
                                </div>

                            </div>


                        </div>


                    </div>


                    <div class="footer text-center">
                        {{--<a href="#pablo" class="btn btn-simple btn-primary btn-lg">Get Started</a>--}}
                        <button class="btn btn-md btn-success">Send</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- END: Email Form --}}


    </div>
</div>


<style>
    #contact-main-container {
        /*background-color: lavenderblush;*/
        padding: 0px 40px;
        /*padding-top: 80px;*/
        /*padding-bottom: -30px;*/
        /*margin-bottom: -30px;*/
        /*background-color: white;*/
    }

    #message-form-container {
        /*background-color: rgb(224, 224, 224);*/
        /*background-color: rgb(250, 250, 250);*/
        background-color: rgb(244, 255, 245);
        padding: 150px 40px;
        /*padding-left: 40px;*/
        /*padding-right: 40px;*/

    }

    #map {
        margin-top: 0;
        height: 700px;
        width: 100%;
        /*opacity: 0.3;*/
    }

    #contact-main-container i {
        font-size: 20px;
    }

    #email-form {
        /*margin: 0;*/
        /*padding: 0;*/

    }

    #email-form .card {
        box-shadow: 0px 10px 20px rgb(120, 120, 120);
    }

    #contact-title {
        /*margin-bottom: 80px;*/
    }

    .my-contact-details {
        /*background-color: rgb(249, 249, 249);*/
        box-shadow: none;

    }

    #my-contact-content {
        /*left: 0px;*/
        width: 100%;
        padding: 30px 30px;
        font-weight: 100;
        font-size: 14px;
        /*margin-right: 100px;*/
    }



    #my-contact-content h4 {
        font-size: 24px;
        font-weight: 300;
    }

    #my-contact-content div {
        margin-bottom: 15px;
    }

    #contact-details-container {
        /*position: absolute;*/
        /*z-index: 5;*/
        /*opacity: 1;*/
        margin-top: 80px;
        /*margin-left: 0px;*/

    }

    #contact-details-container .card {
        background-color: rgba(255, 255, 255, 0.0);
    }

    #contact-us-title {
        padding: 5px 40px;
        border-radius: 13px;
        margin-left: 10px;
        background-color: white;
        color: blue;
    }
</style>