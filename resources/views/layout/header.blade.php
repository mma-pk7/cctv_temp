<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title> CCTv Website</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/image-hover/imagehover.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    
    @yield('header')
</head>
<body>
    <!--###################### Navigation Starts Here ############################-->

    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i> sales@smarteyeapps.dcom</li>
                            <li class="d-none d-sm-block"><i class="fas fa-phone-square"></i> +123 987 887 765</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-linkedin-in"></i></a></li>
                            <li> <a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li> <a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <nav id="menu-jk" class="container-fluid  no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 logo">
                        <img class="log" src="assets/images/logo.png" alt="">
                        <img class="log-gray" src="assets/images/logo-gray.png" alt="">
                        <a data-toggle="collapse" data-target="#nav-head" href="#nav-head"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="nav-head" class="col-md-9 nav-div d-none d-md-block">
                        <ul>
                            <li><a class="js-scroll-trigger" href="{{route('home')}}">Home</a></li>
                            <li><a class="js-scroll-trigger" href="{{route('about_company')}}">About Company</a></li>
                            <li class="yc"><a class="js-scroll-trigger" href="{{route('why_chose_us')}}">Why Choos Us</a></li>
                            <li><a class="js-scroll-trigger" href="{{route('services')}}">Services</a></li>
                            <li><a class="js-scroll-trigger" href="{{route('our_blogs')}}">Our Blog</a></li>
                       
                            <li><a class="js-scroll-trigger" href="{{route('contact_us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
