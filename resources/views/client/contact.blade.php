@extends('layouts.client')

@section('page_title') Contact Us @endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('client/css/color/blue.css')}}">
@endsection

@section('content')
    <div class="position-relative">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2499.4483800426133!2d3.2241689!3d51.2108153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c350cfcf934d7d%3A0xa4d8f385ffa7d70b!2sChoco-Story!5e0!3m2!1sen!2str!4v1534408440419" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="wrapper light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="section-title text-center">Get in Touch</h2>
                    <p class="text-center">Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat.</p>
                    <div class="space20"></div>
                    <div class="row text-center">
                        <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i class="si-camping_map"></i></span>
                            <p>Moon Street Light Avenue<br>
                                14/05 Jupiter, JP 80630</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i class="si-phone_phone-ringing"></i></span>
                            <p>00 (123) 456 78 90<br>
                                00 (987) 654 32 10 </p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i class="si-mail_mail-2"></i></span>
                            <p><a class="nocolor" href="mailto:#">manager@email.com</a><br>
                                <a class="nocolor" href="mailto:#">asistant@email.com</a></p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="space30"></div>
                    <div class="form-container">
                        <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate>
                            <div class="row text-center">
                                <div class="col-md-6 pr-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
                                    </div>
                                    <!--/.form-group -->
                                </div>
                                <!--/column -->
                                <div class="col-md-6 pl-10">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your e-mail" required="required">
                                    </div>
                                    <!--/.form-group -->
                                </div>
                                <!--/column -->
                                <div class="col-md-6 pr-10">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="tel" placeholder="Phone">
                                    </div>
                                    <!--/.form-group -->
                                </div>
                                <!--/column -->
                                <div class="col-md-6 pl-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                                    </div>
                                    <!--/.form-group -->
                                </div>
                                <!--/column -->
                                <div class="col-12">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
                                    <div class="space20"></div>
                                    <button type="submit" class="btn btn-full-rounded" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">Submit</button>
                                    <footer class="notification-box"></footer>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </form>
                        <!--/.vanilla-form -->
                    </div>
                    <!--/.form-container -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
@endsection

@push('page-scripts')
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        $(document).ready(function() {
            $('#contact-form').submit(function(){
                $(this).children('input[type=submit]').prop('disabled', true);
                $("#submitForm").prop('disabled', true);
                $("#submitForm").attr('disabled', 'disabled');
            });
            $('#career-form').submit(function(){
                $(this).children('input[type=submit]').prop('disabled', true);
                $("#submitCareerForm").prop('disabled', true);
                $("#submitCareerForm").attr('disabled', 'disabled');
            });
        });
    </script>
@endpush
