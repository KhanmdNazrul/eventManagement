@extends('frontend.layouts.app')

@section('css')

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/envens-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/nice-select/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/reey-font/stylesheet.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('css/envens.css')}}" />
    <link rel="stylesheet" href="{{asset('css/envens-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('css/color-2.css')}}" />

@endsection

@section('js')
<script src="{{asset('vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('vendors/wow/wow.js')}}"></script>
    <script src="{{asset('vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('vendors/jquery.circle-type/jquery.circleType.js')}}"></script>
    <script src="{{asset('vendors/jquery.circle-type/jquery.lettering.min.js')}}"></script>
    <script src="{{asset('vendors/nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('vendors/marque/marquee.min.js')}}"></script>
    <!-- template js -->
    <script src="{{asset('js/envens.js')}}"></script>

@endsection

@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url('images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="page-header__shape-1">
        <img src="{{asset('images/shapes/page-header-shape-1.png')}}" alt="">
    </div>
    <div class="page-header__shape-2">
        <img src="{{asset('images/shapes/page-header-shape-2.png')}}" alt="">
    </div>
    <div class="page-header__shape-3">
        <img src="{{asset('images/shapes/page-header-shape-3.png')}}" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Contact Us</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Quick Contact Start-->
<section class="quick-contact">
    <div class="container">
        <div class="row">
            <!--Quick Contact Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="quick-contact__single">
                    <h4 class="quick-contact__title">Visit a Office</h4>
                    <p class="quick-contact__text">You are most welcome to visit office.</p>
                    <div class="quick-contact__contact-list">
                        <p>Boat House, 152/21 City Road
                            <br> Hoxton N1 6NG, UK.
                        </p>
                    </div>
                    <div class="quick-contact__icon">
                        <span class="icon-pin"></span>
                    </div>
                </div>
            </div>
            <!--Quick Contact Single End-->
            <!--Quick Contact Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="quick-contact__single">
                    <h4 class="quick-contact__title">Make a Call</h4>
                    <p class="quick-contact__text">Keeping you always better connected.</p>
                    <div class="quick-contact__contact-list">
                        <p><a href="tel:15557890123">Service: +1 555-7890-123</a></p>
                        <p><a href="tel:2334567890178802">Sales: +233 456 789 01 & 788 02</a></p>
                    </div>
                    <div class="quick-contact__icon">
                        <span class="icon-phone-call"></span>
                    </div>
                </div>
            </div>
            <!--Quick Contact Single End-->
            <!--Quick Contact Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="quick-contact__single">
                    <h4 class="quick-contact__title">Send Email</h4>
                    <p class="quick-contact__text">Drop us a mail we will answer you asap.</p>
                    <div class="quick-contact__contact-list">
                        <p><a href="mailto:support@mailus.com">Sales: support@mailus.com</a></p>
                        <p><a href="mailto:sendmail@company.com">Service: sendmail@company.com </a></p>
                    </div>
                    <div class="quick-contact__icon">
                        <span class="icon-email"></span>
                    </div>
                </div>
            </div>
            <!--Quick Contact Single End-->
        </div>
    </div>
</section>
<!--Quick Contact End-->

<!--Contact Two Start-->
<section class="contact-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact-two__left">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                        class="contact-two__google-map" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-two__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline section-title__tagline--two"><span>//</span>
                                Contact With Us</p>
                        </div>
                        <h2 class="section-title__title">Join the Community to <br><span>Know Us</span></h2>
                    </div>
                    <div class="contact-two__form-box">
                        <div class="contact-two__form-img">
                            <img src="{{asset('images/resources/contact-two-form-img.jpg')}}" alt="">
                        </div>
                        <form class="contact-form-validated contact-two__form" action="{{asset('inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="text" name="name" placeholder="Your name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="email" name="email" placeholder="Email Address"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <div class="contact-two__input-box-icon">
                                            <span class="fas fa-calendar-alt"></span>
                                        </div>
                                        <input type="text" name="date" placeholder="Select date"
                                            id="datepicker">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="text" name="time" placeholder="Select time">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <div class="select-box">
                                            <select class="selectmenu wide">
                                                <option selected="selected">Passengers</option>
                                                <option>Passengers 01</option>
                                                <option>Passengers 02</option>
                                                <option>Passengers 03</option>
                                                <option>Passengers 04</option>
                                                <option>Passengers 05</option>
                                                <option>Passengers 06</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div>
                                    <div class="contact-two__btn-box">
                                        <button type="submit" class="thm-btn contact-two__btn">Send A
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

