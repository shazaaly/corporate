<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>X-Corporation</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="{{asset('css/mobile-menu.css')}}" rel="stylesheet">
    <!-- font-awesome -->
    <link href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <div class="uc-mobile-menu-pusher">

        <div class="content-wrapper">
            <nav class="navbar m-menu navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('home')}}"><img src="img/logo.png" alt=""></a>
                    </div>


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                        class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Type Something">
                                                    <span class="input-group-btn">
			                                  <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right main-nav">
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about-us')}}">About</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <span><i class="fa fa-angle-down"></i>Blog</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        @include('includes.blogMenuContent')
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->

            <div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                    <li data-target="#x-corp-carousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/hero-slide-1.jpg" alt="Hero Slide">

                        <div class="carousel-caption">
                            <h1>It′s simple, smart and occasionally magical.</h1>

                            <p>Intrinsicly negotiate corporate synergy rather than user-centric web services. Synergistically
                                transition emerging schemas and.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/hero-slide-2.jpg" alt="...">

                        <div class="carousel-caption">
                            <h1>It′s profitable and successful!</h1>

                            <p>Synergistically enhance low-risk high-yield testing procedures with clicks-and-mortar architectures.
                                Compellingly revolutionize future-proof interfaces and.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/hero-slide-3.jpg" alt="...">

                        <div class="carousel-caption">
                            <h1>Good solutions for your business!</h1>

                            <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. Continually unleash unique
                                niches after go forward.</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- #x-corp-carousel-->

            <section class="x-services ptb-100 gray-bg">

                <section class="section-title">
                    <div class="container text-center">
                        <h2>What We Offer</h2>
                        <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                    </div>
                </section>

@include('includes.whatWeOffer')
                <!-- .container -->
            </section>


