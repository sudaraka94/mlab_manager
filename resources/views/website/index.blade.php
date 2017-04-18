<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rathna Medical Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('web/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        .google-maps {
            position: relative;
            padding-bottom: 50%; // This is the aspect ratio
        height: 0;
            overflow: hidden;
        }
        .google-maps iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }
    </style>
</head>
<body>
<div id="wrapper" class="home-page">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>Mon - Sat 8.00 - 18.00. Sunday CLOSED</span></p>
                    <p class="pull-right"><i class="fa fa-phone"></i>Hotline. (+94)71-4461177 &nbsp;<i class="fa fa-phone"></i>Tel No. (+94)32-7914557</p>
                    <p class="pull-right"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}"><img style="height:50px;width: auto" src="{{asset('web/img/logo.png')}}" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="about.html">Company</a></li>--}}
                                {{--<li><a href="#">Our Team</a></li>--}}
                                {{--<li><a href="#">News</a></li>--}}
                                {{--<li><a href="#">Investors</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li><a href="{{route('dashboard')}}">Admin Area</a></li>
                        {{--<li><a href="portfolio.html">Portfolio</a></li>--}}
                        {{--<li><a href="pricing.html">Pricing</a></li>--}}
                        {{--<li><a href="contact.html">Contact</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <section id="banner">

        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="{{asset('web/img/slides/1.jpg')}}" alt=""  />
                    {{--<div class="flex-caption" style="color: #ffffff;">--}}
                        {{--<h3>Creative</h3>--}}
                        {{--<p>We create the opportunities</p>--}}

                    {{--</div>--}}
                </li>
                <li>
                    <img src="{{asset('web/img/slides/2.jpg')}}" alt=""  />
                    {{--<div class="flex-caption">--}}
                        {{--<h3 style="color: #ffffff;>Solution</h3>--}}
                        {{--<p style="color: #ffffff;>Success depends on work</p>--}}

                    {{--</div>--}}
                </li>
            </ul>
        </div>
        <!-- end slider -->

    </section>
    <section id="call-to-action-2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9">
                    <h3>Rathna Medical Service</h3>
                    <p>Rathna Medical Service is the leading healthcare service provider in Anamaduwa area.Our mission is to provide a reliable and customer friendly service to our customers. </p>
                </div>
                {{--<div class="col-md-2 col-sm-3">--}}
                    {{--<a href="#" class="btn btn-primary">Read More</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

    <section id="content">


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">Our Services</h2>
                        We gurantee the reliability and accuracy of our every service with the experience of 24 years in the healthcare industry.
                    </div>
                    <br/>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-flask"></i>
                    <div class="info-blocks-in">
                        <h3>Conducting medical laboratory tests</h3>
                        <p>We conduct a broad spectrum of medical laboratory tests. We have been able to win the poeples' trust throughout our relaible service of 24 years </p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-ambulance"></i>
                    <div class="info-blocks-in">
                        <h3>Undertaking tests done by Durdans Laboratory</h3>
                        <p>We collect samples to be tested by Durdans Laboratory,Colombo and gurantee on time delivery of results.</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-hospital-o "></i>
                    <div class="info-blocks-in">
                        <h3>Undertaking tests done by Balasooriya Hospital</h3>
                        <p>We collect samples to be tested by Balasooriya Hospital,Puttalam and gurantee on time delivery of results.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-heartbeat "></i>
                    <div class="info-blocks-in">
                        <h3>Conducting E.C.G tests</h3>
                        <p>We conduct E.C.G test with best equipments.Our laboratory always gurantees the reliability in test results.</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-file-text"></i>
                    <div class="info-blocks-in">
                        <h3>Conducting Scans</h3>
                        <p>We are equipped with best quality equipments to conduct a wide range of medical scans. We gurantee the delivery of accurate results through the 24 years of experience</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-stethoscope"></i>
                    <div class="info-blocks-in">
                        <h3>Channelling Service</h3>
                        <p>We provide the best way to channel your doctor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Channelling Services</h2>
                        <p>We provide the best way to channel your doctor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text" style="line-height: 2em;font-size: 1.5em;">
                        {{--<p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>--}}

                        <ul class="withArrow" style="margin-top: 0px">
                            <li><span class="fa fa-angle-right"></span> V.O.G (ප්‍රසව හා නාරිවේද විශේෂඳ වෛද්‍ය සේවය)</li>
                            <li><span class="fa fa-angle-right"></span> V.P (කායික රෝග විශේෂඳ වෛද්‍ය සේවය) : <strong>Thursdays from 3.30pm</strong></li>
                            <li><span class="fa fa-angle-right"></span> Dermatologist (චර්ම රෝග විශේෂඳ වෛද්‍ය සේවය) : <strong>Thursdays from 6.30pm & Every poya day from 12pm</strong></li>
                            <li><span class="fa fa-angle-right"></span> Pediatrician (ළමා රෝග විශේෂඳ වෛද්‍ය සේවය) : <strong>Thursdays from 4.00pm</strong></li>
                        </ul>
                        {{--<a href="#" class="btn btn-primary">Learn More</a>--}}
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-image">
                        <img src="{{asset('web/img/about.jpeg')}}" alt="About Images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row" style="margin-bottom: 1px">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Our Location</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="google-maps" style="margin-bottom: 35px">
        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJTXF3bCsk_ToRuzlPtNPO5Ko&key=AIzaSyDVYhJzZra2vMyd3SpJ4jojv6MhZYbXnAk" allowfullscreen></iframe>
    </div>



    {{--<div class="about home-about">--}}
        {{--<div class="container">--}}

            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<!-- Heading and para -->--}}
                    {{--<div class="block-heading-two">--}}
                        {{--<h3><span>Programes</span></h3>--}}
                    {{--</div>--}}
                    {{--<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br><br>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="block-heading-two">--}}
                        {{--<h3><span>Latest News</span></h3>--}}
                    {{--</div>--}}
                    {{--<!-- Accordion starts -->--}}
                    {{--<div class="panel-group" id="accordion-alt3">--}}
                        {{--<!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->--}}
                        {{--<div class="panel">--}}
                            {{--<!-- Panel heading -->--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">--}}
                                        {{--<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseOne-alt3" class="panel-collapse collapse">--}}
                                {{--<!-- Panel body -->--}}
                                {{--<div class="panel-body">--}}
                                    {{--Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">--}}
                                        {{--<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseTwo-alt3" class="panel-collapse collapse">--}}
                                {{--<div class="panel-body">--}}
                                    {{--Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">--}}
                                        {{--<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseThree-alt3" class="panel-collapse collapse">--}}
                                {{--<div class="panel-body">--}}
                                    {{--Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">--}}
                                        {{--<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseFour-alt3" class="panel-collapse collapse">--}}
                                {{--<div class="panel-body">--}}
                                    {{--Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Accordion ends -->--}}

                {{--</div>--}}

                {{--<div class="col-md-4">--}}
                    {{--<div class="block-heading-two">--}}
                        {{--<h3><span>Testimonials</span></h3>--}}
                    {{--</div>--}}
                    {{--<div class="testimonials">--}}
                        {{--<div class="active item">--}}
                            {{--<blockquote><p>Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>--}}
                            {{--<div class="carousel-info">--}}
                                {{--<img alt="" src="img/team4.jpg" class="pull-left">--}}
                                {{--<div class="pull-left">--}}
                                    {{--<span class="testimonials-name">Marc Cooper</span>--}}
                                    {{--<span class="testimonials-post">Technical Director</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}



            {{--<br>--}}

        {{--</div>--}}

    {{--</div>--}}



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-md-offset-4" style="text-align: center">
                    <div class="widget" style="font-size: 1.4em;">
                        <h5 class="widgetheading" style="font-size: 1.4em;">Contact Us</h5>
                        <address>
                            <strong>Rathna Medical Laboratory</strong><br>
                            Puttalam Road,<br>
                            Anamaduwa.</address>
                        <p style="line-height: 1.6em;">
                            <i class="fa fa-phone"></i>Hotline. (+94)71-4461177 <br>
                            <i class="fa fa-phone"></i>Tel No. (+94)32-7914557<br>
                            <i class="icon-envelope-alt"></i> contact@rathna.info
                        <ul class="social-network" style="    margin-left: -52px;">
                            <li><a href="https://www.facebook.com/rathnamed/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            {{--<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>--}}
                            {{--<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>--}}
                        </ul>
                        </p>
                    </div>
                </div>
                {{--<div class="col-md-3 col-sm-3">--}}
                    {{--<div class="widget">--}}
                        {{--<h5 class="widgetheading">Quick Links</h5>--}}
                        {{--<ul class="link-list">--}}
                            {{--<li><a href="#">Latest Events</a></li>--}}
                            {{--<li><a href="#">Terms and conditions</a></li>--}}
                            {{--<li><a href="#">Privacy policy</a></li>--}}
                            {{--<li><a href="#">Career</a></li>--}}
                            {{--<li><a href="#">Contact us</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-3">--}}
                    {{--<div class="widget">--}}
                        {{--<h5 class="widgetheading">Latest posts</h5>--}}
                        {{--<ul class="link-list">--}}
                            {{--<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>--}}
                            {{--<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>--}}
                            {{--<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-3">--}}
                    {{--<div class="widget">--}}
                        {{--<h5 class="widgetheading">Recent News</h5>--}}
                        {{--<ul class="link-list">--}}
                            {{--<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>--}}
                            {{--<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>--}}
                            {{--<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>
                                Wish Digital <span>&copy; 2017 All right reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            {{--<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>--}}
                            {{--<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('web/js/jquery.js')}}"></script>
<script src="{{asset('web/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('web/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('web/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('web/js/animate.js')}}"></script>
<!-- Vendor Scripts -->
<script src="{{asset('web/js/modernizr.custom.js')}}"></script>
<script src="{{asset('web/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('web/js/animate.js')}}"></script>
<script src="{{asset('web/js/custom.js')}}"></script>
</body>
</html>