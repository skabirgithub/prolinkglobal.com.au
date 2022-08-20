<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Skoder">
    <title>@yield('title')</title>

    <meta name="description"
        content="The company has been formed by a group of expert professionals having vivid experience and international exposure in Information and Communication Technology (ICT). People involved here are well known academic in ICT sector, highly qualified business graduates and qualified engineers from the renowned universities across the globe. ">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Prolink Global">
    <meta itemprop="description"
        content="It is a company where professionals from both technical and functional field group together with an objective of providing appropriate solutions based on customer needs. It realizes the importance of functional knowledge and its impact in developing the solutions. We constantly endeavor to be a leading technology firm with profound business and functional knowledge. The key to the company's success is the maintenance of a close working relationship with the clients through ensuring the best possible solutions to their needs; to establish and maintain a thorough knowledge and understanding of client's objective and help them maximize the benefits. ">
    <meta itemprop="image" content="https://portfolio.skoder.tech/gallery_images/big-15957512045f1d3b2467188.jpg">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://skoder.co">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Prolink Global">
    <meta property="og:description"
        content="The company has been formed by a group of expert professionals having vivid experience and international exposure in Information and Communication Technology (ICT). People involved here are well known academic in ICT sector, highly qualified business graduates and qualified engineers from the renowned universities across the globe. ">
    <meta property="og:image" content="https://portfolio.skoder.tech/gallery_images/big-15957512045f1d3b2467188.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Prolink Global">
    <meta name="twitter:description"
        content="It is a company where professionals from both technical and functional field group together with an objective of providing appropriate solutions based on customer needs. It realizes the importance of functional knowledge and its impact in developing the solutions. We constantly endeavor to be a leading technology firm with profound business and functional knowledge. The key to the company's success is the maintenance of a close working relationship with the clients through ensuring the best possible solutions to their needs; to establish and maintain a thorough knowledge and understanding of client's objective and help them maximize the benefits. ">
    <meta name="twitter:image" content="https://portfolio.skoder.tech/gallery_images/big-15957512045f1d3b2467188.jpg">

    <!-- Meta Tags Generated via http://heymeta.com -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/images/favicon.ico')}}">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('frontend/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    <!-- Online Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,800,200,500' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,600italic,400italic,300,300italic,600,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic,400,700' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- COLORS -->
    <link rel="stylesheet" id="color" href="{{asset('frontend/css/colors/default.css')}}">

    <!-- JavaScripts -->
    <script src="{{asset('frontend/js/modernizr.js')}}"></script>
    <script src="https://kit.fontawesome.com/12785a33f8.js" crossorigin="anonymous"></script>
    <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<![endif]-->
</head>

