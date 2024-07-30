<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- All Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="CM Websolution">
        <meta name="robots" content="">
        <meta name="keywords" content="agency, agriculture, business, construction, farmer shop, florist, garden, gardeners, gardening, gardner, groundskeeper, landscape architects, landscaper, landscaping, lawn services">
        <meta name="description" content="Curative Microbes Pvt. Ltd. is microbial based plant bio-fertilizers and bio-pesticides producing (Using LF Technology) company located at Junagadh (Gujarat, India), which is fully bio diversified area well known as Girnar nearest to Sasan-Gir that is famous for Asiatic lion in the world.">
        <meta property="og:title" content="Curative Microbes Pvt. Ltd.">
        <meta property="og:description" content="Curative Microbes Pvt. Ltd. is microbial based plant bio-fertilizers and bio-pesticides producing (Using LF Technology) company located at Junagadh (Gujarat, India), which is fully bio diversified area well known as Girnar nearest to Sasan-Gir that is famous for Asiatic lion in the world.">
        <meta property="og:image" content="{{asset('client/images/logo.png')}}">
        <meta name="format-detection" content="telephone=no">

        <!-- FAVICONS ICON -->
        <link rel="icon" href="{{asset('client/images/logo.png')}}" type="image/x-icon" >
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('client/images/logo.png')}}" >

        <!-- PAGE TITLE HERE -->
        <title>@yield('page_title')</title>

        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{asset('client/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('client/css/custom.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i' rel='stylesheet' type='text/css'>

        @yield('styles')

    </head>

    <body id="bg">
{{--    <div id="loading-area"></div>--}}
    <div class="content-wrapper">
        <!-- header -->
        <nav class="navbar transparent absolute nav-wrapper-dark inverse-text navbar-expand-lg">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <a href="index.html">
                            <!-- <img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="" /> -->
                            <h1>Photoline</h1>
                        </a>
                    </div>
                    <div class="navbar-hamburger ml-auto d-lg-none d-xl-none">
                        <button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button>
                    </div>
                </div>
                <!-- /.navbar-header -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a>
                        </li>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('client.contact')}}">Contact Us</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="navbar-divider"></div>
                    <ul class="social social-mute social-s">
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- header END -->

        @yield('content')

        <!-- Footer -->
        <footer class="dark-wrapper inverse-text">
            <div class="container inner pt-60 pb-60">
                <div class="row">
                    <div class="col-md-12 col-lg-3 text-center text-lg-left">
                        <div class="widget"> <img src="#" srcset="client/images/logo-light.png 1x, client/images/logo-light@2x.png 2x" alt="" />
                            <div class="space20"></div>
                            <p>I'm Jonathan Photoline. My passion is taking photos of the most stunning architecture around the world.</p>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="space30 d-lg-none d-xl-none"></div>
                    <div class="col-md-4 col-lg-2 offset-lg-3">
                        <div class="widget">
                            <h5 class="widget-title">Learn More</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="nocolor">About Us</a></li>
                                <li><a href="#" class="nocolor">Our Story</a></li>
                                <li><a href="#" class="nocolor">Projects</a></li>
                                <li><a href="#" class="nocolor">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-2">
                        <div class="widget">
                            <h5 class="widget-title">Social</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="nocolor">Facebook</a></li>
                                <li><a href="#" class="nocolor">Twitter</a></li>
                                <li><a href="#" class="nocolor">Instagram</a></li>
                                <li><a href="#" class="nocolor">Flickr</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-2">
                        <div class="widget">
                            <h5 class="widget-title">Contact</h5>
                            <address class="mb-0">
                                Moonshine St. 14/05 Light City
                            </address>
                            <a href="mailto:first.last@email.com" class="nocolor">first.last@email.com</a><br />
                            +00 (123) 456 78 90 </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="sub-footer dark-wrapper inverse-text">
                <div class="container inner pt-30 pb-30 text-center">
                    <p>© 2018 Photoline. All rights reserved. Theme by elemis.</p>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.sub-footer -->
        </footer>
        <!-- Footer END-->
        <div class="mf-social-side-list">
            <ul>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=918401566638&text=Hello!%20I%27m%20interested%20in%20learning%20more%20about%20your%20services/products" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/curativemicrobes/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/curativemicrobes/" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@curativemicrobes" target="_blank"><i class="fa fa-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        var contactNo = "{{$settings['contact1'] ?? ''}}";
    </script>
    <!-- JavaScript  files ========================================= -->
    <script src="{{asset('client/js/jquery.min.js')}}"></script>
    <script src="{{asset('client/js/popper.min.js')}}"></script>
    <script src="{{asset('client/js/bootstrap.min.js')}}"></script>

    @yield('scripts')
    @stack('page-scripts')
    <script src="{{asset('client/js/plugins.js')}}"></script>
    <script src="{{asset('client/js/scripts.js')}}"></script>
    </body>
</html>