{{--            blog section--}}
@include('includes.blog')

            <!-- .x-services -->

            <section class="x-features">
                <section class="section-title">
                    <div class="container text-center">
                        <h2>Our Capabilities</h2>
                        <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                    </div>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 img-left">
                            <img class="img-responsive" src="img/img-about.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="promo-block-wrapper clearfix">
                                <div class="promo-icon">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="promo-content">
                                    <h3>We teach you how to improve your business</h3>

                                    <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <!-- /.promo-block-wrapper -->

                            <div class="promo-block-wrapper clearfix">
                                <div class="promo-icon">
                                    <i class="fa fa-life-ring"></i>
                                </div>
                                <div class="promo-content">
                                    <h3>We make the technology affordable for you</h3>

                                    <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <!-- /.promo-block-wrapper -->

                            <div class="promo-block-wrapper clearfix">
                                <div class="promo-icon">
                                    <i class="fa fa-calculator"></i>
                                </div>
                                <div class="promo-content last-type">
                                    <h3>Seamlessly grow wireless human capital before turnkey.</h3>

                                    <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <!-- /.promo-block-wrapper -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- .x-features -->

            <section class="team ptb-100">
                <section class="section-title">
                    <div class="container text-center">
                        <h2>Our Team</h2>
                        <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                    </div>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <figure class="thumbnail">
                                <a href="#"><img src="img/img-team-1.jpg" class="img-responsive" alt="Image"></a>
                                <figcaption class="caption text-center">
                                    <h3>Reena Scot -
                                        <small>Director</small>
                                    </h3>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.col-sm-4 -->

                        <div class="col-sm-4">
                            <figure class="thumbnail">
                                <a href="#"><img src="img/img-team-2.jpg" class="img-responsive" alt="Image"></a>
                                <figcaption class="caption text-center">
                                    <h3>David Martin -
                                        <small>Founder</small>
                                    </h3>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.col-sm-4 -->

                        <div class="col-sm-4">
                            <figure class="thumbnail">
                                <a href="#"><img src="img/img-team-3.jpg" class="img-responsive" alt="Image"></a>
                                <figcaption class="caption text-center">
                                    <h3>Jenefir White -
                                        <small>marketing</small>
                                    </h3>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.col-sm-4 -->

                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <figure class="thumbnail">
                                <a href="#"><img src="img/img-team-4.jpg" class="img-responsive" alt="Image"></a>
                                <figcaption class="caption text-center">
                                    <h3>Reena Scot -
                                        <small>Director</small>
                                    </h3>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.col-sm-4 -->

                        <div class="col-sm-4">
                            <figure class="thumbnail">
                                <a href="#"><img src="img/img-team-5.jpg" class="img-responsive" alt="Image"></a>
                                <figcaption class="caption text-center">
                                    <h3>David Martin -
                                        <small>Founder</small>
                                    </h3>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.col-sm-4 -->

                        <div class="col-sm-4">
                            <figure class="thumbnail">
                                <a href="#"><img src="img/img-team-6.jpg" class="img-responsive" alt="Image"></a>
                                <figcaption class="caption text-center">
                                    <h3>Jenefir White -
                                        <small>marketing</small>
                                    </h3>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.col-sm-4 -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- .team -->

            <section class="testimonial">
                <section class="section-title">
                    <div class="container text-center">
                        <h2>Satisfied Customer</h2>
                        <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                    </div>
                </section>
                <div class="container">
                    <div id="testimonialSlider" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <blockquote>
                                    <ul>
                                        <li><img src="img/img-testimonial-1.jpg" class="img-responsive" alt=""/></li>
                                        <li class="name">Justus Kühn</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                                        pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                                        consequat eget augue vitae aliquet sollicitudin.
                                    </p>

                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote>
                                    <ul>
                                        <li><img src="img/img-testimonial-2.jpg" class=" img-responsive" alt=""/></li>
                                        <li class="name">Lennox Arnold</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                                        pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                                        consequat eget augue vitae aliquet sollicitudin.
                                    </p>

                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote>
                                    <ul>
                                        <li><img src="img/img-testimonial-3.jpg" class="img-responsive" alt=""/></li>
                                        <li class="name">Paulina Berger</li>
                                    </ul>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                                        pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                                        consequat eget augue vitae aliquet sollicitudin.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                            <span><i class="fa fa-angle-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                            <span><i class="fa fa-angle-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- #testimonialSlider -->
                </div>
            </section>
            <!-- .testimonial -->

            <section class="client-logo ptb-100">
                <section class="section-title">
                    <div class="container text-center">
                        <h2>Our Clients</h2>
                        <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                    </div>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                            <a href="#"><img src="img/logo-client-1.jpg" alt="Image"></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                            <a href="#"><img src="img/logo-client-2.jpg" alt="Image"></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                            <a href="#"><img src="img/logo-client-3.jpg" alt="Image"></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                            <a href="#"><img src="img/logo-client-4.jpg" alt="Image"></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                            <a href="#"><img src="img/logo-client-5.jpg" alt="Image"></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                            <a href="#"><img src="img/logo-client-6.jpg" alt="Image"></a>
                        </div>
                    </div>
                </div>
                <!--end of .container -->
            </section>
            <!-- /.client-logo -->


            <footer class="footer">

                <!-- Footer Widget Section -->
                <div class="footer-widget-section">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-sm-4 footer-block">
                                <div class="footer-widget widget_text">
                                    <div class="footer-logo">
                                        <a href="#"><img src="img/logo.png" alt=""></a>
                                    </div>
                                    <p>Continually matrix cross functional opportunities whereas ethical information. Compellingly streamline enabled human capital before resource-leveling internal or "organic".</p>

                                </div>
                            </div><!-- /.col-sm-4 -->

                            <div class="col-sm-4 footer-block">
                                <div class="footer-widget widget_text">
                                    <h3>We work for your profit</h3>
                                    <p>Distinctively expedite viral materials rather than out-of-the-box solutions. Credibly empower revolutionary ROI rather than unique products. Collaboratively maximize principle-centered ideas before highly efficient data. Phosfluorescently.</p>
                                </div>
                            </div><!-- /.col-sm-4 -->

                            <div class="col-sm-4 footer-block last">
                                <div class="footer-widget widget_text">
                                    <h3>Contact Us Today</h3>
                                    <address>
                                        Call Us 666 777 888 OR 111 222 333<br>
                                        Send an Email on <a href="mailto:#">contact@domain.com</a><br>
                                        Visit Us 123 Fake Street- Blla 12358<br>
                                        Fake Kingdom<br>
                                    </address>

                                    <ul class="list-inline social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- /.col-sm-4 -->
                        </div>
                    </div>
                </div><!-- /.Footer Widget Section -->

                <div class="copyright-section">
                    <div class="container clearfix">
                        <span class="copytext">Copyright &copy; 2016 | <a href="https://uicookies.com/downloads/x-corporation-free-bootstrap-html-template/">X-Corporation</a> Designed And Developed By: <strong style="color: #31aae2;"">uiCookies.com</strong></span>

                        <ul class="list-inline pull-right">
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about-us')}}">About</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- .container -->
                </div><!-- .copyright-section -->
            </footer>
            <!-- .footer -->

        </div>
        <!-- .content-wrapper -->
    </div>
    <!-- .offcanvas-pusher -->

    <div class="uc-mobile-menu uc-mobile-menu-effect">
        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
                id="uc-mobile-menu-close-btn">&times;</button>
        <div>
            <div>
                <ul id="menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about-us')}}">About</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->


<!-- Script -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/mobile-menu.js')}}"></script>
<script src="{{asset('js/flexSlider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<div/>
<a style="font-size:0; height:0; width:0; opacity:0; position:absolute" target="_blank" href="http://www.uicookies.com">HTML Templates by uiCookies</a>
</div>
</body>
</html>
