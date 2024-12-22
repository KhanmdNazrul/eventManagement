import React from 'react'
export default function Home() {
    return (
        <>
            <div className="page-wrapper">
                <header className="main-header-three">
                    <div className="main-header-three__top">
                        <div className="main-header-three__top-inner">
                            <ul className="list-unstyled main-header-three__contact-list">
                                <li>
                                    <div className="icon">
                                        <i className="icon-email" />
                                    </div>
                                    <div className="text">
                                        <p><a href="mailto:needhelp@company.com">eventeesupreme@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div className="icon">
                                        <i className="icon-pin" />
                                    </div>
                                    <div className="text">
                                        <p>80 Kakrail, Dhaka</p>
                                    </div>
                                </li>
                                <li>
                                    <div className="icon">
                                        <i className="icon-phone-call" />
                                    </div>
                                    <div className="text">
                                        <p><a href="tel:0012346823705">+880 1845207869</a></p>
                                    </div>
                                </li>
                            </ul>
                            <div className="main-header-three__social">
                                <div className="main-header-three__social">
                                    <a href="#"><i className="fab fa-twitter" /></a>
                                    <a href="#"><i className="fab fa-facebook-f" /></a>
                                    <a href="#"><i className="fab fa-google-plus-g" /></a>
                                    <a href="#"><i className="fab fa-pinterest-p" /></a>
                                    <a href="#"><i className="fas fa-wifi" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav className="main-menu main-menu-three">
                        <div className="main-menu-three__wrapper">
                            <div className="main-menu-three__wrapper-inner">
                                <div className="main-menu-three__left">
                                    <div className="main-menu-three__logo">
                                        <a href="index.html"><img src="images/resources/logo-3.png" alt /></a>
                                    </div>
                                    <div className="main-menu-three__main-menu-box">
                                        <a href="#" className="mobile-nav__toggler"><i className="fa fa-bars" /></a>
                                        <ul className="main-menu__list">
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">About</a>
                                            </li>
                                            <li>
                                                <a href="#">Events</a>
                                            </li>
                                            <li>
                                                <a href="#">Blog</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact</a>
                                            </li>
                                            <li>
                                                <a href="#">Gallery</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="main-menu-three__right">
                                    <div className="main-menu-three__login-box">
                                        <div className="select-box">
                                            <select className="wide">
                                                <option data-display="Join With Us">Join With Us</option>
                                                <option value={1}>Login</option>
                                                <option value={2}>Register</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div className="main-menu-three__search-box">
                                        <a href="#" className="main-menu-three__search search-toggler">
                                            <span className="icon-loupe" />
                                            <p className="main-menu-three__search-text">Search here ..</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                <div className="stricky-header stricked-menu main-menu main-menu-three">
                    <div className="sticky-header__content"></div>
                    {/* /.sticky-header__content */}</div>
                {/* /.stricky-header */}
                {/* /.content start */}
                {/*Main Slider Start*/}
                <section className="main-slider-three">
                    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                } 
            }'>
                        <div className="swiper-wrapper">
                            <div className="swiper-slide">
                                <div className="main-slider-three__bg" style={{ backgroundImage: 'url("images/backgrounds/slider-3-1.jpg")' }} />
                                <div className="main-slider-three__shape-1 float-bob-x">
                                    <img src="images/shapes/main-slider-three-shape-1.png" alt />
                                </div>
                                <div className="main-slider-three__shape-2 img-bounce">
                                    <img src="images/shapes/main-slider-three-shape-2.png" alt />
                                </div>
                                <div className="main-slider-three__shape-3 float-bob-y">
                                    <img src="images/shapes/main-slider-three-shape-3.png" alt />
                                </div>
                                <div className="main-slider-three__img">
                                    <img src="images/resources/main-slider-three-img-1.png" alt />
                                </div>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-xl-12">
                                            <div className="main-slider-three__content">
                                                <div className="main-slider-three__content-shape-1">
                                                    <img src="images/shapes/main-slider-three-content-shape-1.png" alt />
                                                </div>
                                                <div className="main-slider-three__sbu-title-box">
                                                    <div className="main-slider-three__sbu-title-shape-1" style={{ backgroundImage: 'url(images/shapes/main-slider-three-sbu-title-shape-1.png)' }}>
                                                    </div>
                                                    <p className="main-slider-three__sbu-title">Welcome To Our Site</p>
                                                </div>
                                                <h2 className="main-slider-three__title">Biggest <br /> Event Planner</h2>
                                                <a href="#" className="main-slider-three__curved-circle">
                                                    <div className="curved-circle">
                                                        Discover more our work
                                                    </div>{/* /.curved-circle */}
                                                    <div className="main-slider-three__arrow-icon-box">
                                                        <div className="main-slider-three__arrow-icon">
                                                            <span className="icon-down-right" />
                                                        </div>
                                                    </div>
                                                </a>{/* /.curved-circle */}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="swiper-slide">
                                <div className="main-slider-three__bg" style={{ backgroundImage: 'url(images/backgrounds/slider-3-2.jpg)' }} />
                                <div className="main-slider-three__shape-1 float-bob-x">
                                    <img src="images/shapes/main-slider-three-shape-1.png" alt />
                                </div>
                                <div className="main-slider-three__shape-2 img-bounce">
                                    <img src="images/shapes/main-slider-three-shape-2.png" alt />
                                </div>
                                <div className="main-slider-three__shape-3 float-bob-y">
                                    <img src="images/shapes/main-slider-three-shape-3.png" alt />
                                </div>
                                <div className="main-slider-three__img">
                                    <img src="images/resources/main-slider-three-img-2.png" alt />
                                </div>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-xl-12">
                                            <div className="main-slider-three__content">
                                                <div className="main-slider-three__content-shape-1">
                                                    <img src="images/shapes/main-slider-three-content-shape-1.png" alt />
                                                </div>
                                                <div className="main-slider-three__sbu-title-box">
                                                    <div className="main-slider-three__sbu-title-shape-1" style={{ backgroundImage: 'url(images/shapes/main-slider-three-sbu-title-shape-1.png)' }}>
                                                    </div>
                                                    <p className="main-slider-three__sbu-title">We are the First</p>
                                                </div>
                                                <h2 className="main-slider-three__title">To manage <br /> Your Event</h2>
                                                <a href="#" className="main-slider-three__curved-circle">
                                                    <div className="curved-circle">
                                                        Discover more our work
                                                    </div>{/* /.curved-circle */}
                                                    <div className="main-slider-three__arrow-icon-box">
                                                        <div className="main-slider-three__arrow-icon">
                                                            <span className="icon-down-right" />
                                                        </div>
                                                    </div>
                                                </a>{/* /.curved-circle */}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="swiper-slide">
                                <div className="main-slider-three__bg" style={{ backgroundImage: 'url(images/backgrounds/slider-3-3.jpg)' }} />
                                <div className="main-slider-three__shape-1 float-bob-x">
                                    <img src="images/shapes/main-slider-three-shape-1.png" alt />
                                </div>
                                <div className="main-slider-three__shape-2 img-bounce">
                                    <img src="images/shapes/main-slider-three-shape-2.png" alt />
                                </div>
                                <div className="main-slider-three__shape-3 float-bob-y">
                                    <img src="images/shapes/main-slider-three-shape-3.png" alt />
                                </div>
                                <div className="main-slider-three__img">
                                    <img src="images/resources/main-slider-three-img-3.png" alt />
                                </div>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-xl-12">
                                            <div className="main-slider-three__content">
                                                <div className="main-slider-three__content-shape-1">
                                                    <img src="images/shapes/main-slider-three-content-shape-1.png" alt />
                                                </div>
                                                <div className="main-slider-three__sbu-title-box">
                                                    <div className="main-slider-three__sbu-title-shape-1" style={{ backgroundImage: 'url(images/shapes/main-slider-three-sbu-title-shape-1.png)' }}>
                                                    </div>
                                                    <p className="main-slider-three__sbu-title">We Are Expert on</p>
                                                </div>
                                                <h2 className="main-slider-three__title">Event <br /> Management</h2>
                                                <a href="#" className="main-slider-three__curved-circle">
                                                    <div className="curved-circle">
                                                        Discover more our work
                                                    </div>{/* /.curved-circle */}
                                                    <div className="main-slider-three__arrow-icon-box">
                                                        <div className="main-slider-three__arrow-icon">
                                                            <span className="icon-down-right" />
                                                        </div>
                                                    </div>
                                                </a>{/* /.curved-circle */}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="swiper-pagination" id="main-slider-pagination" />
                        {/* If we need navigation buttons */}
                    </div>
                </section>
                {/*Main Slider End*/}
                {/*Feature Two Start*/}
                <section className="feature-two">
                    <div className="feature-two__wrap">
                        <div className="feature-two__shape-bg float-bob-y" style={{ backgroundImage: 'url(images/shapes/feature-two-shape-bg.png)' }} />
                        <div className="feature-two__shape-1">
                            <img src="images/shapes/feature-two-shape-1.png" alt />
                        </div>
                        <div className="feature-two__shape-2">
                            <img src="images/shapes/feature-two-shape-2.png" alt />
                        </div>
                        <div className="feature-two__shape-3">
                            <img src="images/shapes/feature-two-shape-3.png" alt />
                        </div>
                        <div className="feature-two__shape-4">
                            <img src="images/shapes/feature-two-shape-4.png" alt />
                        </div>
                        <div className="container">
                            <div className="section-title text-center">
                                <div className="section-title__tagline-box">
                                    <p className="section-title__tagline"><span>//</span> Our Features <span>//</span> </p>
                                </div>
                                <h2 className="section-title__title">Features For Our Client For <br /> <span>Your Event</span></h2>
                            </div>
                            <div className="row">
                                {/*Feature Two Single Start*/}
                                <div className="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                                    <div className="feature-two__single">
                                        <div className="feature-two__img">
                                            <img src="images/resources/feature-two-1-1.jpg" alt />
                                        </div>
                                        <div className="feature-two__content">
                                            <h4 className="feature-two__title"><a href="speaker.html">Confirm Speakers</a></h4>
                                            <div className="feature-two__icon-and-text">
                                                <div className="feature-two__icon">
                                                    <span className="icon-icon-15151715" />
                                                </div>
                                                <p className="feature-two__text">This invol high-level structure <br />
                                                    of software system.</p>
                                            </div>
                                            <div className="feature-two__btn-box">
                                                <a href="speaker.html" className="feature-two__btn">More Details <span className="icon-right-up" /> </a>
                                            </div>
                                        </div>
                                        <div className="feature-two__count" />
                                    </div>
                                </div>
                                {/*Feature Two Single End*/}
                                {/*Feature Two Single Start*/}
                                <div className="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                                    <div className="feature-two__single">
                                        <div className="feature-two__img">
                                            <img src="images/resources/feature-two-1-2.jpg" alt />
                                        </div>
                                        <div className="feature-two__content">
                                            <h4 className="feature-two__title"><a href="about.html">Best Digital Ideas</a></h4>
                                            <div className="feature-two__icon-and-text">
                                                <div className="feature-two__icon">
                                                    <span className="icon-brain" />
                                                </div>
                                                <p className="feature-two__text">This invol high-level structure <br />
                                                    of software system.</p>
                                            </div>
                                            <div className="feature-two__btn-box">
                                                <a href="about.html" className="feature-two__btn">More Details <span className="icon-right-up" /> </a>
                                            </div>
                                        </div>
                                        <div className="feature-two__count" />
                                    </div>
                                </div>
                                {/*Feature Two Single End*/}
                                {/*Feature Two Single Start*/}
                                <div className="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                                    <div className="feature-two__single">
                                        <div className="feature-two__img">
                                            <img src="images/resources/feature-two-1-3.jpg" alt />
                                        </div>
                                        <div className="feature-two__content">
                                            <h4 className="feature-two__title"><a href="contact.html">Networking People</a></h4>
                                            <div className="feature-two__icon-and-text">
                                                <div className="feature-two__icon">
                                                    <span className="icon-connection" />
                                                </div>
                                                <p className="feature-two__text">This invol high-level structure <br />
                                                    of software system.</p>
                                            </div>
                                            <div className="feature-two__btn-box">
                                                <a href="contact.html" className="feature-two__btn">More Details <span className="icon-right-up" /> </a>
                                            </div>
                                        </div>
                                        <div className="feature-two__count" />
                                    </div>
                                </div>
                                {/*Feature Two Single End*/}
                            </div>
                        </div>
                    </div>
                </section>
                {/*Feature Two End*/}
                {/*Events Three Start*/}
                <section className="events-three">
                    <div className="container">
                        <div className="section-title text-center">
                            <div className="section-title__tagline-box">
                                <p className="section-title__tagline"><span>//</span> Upcoming Events <span>//</span> </p>
                            </div>
                            <h2 className="section-title__title"> Popular Events <br /> <span>Schedule</span></h2>
                        </div>
                        <div className="events-three__main-tab-box tabs-box">
                            <div className="tabs-content">
                                {/*tab*/}
                                <div className="tab active-tab">
                                    <div className="events-three__main-content-box">
                                        <ul className="list-unstyled events-three__content-list">
                                            {/* loop */}
                                            <li className="events-three__content-single">
                                                <div className="events-three__content-left">
                                                    <div className="events-three__content-img">
                                                        <img src="" alt />
                                                        <div className="events-three__video-link">
                                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" className="video-popup">
                                                                <div className="events-three__video-icon">
                                                                    <span className="icon-play" />
                                                                    <i className="ripple" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div className="events-three__content-user">
                                                        <div className="events-three__content-user-img">
                                                            <img src="" alt />
                                                        </div>
                                                        <div className="events-three__content-user-info">
                                                            <h4 className="events-three__content-user-name"> speaker name </h4>
                                                            <p className="events-three__content-user-sub-title">speaker profession</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="events-three__content-right">
                                                    <div className="events-three__content-right-content">
                                                        <div className="events-three__content-right-content-left">
                                                            <h4 className="events-three__content-right-content-title"><a href="#">event title</a></h4>
                                                            <ul className="list-unstyled events-three__content-right-content-list">
                                                                <li>
                                                                    <div className="icon">
                                                                        <span className="icon-coffee-cup" />
                                                                    </div>
                                                                    <div className="text">
                                                                        <p>Coffee &amp; Snacks</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div className="icon">
                                                                        <span className="icon-youtube" />
                                                                    </div>
                                                                    <div className="text">
                                                                        <p>Video Streaming</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div className="events-three__content-right-content-right">
                                                            <h4 className="events-three__content-right-content-title-two">event start date
                                                            </h4>
                                                            <div className="events-three__content-right-content-time">
                                                                <div className="icon">
                                                                    <span className="icon-time" />
                                                                </div>
                                                                <div className="text">
                                                                    <p>event start_time</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div className="events-three__btn-box">
                                                        <a href="#" className="about-three__btn thm-btn-two"><span className="fas fa-arrow-circle-right" />Buy Ticket</a>
                                                    </div>
                                                </div>
                                            </li>
                                            {/* loop end */}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {/*Events Three End*/}
                {/*Team Three Start*/}
                <section className="team-three">
                    <div className="team-three__bg" style={{ backgroundImage: 'url(images/backgrounds/team-three-bg.jpg)' }}>
                    </div>
                    <div className="container">
                        <div className="team-three__top">
                            <div className="team-three__top-left">
                                <div className="section-title text-left">
                                    <div className="section-title__tagline-box">
                                        <span className="section-title__tagline"><span>//</span> About The Event</span>
                                    </div>
                                    <h2 className="section-title__title">Our Best Expert Event <br /> <span>Speakers</span></h2>
                                </div>
                            </div>
                            <div className="team-three__top-right">
                                <div className="team-three__nav">
                                    <div className="swiper-button-next1">
                                        <i className="icon-arrow" />
                                    </div>
                                    <div className="swiper-button-prev1">
                                        <i className="icon-right-arrows" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="team-three__bottom">
                            <div >
                                <div className="swiper-wrapper">
                                    {/*Team Three Single Start*/}
                                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                        "slidesPerView": 1, 
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },
    
                        
    
                        "navigation": {
                            "nextEl": ".swiper-button-prev1",
                            "prevEl": ".swiper-button-next1"
                        },
                        "autoplay": { "delay": 9000 },
                        "breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "375": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "1200": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                },
                                "1344": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                }
                            }
                    }'>
                                        {/* speaker loop */}
                                        <div className="team-three__single">
                                            <div className="team-three__img-box">
                                                <div className="team-three__img">
                                                    <img src="" height="400" width="500" alt='nophoto.jpg' />
                                                </div>
                                                <div className="team-three__share-and-social">
                                                    <div className="team-three__share">
                                                        <a href="#"><span className="fas fa-share-alt" /></a>
                                                    </div>
                                                    <div className="team-three__social">
                                                        <a href="#"><span className="fab fa-twitter" /></a>
                                                        <a href="#"><span className="fab fa-facebook-f" /></a>
                                                        <a href="#"><span className="fab fa-pinterest-p" /></a>
                                                        <a href="#"><span className="fas fa-wifi" /></a>
                                                    </div>
                                                </div>
                                                <div className="team-three__content">
                                                    <p className="team-three__sub-title">speaker profession</p>
                                                    <h4 className="team-three__title"><a href="#">speaker name</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        {/* loop end */}
                                    </div>
                                    {/*Team Three Single End*/}
                                </div>
                                {/* If we need navigation buttons */}
                            </div>
                        </div>
                    </div>
                </section>
                {/*Team Three End*/}
                {/*Pricing Two Start*/}
                <section className="pricing-two">
                    <div className="container">
                        <div className="section-title text-center">
                            <div className="section-title__tagline-box">
                                <span className="section-title__tagline"><span>//</span> Price Plan <span>//</span></span>
                            </div>
                            <h2 className="section-title__title">Ticket To The Grow Marketing <br /> <span>Conference</span></h2>
                        </div>
                        <div className="row">
                            {/*Pricing Two Single Start*/}
                            <div className="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                                <div className="pricing-two__single">
                                    <div className="pricing-two__single-inner">
                                        <h4 className="pricing-two__title">Standard Pass</h4>
                                        <div className="pricing-two__price-box">
                                            <h2><span>$</span>20</h2>
                                            <p>/ One Day</p>
                                        </div>
                                        <ul className="list-unstyled pricing-two__points">
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Can Access Online Free</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Gat Vip Privileges Seta</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Free Lunch Foods Free Wifi</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Always plan support</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div className="pricing-two__btn-box">
                                            <a href="pricing.html" className="pricing-two__btn">Buy Ticket</a>
                                        </div>
                                        <div className="pricing-two__shape-1">
                                            <img src="images/shapes/pricing-two-shape-1.png" alt />
                                        </div>
                                        <div className="pricing-two__shape-2">
                                            <img src="images/shapes/pricing-two-shape-2.png" alt />
                                        </div>
                                    </div>
                                    <div className="pricing-two__popular">
                                        <p>Popular</p>
                                    </div>
                                </div>
                            </div>
                            {/*Pricing Two Single End*/}
                            {/*Pricing Two Single Start*/}
                            <div className="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                                <div className="pricing-two__single">
                                    <div className="pricing-two__single-inner">
                                        <h4 className="pricing-two__title">Flexible Pass</h4>
                                        <div className="pricing-two__price-box">
                                            <h2><span>$</span>40</h2>
                                            <p>/ One Day</p>
                                        </div>
                                        <ul className="list-unstyled pricing-two__points">
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Can Access Online Free</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Gat Vip Privileges Seta</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Free Lunch Foods Free Wifi</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Always plan support</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div className="pricing-two__btn-box">
                                            <a href="pricing.html" className="pricing-two__btn">Buy Ticket</a>
                                        </div>
                                        <div className="pricing-two__shape-1">
                                            <img src="images/shapes/pricing-two-shape-1.png" alt />
                                        </div>
                                        <div className="pricing-two__shape-2">
                                            <img src="images/shapes/pricing-two-shape-2.png" alt />
                                        </div>
                                    </div>
                                    <div className="pricing-two__popular">
                                        <p>Popular</p>
                                    </div>
                                </div>
                            </div>
                            {/*Pricing Two Single End*/}
                            {/*Pricing Two Single Start*/}
                            <div className="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                                <div className="pricing-two__single">
                                    <div className="pricing-two__single-inner">
                                        <h4 className="pricing-two__title">Business Pass</h4>
                                        <div className="pricing-two__price-box">
                                            <h2><span>$</span>70</h2>
                                            <p>/ One Day</p>
                                        </div>
                                        <ul className="list-unstyled pricing-two__points">
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Can Access Online Free</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Gat Vip Privileges Seta</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Free Lunch Foods Free Wifi</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="icon" />
                                                <div className="text">
                                                    <p>Always plan support</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div className="pricing-two__btn-box">
                                            <a href="pricing.html" className="pricing-two__btn">Buy Ticket</a>
                                        </div>
                                        <div className="pricing-two__shape-1">
                                            <img src="images/shapes/pricing-two-shape-1.png" alt />
                                        </div>
                                        <div className="pricing-two__shape-2">
                                            <img src="images/shapes/pricing-two-shape-2.png" alt />
                                        </div>
                                    </div>
                                    <div className="pricing-two__popular">
                                        <p>Popular</p>
                                    </div>
                                </div>
                            </div>
                            {/*Pricing Two Single End*/}
                        </div>
                    </div>
                </section>
                {/*Pricing Two End*/}
                {/*Gallery Two Start*/}
                <section className="gallery-two">
                    <div className="gallery-two__top">
                        <div className="container">
                            <div className="gallery-two__top-inner">
                                <div className="section-title text-left">
                                    <div className="section-title__tagline-box">
                                        <span className="section-title__tagline"><span>//</span> Event Gallery
                                            <span>//</span></span>
                                    </div>
                                    <h2 className="section-title__title">Our Greatest Event <br /> <span>Showcase</span></h2>
                                </div>
                                <div className="gallery-two__btn-box">
                                    <a href="{{route('fgallery" className="gallery-two__btn thm-btn-two"><span className="fas fa-arrow-circle-right" />View All Gallery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="gallery-two__bottom">
                        <div className="container">
                            <div className="row masonary-layout">
                                {/*Project Three Single Start*/}
                                {/* gallery loop start */}
                                <div className="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div className="gallery-two__single">
                                        <div className="gallery-two__img">
                                            <img src="" alt />
                                            <div className="gallery-two__content">
                                                <div className="gallery-two__content-shape-1" style={{ backgroundImage: 'url(images/shapes/gallery-two-content-shape-1.png)' }}>
                                                </div>
                                                <div className="gallery-two__zoom-and-link">
                                                    <a href="images/gallery/gallery-2-1.jpg" className="img-popup"><span className="icon-zoom" /></a>
                                                    <a href="#"><span className="icon-plus" /></a>
                                                </div>
                                                <div className="gallery-two__content-text">
                                                    <p>uploadded by attendee name</p>
                                                    <h5>gallery caption</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {/* loop end */}
                                {/*Project Three Single End*/}
                            </div>
                        </div>
                    </div>
                </section>
                {/*Gallery Two End*/}
                {/*Brand Three Start*/}
                <section className="brand-three">
                    <div className="brand-three__wrap">
                        <div className="brand-three__shape-bg float-bob-y" style={{ backgroundImage: 'url(images/shapes/brand-three-shape-bg.png)' }} />
                        <div className="brand-three__shape-1">
                            <img src="images/shapes/brand-three-shape-1.png" alt />
                        </div>
                        <div className="brand-three__shape-2">
                            <img src="images/shapes/brand-three-shape-2.png" alt />
                        </div>
                        <div className="brand-three__shape-3">
                            <img src="images/shapes/brand-three-shape-3.png" alt />
                        </div>
                        <div className="brand-three__shape-4">
                            <img src="images/shapes/brand-three-shape-4.png" alt />
                        </div>
                        <div className="container">
                            <div className="brand-three__inner">
                                <div className="section-title text-center">
                                    <div className="section-title__tagline-box">
                                        <span className="section-title__tagline"><span>//</span> Sponsors <span>//</span></span>
                                    </div>
                                    <h2 className="section-title__title">Our Company Official <br /> <span>Sponsors</span></h2>
                                </div>
                                <ul className="list-unstyled brand-three__list">
                                    <li>
                                        <div className="brand-three__img-box">
                                            <div className="brand-three__img">
                                                <img src="images/brand/brand-3-1.png" alt />
                                            </div>
                                            <div className="brand-three__img-hover">
                                                <img src="images/brand/brand-3-1-hover.png" alt />
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="brand-three__img-box">
                                            <div className="brand-three__img">
                                                <img src="images/brand/brand-3-2.png" alt />
                                            </div>
                                            <div className="brand-three__img-hover">
                                                <img src="images/brand/brand-3-2-hover.png" alt />
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="brand-three__img-box">
                                            <div className="brand-three__img">
                                                <img src="images/brand/brand-3-3.png" alt />
                                            </div>
                                            <div className="brand-three__img-hover">
                                                <img src="images/brand/brand-3-3-hover.png" alt />
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="brand-three__img-box">
                                            <div className="brand-three__img">
                                                <img src="images/brand/brand-3-4.png" alt />
                                            </div>
                                            <div className="brand-three__img-hover">
                                                <img src="images/brand/brand-3-4-hover.png" alt />
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul className="list-unstyled brand-three__list brand-three__list--two">
                                    <li>
                                        <div className="brand-three__img-box">
                                            <div className="brand-three__img">
                                                <img src="images/brand/brand-3-5.png" alt />
                                            </div>
                                            <div className="brand-three__img-hover">
                                                <img src="images/brand/brand-3-5-hover.png" alt />
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="brand-three__img-box">
                                            <div className="brand-three__img">
                                                <img src="images/brand/brand-3-6.png" alt />
                                            </div>
                                            <div className="brand-three__img-hover">
                                                <img src="images/brand/brand-3-6-hover.png" alt />
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="brand-three__img-box">
                                            <div className="brand-three__img">
                                                <img src="images/brand/brand-3-7.png" alt />
                                            </div>
                                            <div className="brand-three__img-hover">
                                                <img src="images/brand/brand-3-7-hover.png" alt />
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                {/*Brand Three End*/}
                {/*Testimonial Two Start*/}
                <section className="testimonial-two">
                    <div className="testimonial-two__bg" style={{ backgroundImage: 'url(images/backgrounds/testimonial-two-bg.jpg)' }} />
                    <div className="container">
                        <div className="testimonial-two__top">
                            <div className="section-title text-left">
                                <div className="section-title__tagline-box">
                                    <span className="section-title__tagline"><span>//</span> About The Event</span>
                                </div>
                                <h2 className="section-title__title">What Our Client's <br /> <span>Feedback</span></h2>
                            </div>
                            <div className="testimonial-two__nav">
                                <div className="swiper-button-next1" tabIndex={0} role="button" aria-label="Previous slide">
                                    <i className="icon-arrow" />
                                </div>
                                <div className="swiper-button-prev1" tabIndex={0} role="button" aria-label="Next slide">
                                    <i className="icon-right-arrows" />
                                </div>
                            </div>
                        </div>
                        <div className="testimonial-two__bottom">
                            <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                        "slidesPerView": 1, 
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },
    
                        
    
                        "navigation": {
                            "nextEl": ".swiper-button-prev1",
                            "prevEl": ".swiper-button-next1"
                        },
                        "autoplay": { "delay": 9000 },
                        "breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "375": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 3
                                },
                                "1200": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                },
                                "1344": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                }
                            }
                    }'>
                                <div className="swiper-wrapper">
                                    {/*Testimonial Two Single Start*/}
                                    {/* feedback loop start */}
                                    <div className="swiper-slide">
                                        <div className="testimonial-two__single">
                                            <div className="testimonial-two__client-info">
                                                <div className="testimonial-two__client-img">
                                                    <img src="" alt />
                                                </div>
                                                <div className="testimonial-two__client-content">
                                                    <p className="testimonial-two__client-name"><a href="#">Attendee Name</a></p>
                                                    <span className="testimonial-two__client-sub-title">designation & Company Name</span>
                                                </div>
                                            </div>
                                            <div className="testimonial-two__content">
                                                <div className="testimonial-two__icon">
                                                    <span className="icon-conversation" />
                                                </div>
                                                <p className="testimonial-two__text">feedback</p>
                                                <div className="testimonial-two__rating-box">
                                                    <div className="testimonial-two__rating">
                                                        <span className="icon-star" />
                                                        <span className="icon-star" />
                                                        <span className="icon-star" />
                                                        <span className="icon-star" />
                                                        <span className="icon-star" />
                                                    </div>
                                                    <p className="testimonial-two__rating-text">5 Out of 5.0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {/* loop end */}
                                    {/*Testimonial Two Single End*/}
                                </div>
                                {/* If we need navigation buttons */}
                            </div>
                        </div>
                    </div>
                </section>
                {/*Testimonial Two End*/}
                {/*Blog Three Start*/}
                <section className="blog-three">
                    <div className="container">
                        <div className="section-title text-center">
                            <div className="section-title__tagline-box">
                                <span className="section-title__tagline"><span>//</span> Latest Blog <span>//</span></span>
                            </div>
                            <h2 className="section-title__title">Whats Going On Around <br /> <span>You</span></h2>
                        </div>
                        <div className="row">
                            {/*Blog Three Single Start*/}
                            {/* blog loop start */}
                            <div className="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                                <div className="blog-three__single">
                                    <div className="blog-three__img">
                                        <img src="" alt />
                                    </div>
                                    <div className="blog-three__date-and-tag">
                                        <div className="blog-three__date">
                                            <p>blog title</p>
                                        </div>
                                        <div className="blog-three__tag">
                                            <div className="blog-three__tag-border" />
                                        </div>
                                    </div>
                                    <h3 className="blog-three__title"><a href="#">blog title</a></h3>
                                </div>
                            </div>
                            {/* loop end */}
                            {/*Blog Three Single End*/}
                        </div>
                    </div>
                </section>
                {/*Blog Three End*/}
                {/* /.content end */}
                {/*Site Footer Two Start*/}
                <footer className="site-footer-two">
                    <div className="site-footer-two__bg" style={{ backgroundImage: 'url(images/backgrounds/site-footer-two-bg.jpg)' }} />
                    <div className="site-footer-two__shape-bg-1" style={{ backgroundImage: 'url(images/shapes/site-footer-two-shape-bg-1.png)' }} />
                    <div className="site-footer-two__top">
                        <div className="site-footer-two__top-shape-2 float-bob-x">
                            <img src="images/shapes/site-footer-two-top-shape-2.png" alt />
                        </div>
                        <div className="site-footer-two__top-shape-3 float-bob-y">
                            <img src="images/shapes/site-footer-two-top-shape-3.png" alt />
                        </div>
                        <div className="container">
                            <div className="site-footer-two__top-inner">
                                <div className="site-footer-two__top-shape-1 img-bounce">
                                    <img src="images/shapes/site-footer-two-top-shape-1.png" alt />
                                </div>
                                <div className="site-footer-two__top-icon-box">
                                    <div className="site-footer-two__top-icon">
                                        <span className="icon-placeholder" />
                                    </div>
                                    <div className="site-footer-two__top-icon-content">
                                        <p>Our Location</p>
                                        <h5>80 Kakrail,Dhaka Bangladesh</h5>
                                    </div>
                                </div>
                                <div className="site-footer-two__logo">
                                    <a href="index.html"><img src="images/resources/site-footer-logo-3.png" alt /></a>
                                </div>
                                <div className="site-footer-two__top-icon-box">
                                    <div className="site-footer-two__top-icon">
                                        <span className="icon-telephone" />
                                    </div>
                                    <div className="site-footer-two__top-icon-content">
                                        <p>Make a Call</p>
                                        <h5><a href="tel:2334567908">(+88) 0184 520 7869</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="site-footer-two__middle">
                        <div className="container">
                            <div className="site-footer-two__middle-inner">
                                <div className="row">
                                    <div className="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                        <div className="footer-widget-two__column footer-widget-two__about">
                                            <div className="footer-widget-two__title-box">
                                                <h3 className="footer-widget-two__title">About Us</h3>
                                            </div>
                                            <div className="footer-widget-two__link-list-box">
                                                <ul className="footer-widget-two__link-list list-unstyled">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="about.html">Custom Widget</a></li>
                                                    <li><a href="about.html">Short Codes</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="about.html">Short Codes</a></li>
                                                </ul>
                                                <ul className="footer-widget-two__link-list footer-widget-two__link-list--two list-unstyled">
                                                    <li><a href="gallery.html">Our Projects</a></li>
                                                    <li><a href="about.html">Terms &amp; Conditions</a></li>
                                                    <li><a href="pricing.html">Pricing Table</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                        <div className="footer-widget-two__column footer-widget-two__link">
                                            <div className="footer-widget-two__title-box">
                                                <h3 className="footer-widget-two__title">Quick Link</h3>
                                            </div>
                                            <ul className="footer-widget-two__link-list list-unstyled">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">Privacy Policy</a></li>
                                                <li><a href="speaker.html">Terms</a></li>
                                                <li><a href="sponsors.html">Our Awards</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                        <div className="footer-widget-two__column footer-widget-two__gallery">
                                            <div className="footer-widget-two__title-box">
                                                <h3 className="footer-widget-two__title">Instagram</h3>
                                            </div>
                                            <ul className="footer-widget-two__gallery-list list-unstyled clearfix">
                                                <li>
                                                    <div className="footer-widget-two__gallery-img">
                                                        <img src="images/gallery/footer-widget-two-gallery-1-1.jpg" alt />
                                                        <a href="#"><span className="icon-link" /></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div className="footer-widget-two__gallery-img">
                                                        <img src="images/gallery/footer-widget-two-gallery-1-2.jpg" alt />
                                                        <a href="#"><span className="icon-link" /></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div className="footer-widget-two__gallery-img">
                                                        <img src="images/gallery/footer-widget-two-gallery-1-3.jpg" alt />
                                                        <a href="#"><span className="icon-link" /></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div className="footer-widget-two__gallery-img">
                                                        <img src="images/gallery/footer-widget-two-gallery-1-4.jpg" alt />
                                                        <a href="#"><span className="icon-link" /></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div className="footer-widget-two__gallery-img">
                                                        <img src="images/gallery/footer-widget-two-gallery-1-5.jpg" alt />
                                                        <a href="#"><span className="icon-link" /></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div className="footer-widget-two__gallery-img">
                                                        <img src="images/gallery/footer-widget-two-gallery-1-6.jpg" alt />
                                                        <a href="#"><span className="icon-link" /></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                        <div className="footer-widget-two__column footer-widget-two__social">
                                            <div className="footer-widget-two__title-box">
                                                <h3 className="footer-widget-two__title">Follow Us</h3>
                                            </div>
                                            <ul className="footer-widget-two__link-list list-unstyled">
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Instagram</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Linkedin</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="site-footer-two__bottom">
                        <div className="container">
                            <div className="site-footer-two__bottom-inner">
                                <p className="site-footer-two__bottom-text">Copyright © 2024 Eventee Supreme, all rights reserved.</p>
                                <ul className="list-unstyled site-footer-two__botom-menu">
                                    <li><a href="about.html">Privacy</a></li>
                                    <li><a href="about.html">Terms &amp; Conditions</a></li>
                                    <li><a href="sponsors.html">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                {/*Site Footer Two End*/}
            </div>
            {/* /.page-wrapper */}
            <div className="mobile-nav__wrapper">
                <div className="mobile-nav__overlay mobile-nav__toggler" />
                {/* /.mobile-nav__overlay */}
                <div className="mobile-nav__content">
                    <span className="mobile-nav__close mobile-nav__toggler"><i className="fa fa-times" /></span>
                    <div className="logo-box">
                        <a href="index.html" aria-label="logo image"><img src="images/resources/logo-3.png" width={150} alt /></a>
                    </div>
                    {/* /.logo-box */}
                    <div className="mobile-nav__container" />
                    {/* /.mobile-nav__container */}
                    <ul className="mobile-nav__contact list-unstyled">
                        <li>
                            <i className="fa fa-envelope" />
                            <a href="mailto:needhelp@packageName__.com">needhelp@envens.com</a>
                        </li>
                        <li>
                            <i className="fa fa-phone-alt" />
                            <a href="tel:666-888-0000">666 888 0000</a>
                        </li>
                    </ul>
                    {/* /.mobile-nav__contact */}
                    <div className="mobile-nav__top">
                        <div className="mobile-nav__social">
                            <a href="#" className="fab fa-twitter" />
                            <a href="#" className="fab fa-facebook-square" />
                            <a href="#" className="fab fa-pinterest-p" />
                            <a href="#" className="fab fa-instagram" />
                        </div>
                        {/* /.mobile-nav__social */}
                    </div>
                    {/* /.mobile-nav__top */}
                </div>
                {/* /.mobile-nav__content */}
            </div>
            {/* /.mobile-nav__wrapper */}
            <div className="search-popup">
                <div className="search-popup__overlay search-toggler" />
                {/* /.search-popup__overlay */}
                <div className="search-popup__content">
                    <form action="#">
                        <label htmlFor="search" className="sr-only">search here</label>{/* /.sr-only */}
                        <input type="text" id="search" placeholder="Search Here..." />
                        <button type="submit" aria-label="search submit" className="thm-btn">
                            <i className="fas fa-search" />
                        </button>
                    </form>
                </div>
                {/* /.search-popup__content */}
            </div>
            {/* /.search-popup */}
            <a href="#" data-target="html" className="scroll-to-target scroll-to-top"><i className="fas fa-arrow-up" /></a>
        </>
    )
}
