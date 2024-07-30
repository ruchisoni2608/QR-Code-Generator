@extends('layouts.client')

@section('page_title') Photoline @endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('client/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client/revolution/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client/revolution/revolution-addons/filmstrip/css/revolution.addon.filmstrip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client/revolution/revolution-addons/typewriter/css/typewriter.css')}}">
@endsection

@section('content')

        <div class="rev_slider_wrapper">
            <div id="slider16" class="rev_slider" data-version="5.4.8">
                <ul>
                    <li data-transition="fade" data-filmstrip='{
              "direction":"left-to-right",
              "filter": "none",
              "times": "100,100,100,100",
              "imgs":[
              {"url": "client/images/art/fe1.jpg", "alt": "Image 1"},
              {"url": "client/images/art/fe2.jpg", "alt": "Image 2"},
              {"url": "client/images/art/fe3.jpg", "alt": "Image 3"},
              {"url": "client/images/art/fe4.jpg", "alt": "Image 4"},
              {"url": "client/images/art/fe5.jpg", "alt": "Image 5"},
              {"url": "client/images/art/fe6.jpg", "alt": "Image 6"},
              {"url": "client/images/art/fe7.jpg", "alt": "Image 7"}
              ]}'>
                        <img src="client/images/dummy.png" alt="" />
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="nowrap"
                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-lasttriggerstate="reset"
                             style="z-index: 5;background-color:rgba(21,21,21, 0.5);"> </div>
                        <div class="tp-caption font-title tp-resizeme"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             data-fontsize="['140','140','110','70']"
                             data-lineheight="['150','150','120','80']"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;fb:20px;","ease":"Power4.easeOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-lasttriggerstate="reset"
                             style="z-index: 6; color: rgba(255,255,255,0.6);">
                            Wedding<br /> Photographer
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
            <!-- /.rev_slider -->
        </div>
        <!-- /.rev_slider_wrapper -->

        <div class="wrapper gray-wrapper">
            <div class="container inner">
                <h2 class="section-title mb-40 text-center">My Process</h2>
                <div class="row gutter-60 gutter-md-30">
                    <div class="col-md-6">
                        <h2 class="sub-heading text-center text-md-right">Great design comes with understanding customer needs</h2>
                    </div>
                    <!-- /column -->
                    <div class="col-md-6">
                        <p class="lead text-center text-md-left">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="space50"></div>
                <div class="row gutter-50 process-wrapper line text-center">
                    <div class="col-md-3">
                        <span class="icon icon-bg bg-default mb-20"><span class="number">01</span></span>
                        <h5>Concept</h5>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <span class="icon icon-bg bg-default mb-20"><span class="number">02</span></span>
                        <h5>Prepare</h5>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                    <!--/column -->
                    <div class="space20 d-md-none clearfix"></div>
                    <div class="col-md-3">
                        <span class="icon icon-bg bg-default mb-20"><span class="number">03</span></span>
                        <h5>Retouch</h5>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <span class="icon icon-bg bg-default mb-20"><span class="number">04</span></span>
                        <h5>Finalize</h5>
                        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </div>

        <div class="wrapper image-wrapper h-100-less bg-image inverse-text box-shadow" data-image-src="client/images/art/fp1.jpg">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 my-auto text-center">
                        <div class="container mx-auto">
                            <h2 class="heading">Winter Wonderland</h2>
                            <p class="lead larger">Maecenas sed diam eget risus varius blandit magna.</p>
                            <div class="space10"></div>
                            <a href="#" data-toggle="modal" data-target="#myModal2" class="btn btn-full-rounded btn-white">See Gallery</a>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

        <div class="wrapper light-wrapper">
            <div class="container py-5">
                <div class="tiles">
                    <div class="items row">
                        <div class="item col-md-4">
                            <figure class="overlay-info hovered"><a href="about.html"><img src="client/images/art/f13.jpg" alt=""></a>
                                <figcaption class="d-flex">
                                    <div class="align-self-center mx-auto">
                                        <h3 class="mb-5">About Me</h3>
                                        <p class="mb-0">Learn about who's behind</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!--/.item -->
                        <div class="item col-md-4">
                            <figure class="overlay-info hovered"><a href="portfolio.html"><img src="client/images/art/f14.jpg" alt=""></a>
                                <figcaption class="d-flex">
                                    <div class="align-self-center mx-auto">
                                        <h3 class="mb-5">Portfolio</h3>
                                        <p class="mb-0">My selected shots</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!--/.item -->
                        <div class="item col-md-4">
                            <figure class="overlay-info hovered"><a href="blog.html"><img src="client/images/art/f15.jpg" alt=""></a>
                                <figcaption class="d-flex">
                                    <div class="align-self-center mx-auto">
                                        <h3 class="mb-5">Journal</h3>
                                        <p class="mb-0">What is going on lately</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!--/.item -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.tiles -->
            </div>
            <!-- /.container -->
        </div>

        <!-- /.wrapper -->
        <div class="wrapper image-wrapper h-100-less bg-image inverse-text box-shadow" data-image-src="client/images/art/fp2.jpg">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 my-auto text-center">
                        <div class="container mx-auto">
                            <h2 class="heading">Enchanting Green</h2>
                            <p class="lead larger">Maecenas sed diam eget risus varius blandit magna.</p>
                            <div class="space10"></div>
                            <a href="#" data-toggle="modal" data-target="#myModal8" class="btn btn-full-rounded btn-white">See Gallery</a>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.wrapper -->
        <div class="wrapper image-wrapper h-100-less bg-image inverse-text box-shadow" data-image-src="client/images/art/fp3.jpg">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 my-auto text-center">
                        <div class="container mx-auto">
                            <h2 class="heading">Charismatic Doors</h2>
                            <p class="lead larger">Maecenas sed diam eget risus varius blandit magna.</p>
                            <div class="space10"></div>
                            <a href="#" data-toggle="modal" data-target="#myModal9" class="btn btn-full-rounded btn-white">See Gallery</a>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.wrapper -->
        <div class="wrapper image-wrapper h-100-less bg-image inverse-text box-shadow" data-image-src="client/images/art/fp4.jpg">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 my-auto text-center">
                        <div class="container mx-auto">
                            <h2 class="heading">Coffee Time</h2>
                            <p class="lead larger">Maecenas sed diam eget risus varius blandit magna.</p>
                            <div class="space10"></div>
                            <a href="#" data-toggle="modal" data-target="#myModal3" class="btn btn-full-rounded btn-white">See Gallery</a>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.wrapper -->
        <div class="wrapper image-wrapper h-100-less bg-image inverse-text box-shadow" data-image-src="client/images/art/fp5.jpg">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 my-auto text-center">
                        <div class="container mx-auto">
                            <h2 class="heading">Lovely Cats</h2>
                            <p class="lead larger">Maecenas sed diam eget risus varius blandit magna.</p>
                            <div class="space10"></div>
                            <a href="#" data-toggle="modal" data-target="#myModal4" class="btn btn-full-rounded btn-white">See Gallery</a>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.wrapper -->
        <div class="wrapper image-wrapper h-100-less bg-image inverse-text" data-image-src="client/images/art/fp6.jpg">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 my-auto text-center">
                        <div class="container mx-auto">
                            <h2 class="heading">Road Ahead</h2>
                            <p class="lead larger">Maecenas sed diam eget risus varius blandit magna.</p>
                            <div class="space10"></div>
                            <a href="#" data-toggle="modal" data-target="#myModal7" class="btn btn-full-rounded btn-white">See Gallery</a>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.wrapper -->
        <div class="modal inverse-text modal-transparent faded" id="myModal1" tabindex="-1" role="dialog">
            <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content text-center">
                    <h2>Lovely Couples</h2>
                    <p>Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed.</p>
                    <div class="space10"></div>
                    <ul class="basic-gallery">
                        <li><img src="client/images/art/tg1-1.jpg" alt=""></li>
                        <li><img src="client/images/art/tg1-2.jpg" alt=""></li>
                        <li><img src="client/images/art/tg1-3.jpg" alt=""></li>
                        <li><img src="client/images/art/tg1-4.jpg" alt=""></li>
                        <li><img src="client/images/art/tg1-5.jpg" alt=""></li>
                        <li><img src="client/images/art/tg1-6.jpg" alt=""></li>
                        <li><img src="client/images/art/tg1-7.jpg" alt=""></li>
                        <li><img src="client/images/art/tg1-8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="wrapper light-wrapper">
            <div class="container inner">
                <h2 class="section-title mb-40 text-center">Single Testimonial Carousel - Alternative</h2>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="swiper-container-wrapper basic-slider">
                            <div class="swiper-container text-center basic-slider-1 swiper-container-initialized swiper-container-horizontal swiper-container-autoheight" style="cursor: grab;">
                                <div class="swiper-wrapper" style="height: 408px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active" style="width: 750px;">
                                        <div class="row gutter-50 d-flex">
                                            <div class="col-md-6">
                                                <figure><img src="client/images/art/te1.jpg" alt=""></figure>
                                            </div>
                                            <!--/column -->
                                            <div class="col-md-6 align-self-center">
                                                <blockquote class="icon icon-top">
                                                    <p>Consectetur adipiscing elit. Duis mollis, est non commodo luctus gestas eget quam integer. Curabitur blandit tempus rutrum faucibus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                                    <footer class="blockquote-footer">Mildred &amp; Austin</footer>
                                                </blockquote>
                                            </div>
                                            <!--/column -->
                                        </div>
                                        <!--/.row -->
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide swiper-slide-next" style="width: 750px;">
                                        <div class="row gutter-50 d-flex">
                                            <div class="col-md-6">
                                                <figure><img src="client/images/art/te2.jpg" alt=""></figure>
                                            </div>
                                            <!--/column -->
                                            <div class="col-md-6 align-self-center">
                                                <blockquote class="icon icon-top">
                                                    <p>Consectetur adipiscing elit. Duis mollis, est non commodo luctus gestas eget quam integer. Curabitur blandit tempus rutrum faucibus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                                    <footer class="blockquote-footer">Diana &amp; Wayne</footer>
                                                </blockquote>
                                            </div>
                                            <!--/column -->
                                        </div>
                                        <!--/.row -->
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide" style="width: 750px;">
                                        <div class="row gutter-50 d-flex">
                                            <div class="col-md-6">
                                                <figure><img src="client/images/art/te3.jpg" alt=""></figure>
                                            </div>
                                            <!--/column -->
                                            <div class="col-md-6 align-self-center">
                                                <blockquote class="icon icon-top">
                                                    <p>Consectetur adipiscing elit. Duis mollis, est non commodo luctus gestas eget quam integer. Curabitur blandit tempus rutrum faucibus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                                    <footer class="blockquote-footer">Evelyn &amp; John</footer>
                                                </blockquote>
                                            </div>
                                            <!--/column -->
                                        </div>
                                        <!--/.row -->
                                    </div>
                                    <!-- /.swiper-slide -->
                                </div>
                                <!-- /.swiper-wrapper -->
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <!-- /.swiper-container -->
                            <div class="swiper-pagination gap-large basic-slider-pagination-1 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                        </div>
                        <!-- .swiper-container-wrapper -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>


@endsection

@push('page-scripts')

    <script src="{{asset('client/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('client/revolution/revolution-addons/filmstrip/js/revolution.addon.filmstrip.min.js')}}"></script>
    <script src="{{asset('client/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('client/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

@endpush
