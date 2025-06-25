<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="wedding/images/favicon.png">
    <title> Rio & Ansherina wedding</title>
    <link href="wedding/css/themify-icons.css" rel="stylesheet">
    <link href="wedding/css/font-awesome.min.css" rel="stylesheet">
    <link href="wedding/css/flaticon.css" rel="stylesheet">
    <link href="wedding/css/bootstrap.min.css" rel="stylesheet">
    <link href="wedding/css/magnific-popup.css" rel="stylesheet">
    <link href="wedding/css/animate.css" rel="stylesheet">
    <link href="wedding/css/owl.carousel.css" rel="stylesheet">
    <link href="wedding/css/owl.theme.css" rel="stylesheet">
    <link href="wedding/css/slick.css" rel="stylesheet">
    <link href="wedding/css/slick-theme.css" rel="stylesheet">
    <link href="wedding/css/swiper.min.css" rel="stylesheet">
    <link href="wedding/css/nice-select.css" rel="stylesheet">
    <link href="wedding/css/owl.transitions.css" rel="stylesheet">
    <link href="wedding/css/jquery.fancybox.css" rel="stylesheet">
    <link href="wedding/css/odometer-theme-default.css" rel="stylesheet">
    <link href="wedding/css/style.css" rel="stylesheet">

    <style>
        .grid-box {
            width: 150px;
            height: 150px;
            border: solid;
            border-radius: 100%;
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .owl-prev, .owl-next {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 25px;
            margin: -10px;
        }
        .owl-prev:hover, .owl-next:hover {
            background: rgba(0, 0, 0, 0.7);
        }

        .owl-carousel h6 {
            text-align: center;
        }

        .floating-div {
            position: fixed;
            bottom: 15px;
            background: #fff;
            padding: 15px;
            display: flex;
            gap: 20px;
            z-index: 9999;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 4px 32px;
            border: 1px solid white;
            font-weight: bold;
        }

        @media screen and (max-width: 63.9969em) {
            .floating-date {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader" style="display: block;">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="wedding/images/added/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        @livewire('header-component', ['slug' => $slug])
        <!-- end of header -->

        @livewire('home-component', ['slug' => $slug])

        <!-- start of wpo-site-footer-section -->
        {{-- <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="wedding/logo.png" alt="blog">
                                </div>
                                <p>Welcome and open yourself to your truest love this year with us! With the Release
                                    Process</p>

                            </div>
                        </div>
                        <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">

                        </div>
                        <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi flaticon-email"></i>johnpaul.dj21@gmail.com</li>
                                        <li><i class="fi flaticon-phone-call"></i>+639201900963</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> &copy; 2025 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!-- end of wpo-site-footer-section -->

    <!-- color-switcher -->
        {{-- <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div class="color-toggle-btn">
                    <i class="fa fa-cog"></i>
                </div>
                <ul id="switcher">
                    <li class="btn btn1" id="Button1"></li>
                    <li class="btn btn2" id="Button2"></li>
                    <li class="btn btn3" id="Button3"></li>
                    <li class="btn btn4" id="Button4"></li>
                    <li class="btn btn5" id="Button5"></li>
                    <li class="btn btn6" id="Button6"></li>
                    <li class="btn btn7" id="Button7"></li>
                    <li class="btn btn8" id="Button8"></li>
                    <li class="btn btn9" id="Button9"></li>
                    <li class="btn btn10" id="Button10"></li>
                    <li class="btn btn11" id="Button11"></li>
                    <li class="btn btn12" id="Button12"></li>
                </ul>
            </div>
        </div> --}}


        <div class="floating-div">
            <div class="floating-date">
                Friday, April 11, 2024
            </div>
            <a class="theme-btn-s3" href="#RSVP">RSVP</a>
        </div>

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="wedding/js/jquery.min.js"></script>
    <script src="wedding/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="wedding/js/modernizr.custom.js"></script>
    <script src="wedding/js/jquery.dlmenu.js"></script>
    <script src="wedding/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="wedding/js/script.js"></script>
</body>

</html>
