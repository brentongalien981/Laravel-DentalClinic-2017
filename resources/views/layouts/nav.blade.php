<!-- Navbar -->
<nav class="navbar navbar-primary navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="my-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                {{--<span class="icon-bar"></span>--}}
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="#">
                <i id="home-icon" class="fa fa-home"></i>
            </a>

        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                {{--<li>--}}
                    {{--<a href="#" target="_blank">--}}
                        {{--Company--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="#services-main-container" target="">
                        Services
                    </a>
                </li>




                <li>
                    <a href="#about-main-container" target="">
                        About
                    </a>
                </li>




                <li>
                    <a href="#team-main-container" target="">
                        Team
                    </a>
                </li>



                <li>
                    <a href="#testimonials-main-container" target="">
                        Testimonials
                    </a>
                </li>


                <li>
                    <a href="#contact-main-container" target="">Contact</a>
                </li>



                <li>
                    <a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/"
                       target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Like us on Facebook" data-placement="bottom"
                       href="https://www.facebook.com/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Follow us on Instagram" data-placement="bottom"
                       href="https://www.instagram.com/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>





</nav>
<!-- End Navbar -->


<style>
    .my-container {
        padding-left: 5%;
        padding-right: 5%;
    }

    #home-icon {
        font-size: 25px;
        color: white;
        padding-top: 11px;
        /*padding-left: 10px;*/
    }

    .navbar-success {
        /*opacity: 0.95;*/
    }
</style>