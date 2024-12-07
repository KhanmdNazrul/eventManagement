@extends('frontend.layouts.app')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(images/backgrounds/page-header-bg.jpg);">
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
            <h2>Events</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>Events</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Events Three Start-->
<section class="events-three">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
               
            </div>
            <h2 class="section-title__title">  Upcoming Events <br> <span>Schedule</span></h2>
        </div>
        <div class="events-three__main-tab-box tabs-box">
           
            <div class="tabs-content">
                <!--tab-->
                <div class="tab" id="1stday">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-1.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">John Singh</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Kelimontos DJ
                                                    Party 2019</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-2.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Meeting With Word</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-3.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Humble Hill Running Day</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--tab-->
                <!--tab-->
                <div class="tab active-tab" id="2ndday">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-1.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">John Singh</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Kelimontos DJ
                                                    Party 2019</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-2.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Meeting With Word</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-3.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="contact.html">Humble Hill Running Day</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--tab-->
                <!--tab-->
                <div class="tab" id="3rdday">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-1.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">John Singh</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Kelimontos DJ
                                                    Party 2019</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-2.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Meeting With Word</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-3.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="contact.html">Humble Hill Running Day</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--tab-->
                <!--tab-->
                <div class="tab" id="4thdday">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-1.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">John Singh</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Kelimontos DJ
                                                    Party 2019</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-2.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Meeting With Word</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-3.jpg')}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Humble Hill Running Day</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--tab-->
            </div>
        </div>
    </div>
</section>
<!--Events Three End-->
@endsection