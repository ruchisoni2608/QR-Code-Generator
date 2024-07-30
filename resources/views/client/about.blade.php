@extends('layouts.client')

@section('page_title') About @endsection

@section('styles')@endsection

@section('content')
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="{{asset('client/images/art/bg4.jpg')}}">
        <div class="container inner pt-120 pb-120 text-center">
            <h1 class="heading mb-0">About Us</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
        <div class="container inner">
            <h2 class="section-title mb-40 text-center">Meet the Team</h2>
            <div class="swiper-container-wrapper swiper-col4" data-aos="fade">
                <div class="swiper-container text-center">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="mb-20"> <img src="{{asset('client/images/art/t1.jpg')}}" alt="" /> </figure>
                            <h5 class="mb-5">Coriss Ambady</h5>
                            <div class="meta">Art Director</div>
                            <p>Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui consectetur.</p>
                            <ul class="social social-color social-s">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            </ul>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="mb-20"><img src="{{asset('client/images/art/t2.jpg')}}" alt="" /></figure>
                            <h5 class="mb-5">Cory Zamora</h5>
                            <div class="meta">Photographer</div>
                            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor adipiscing elit.</p>
                            <ul class="social social-color social-s">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="mb-20"><img src="{{asset('client/images/art/t3.jpg')}}" alt="" /></figure>
                            <h5 class="mb-5">Barclay Widerski</h5>
                            <div class="meta">Photographer & Editor</div>
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                            <ul class="social social-color social-s">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="mb-20"><img src="{{asset('client/images/art/t4.jpg')}}" alt="" /></figure>
                            <h5 class="mb-5">Nikola Brooten</h5>
                            <div class="meta">Videographer</div>
                            <p>Fermentum massa justo sit amet risus. Morbi leo risus, porta ac consectetur.</p>
                            <ul class="social social-color social-s">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="mb-20"> <img src="{{asset('client/images/art/t5.jpg')}}" alt="" /> </figure>
                            <h5 class="mb-5">Connor Gibson</h5>
                            <div class="meta">Photographer</div>
                            <p>Nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis donec.</p>
                            <ul class="social social-color social-s">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="mb-20"><img src="{{asset('client/images/art/t6.jpg')}}" alt="" /></figure>
                            <h5 class="mb-5">Jackie Sanders</h5>
                            <div class="meta">Intern</div>
                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna ullamcorper.</p>
                            <ul class="social social-color social-s">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!-- .swiper-wrapper -->
                </div>
                <!-- .swiper-container -->
                <div class="swiper-pagination gap-large"></div>
            </div>
            <!-- .swiper-container-wrapper -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper gray-wrapper">
        <div class="container inner">
            <h2 class="section-title mb-40 text-center">Who is Behind All This?</h2>
            <div class="row">
                <div class="col-lg-6 text-md-center">
                    <figure><img src="{{asset('client/images/art/about3.jpg')}}" alt=""></figure>
                </div>
                <!-- /column -->
                <div class="space30 d-block d-lg-none d-xl-none"></div>
                <div class="col-lg-6">
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Vestibulum id ligula.</p>
                    <blockquote class="bordered">
                        <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula lacinia odio sem nec elit.</p>
                        <footer class="blockquote-footer">Connor Gibson</footer>
                    </blockquote>
                    <p>Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies.</p>
                    <ul class="social social-color social-s mb-15">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="space70"></div>
            <div class="row">
                <div class="col-md-4">
                    <h4>What is Our Process?</h4>
                    <p>Duis mollis, est non commodo luctus, nisi porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem.</p>
                    <ol>
                        <li>Vivamus sagittis lacus vel augue laoreet.</li>
                        <li>Cras mattis consectetur purus sit amet.</li>
                        <li>Vestibulum id ligula porta felis euismod.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ol>
                </div>
                <!-- /column -->
                <div class="col-md-4">
                    <h4>Why Choose Us?</h4>
                    <p>Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus.</p>
                    <ul class="unordered-list list-default">
                        <li>Donec ullamcorper nulla non metus auctor.</li>
                        <li>Cras justo odio, dapibus ac facilisis.</li>
                        <li>Praesent commodo cursus magna.</li>
                        <li>Curabitur blandit tempus porttitor.</li>
                    </ul>
                </div>
                <!-- /column -->
                <div class="col-md-4">
                    <h4>Our Skills</h4>
                    <ul class="progress-list">
                        <li>
                            <p>Photoshop</p>
                            <div class="progressbar line blue" data-value="90"></div>
                        </li>
                        <li>
                            <p>Final Cut</p>
                            <div class="progressbar line green" data-value="80"></div>
                        </li>
                        <li>
                            <p>Studio Photography</p>
                            <div class="progressbar line orange" data-value="85"></div>
                        </li>
                        <li>
                            <p>Motion Video</p>
                            <div class="progressbar line red" data-value="65"></div>
                        </li>
                    </ul>
                    <!-- /.progress-list -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="space10"></div>
            <div class="text-center"><a href="#" class="btn btn-full-rounded">Hire Us</a></div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="{{asset('client/images/art/bg5.jpg')}}">
        <div class="container inner pt-120 pb-120">
            <div class="row counter">
                <div class="col-md-3 text-center">
                    <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-photo_camera"></i> </div>
                    <h3 class="value">7518</h3>
                    <p class="text-uppercase color-dark mb-0">Shots Taken</p>
                </div>
                <!--/column -->
                <div class="col-md-3 text-center">
                    <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-cafe_hot-coffee"></i> </div>
                    <h3 class="value">3472</h3>
                    <p class="text-uppercase color-dark mb-0">Cups of Coffee</p>
                </div>
                <!--/column -->
                <div class="col-md-3 text-center">
                    <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-electronics_tv"></i> </div>
                    <h3 class="value">2184</h3>
                    <p class="text-uppercase color-dark mb-0">Movies Watched</p>
                </div>
                <!--/column -->
                <div class="col-md-3 text-center">
                    <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-sports_medal-2"></i> </div>
                    <h3 class="value">4523</h3>
                    <p class="text-uppercase color-dark mb-0">Awards Won</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
        <div class="container inner">
            <h2 class="section-title mb-40 text-center">Happy Customers</h2>
            <div class="swiper-container-wrapper swiper-col3" data-aos="fade">
                <div class="swiper-container text-center">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box box-border">
                                <blockquote class="icon icon-top">
                                    <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula lacinia odio sem nec elit.</p>
                                    <footer class="blockquote-footer">Connor Gibson</footer>
                                </blockquote>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="box box-border">
                                <blockquote class="icon icon-top">
                                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam aenean lacinia.</p>
                                    <footer class="blockquote-footer">Coriss Ambady</footer>
                                </blockquote>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="box box-border">
                                <blockquote class="icon icon-top">
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam integer. Curabitur blandit tempus.</p>
                                    <footer class="blockquote-footer">Barclay Widerski</footer>
                                </blockquote>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="box box-border">
                                <blockquote class="icon icon-top">
                                    <p>Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Porta ac consectetur.</p>
                                    <footer class="blockquote-footer">Connor Gibson</footer>
                                </blockquote>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="box box-border">
                                <blockquote class="icon icon-top">
                                    <p>Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla.</p>
                                    <footer class="blockquote-footer">Coriss Ambady</footer>
                                </blockquote>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="box box-border">
                                <blockquote class="icon icon-top">
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                    <footer class="blockquote-footer">Barclay Widerski</footer>
                                </blockquote>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.swiper-slide -->
                    </div>
                    <!-- /.swiper-wrapper -->
                </div>
                <!-- .swiper-container -->
                <div class="swiper-pagination gap-large"></div>
            </div>
            <!-- .swiper-container-wrapper -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper gray-wrapper">
        <div class="container inner">
            <div class="row text-center">
                <div class="col-md-2">
                    <figure><img src="{{asset('client/images/art/c1.png')}}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-md-2">
                    <figure><img src="{{asset('client/images/art/c2.png')}}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-md-2">
                    <figure><img src="{{asset('client/images/art/c3.png')}}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-md-2">
                    <figure><img src="{{asset('client/images/art/c4.png')}}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-md-2">
                    <figure><img src="{{asset('client/images/art/c5.png')}}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-md-2">
                    <figure><img src="{{asset('client/images/art/c6.png')}}" alt="" /></figure>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
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