<body>

    <!-- Wrap -->
    <div id="wrap">

        <!-- header -->
        <header>

            <!-- Top bar -->
            <div class="top-bar">
                <div class="top-info">
                    <div class="container">
                        <ul class="personal-info">
                            <li>
                                <p><i class="fa fa-phone"></i> {{setting('phone_number')}} </p>
                            </li>

                            <li>
                                <p><i class="fa fa-envelope"></i> {{setting('email')}} </p>
                            </li>
                        </ul>

            <!-- Right Sec -->
            <div class="right-sec">

            <!-- Language -->
            {{-- <select class="selectpicker">
              <option>English</option>
              <option>French</option>
              <option>Relish</option>
            </select> --}}

            <!-- social -->
            <ul class="social">
                                <li><a href="{{setting('facebook')}}"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="navbar">
                <div class="sticky">
                    <div class="container">

                        <!-- LOGO -->
                        <div class="logo" style="margin-top: -15px"> <a href="{{route('index')}}"><img
                                    class="img-responsive" width="120px" src="{{asset('images/'.setting('logo'))}}" alt=""></a> </div>

                        <!-- Nav -->
                        <ul class="nav ownmenu">
                            <li class=""> <a href="{{route('index')}}">Home </a>
                            </li>
                            <li> <a href="{{route('about')}}">About Us</a>
                                <ul class="dropdown">
                                    <li> <a href="{{route('founder')}}">Advisor</a> </li>
                                    {{-- <li> <a href="{{route('legal.entity')}}">Legal Entity</a> </li> --}}
                                    {{-- <li> <a href="{{route('partner.network')}}">Partner Network</a> </li> --}}
                                    <li> <a href="{{route('teams')}}">Team</a> </li>
                                    <li> <a href="{{route('branches')}}">Branches</a> </li>
                                    {{-- <li> <a href="{{route('program.different','Affiliate')}}">Affiliate</a> </li>
                                    --}}
                                    <li> <a href="{{route('galleries')}}">Gallery</a> </li>
                                </ul>
                            </li>
                            <!--<li> <a href="#">Activities</a>-->
                            <!--    <ul class="dropdown">-->
                            <!--        <li> <a href="{{route('program.different','Program')}}">Core Programs </a> </li>-->
                            <!--        <li> <a href="{{route('program.different','Project')}}">Projects </a> </li>-->
                            <!--    </ul>-->
                            <!--</li>-->
                            <!--<li> <a href="{{route('program.different','Associate')}}">Associates </a> </li>-->
                            <li> <a href="{{route('program.different','Program')}}">Services </a> </li>
                            <li> <a href="{{route('program.different','Project')}}">Projects </a> </li>
                            <li> <a href="{{route('publications')}}">Resources </a> </li>
                            <li> <a href="{{route('jobs')}}">Career </a> </li>
                            <li> <a href="{{route('program.different','Event')}}">Skills </a> </li>
                            <li> <a href="{{route('notices')}}">Notices </a> </li>
                            <li> <a href="{{route('contact')}}">Contact</a> </li>
                        </ul>
                        <!-- Search -->
                        <!-- <div class="search-icon"> <a href="#."><i class="fa fa-search"></i></a>
                            <form>
                                <input class="form-control" type="search" placeholder="Type Here">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div> -->
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')

        <!-- FOOTER -->
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">

                    <!-- ABOUT -->
                    <div class="col-md-4"> <img src="{{asset('images/'.setting('logo_footer'))}}" alt="">
                        <div class="about-foot">
                            <ul>
                                <li>
                                    <p><i class="fa fa-map-marker"></i> {{setting('address')}}</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-phone"></i> {{setting('phone_number')}} </p>
                                </li>
                                <li>
                                    <p><i class="fa fa-envelope"></i> {{setting('email')}}</p>
                                </li>
                                <li>
                                    <p>
                                        <a href=" {{setting('facebook')}}"><i class="fa fa-facebook"
                                                style="color:#52BE80;"></i></a>
                                        &nbsp;
                                        <a href=" {{setting('youtube')}}"><i class="fa fa-youtube-play"
                                                style="color:#52BE80;"></i></a>
                                        <a href=" {{setting('linkedin')}}"><i class="fa fa-linkedin"
                                                style="color:#52BE80;"></i></a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Twitter Feed -->
                    <div class="col-md-4">
                        <h6>Site Map</h6>
                        <ul class="col-md-6 tweet">
                            <li> <a href="{{route('about')}}">About </a> </li>
                            <li> <a href="{{route('program.different','Program')}}">Core Services </a> </li>
                            <li> <a href="{{route('program.different','Project')}}">Projects </a> </li>
                            <li> <a href="{{route('program.different','Associate')}}">Associates </a> </li>

                        </ul>
                        <ul class="col-md-6 tweet">
                            <li> <a href="{{route('program.different','Resource')}}">Resource</a> </li>
                            <li> <a href="{{route('jobs')}}">Career</a> </li>
                            <li> <a href="{{route('program.different','Event')}}">Skills </a> </li>
                            <li> <a href="{{route('notices')}}">Notices </a> </li>
                        </ul>
                    </div>

                    <!-- Photostream -->
                    <div class="col-md-4">
                        <a href="{{route('galleries')}}">
                            <h6>Photo Gallery</h6>
                        </a>
                        <a href="{{route('galleries')}}">
                            <p>All Images</p>
                        </a>
                        <ul class="photo-steam ">
                            @foreach (App\Models\Gallery::where('category','gallery')->take(6)->get() as $gallery)

                            <li>
                                <a href="{{asset('gallery_images/big-'.$gallery->image)}}" data-fancybox="roadtrip">
                                    <img class="img-responsive" src="{{asset('gallery_images/'.$gallery->image)}}">
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>


                </div>
            </div>
        </footer>

        <!-- RIGHTS -->
        <div class="rights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Prolink © All Rights Reserved </p>
                    </div>
                    <!--<div class="col-md-6 text-right"> <a href="{{route('privacy.policy')}}">Privacy Policy</a> <a-->
                    <!--        href="{{route('terms.and.conditions')}}">Terms &-->
                    <!--        Conditions</a> </div>-->
                </div>
            </div>
        </div>


        <script src="{{asset('frontend/js/jquery-1.11.0.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/own-menu.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.flexslider-min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.countTo.js')}}"></script>
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.cubeportfolio.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.colio.min.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

        <script>
            $(document).ready(function() {

                $("#owl-example").owlCarousel({
                    items: 1
                });

            });
            $(document).ready(function() {

                $("#owl-example2").owlCarousel({
                    items: 1
                });

            });
        </script>

</body>


</html>
