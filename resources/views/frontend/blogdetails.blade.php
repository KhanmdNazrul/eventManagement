@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="page-header__bg" style="background-image: url('images/backgrounds/pagetheme.jpg');">
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
            
        </div>
    </div>
</section>

<section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <h3 class="sidebar__title">Search</h3>
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-loupe"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Category</h3>
                                <ul class="blog-details__catagories-list list-unstyled">
                                    <li>
                                        <a href="blog-details.html">Notable Speakers<span
                                                class="icon-right-arrows"></span></a>
                                    </li>
                                    <li class="active">
                                        <a href="blog-details.html">Personal Insights<span
                                                class="icon-right-arrows"></span></a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Home Renovation<span
                                                class="icon-right-arrows"></span></a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Standout speakers<span
                                                class="icon-right-arrows"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Recent Post</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="blog-details.html">If there were any standout speakers
                                                    at the conference</a>
                                            </h3>
                                            <span class="sidebar__post-content-date">24 Mach 2024</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="blog-details.html">Provide brief profiles of these
                                                    speakers and summarize</a>
                                            </h3>
                                            <span class="sidebar__post-content-date">24 Mach 2024</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="blog-details.html">Share your own reflections and
                                                    insights from attending</a>
                                            </h3>
                                            <span class="sidebar__post-content-date">24 Mach 2024</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags Cloud</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Event</a>
                                    <a href="#">Meetup</a>
                                    <a href="#">Toolset</a>
                                    <a href="#">Conference</a>
                                    <a href="#">Store</a>
                                    <a href="#">Public</a>
                                    <a href="#">Creative</a>
                                    <a href="#">schedule</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__right">
                            <div class="blog-details__img">
                                <img src="assets/images/blog/blog-details-1-1.jpg" alt="">
                            </div>
                            <div class="blog-details__content">
                                <ul class="blog-details__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-tag"></span>
                                        </div>
                                        <a href="#">Corporate</a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-user"></span>
                                        </div>
                                        <a href="#">Paul Smith</a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-comments"></span>
                                        </div>
                                        <a href="#">0 Comment</a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-heart"></span>
                                        </div>
                                        <a href="#">0 Like</a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title-1">The Birth of Modern Architecture and its Artistic</h3>
                                <p class="blog-details__text-1">Professionals known as architects are responsible for
                                    creating architectural designs. They work with clients
                                    to understand their needs, develop design concepts, and ensure that the final
                                    construction meets
                                    safety, zoning, and environmental regulations.</p>
                                <div class="blog-details__quote-and-text">
                                    <div class="blog-details__quote">
                                        <span class="fas fa-quote-left"></span>
                                    </div>
                                    <p class="blog-details__quote-text">In essence, architecture is a multifaceted field
                                        that combines artistic creativity, engineering principles, and societal
                                        considerations to shape the physical environment in which we live, work, and
                                        play.</p>
                                </div>
                                <ul class="blog-details__points list-unstyled">
                                    <li>
                                        <div class="blog-details__points-shape"></div>
                                        <p>Architectural styles vary globally, reflecting regional cultures, climates,
                                            and materials.</p>
                                    </li>
                                    <li>
                                        <div class="blog-details__points-shape"></div>
                                        <p>Globalization has led to the exchange of architectural ideas and practices
                                            worldwide.</p>
                                    </li>
                                    <li>
                                        <div class="blog-details__points-shape"></div>
                                        <p>Increasingly, architects focus on environmentally friendly and sustainable
                                            design practices.</p>
                                    </li>
                                    <li>
                                        <div class="blog-details__points-shape"></div>
                                        <p>Buildings must be structurally sound to ensure safety.</p>
                                    </li>
                                </ul>
                                <p class="blog-details__quote-text-2">In essence, architecture is a multifaceted field
                                    that combines artistic creativity, engineering principles, and societal
                                    considerations to shape the physical environment in which we live, work, and
                                    play.</p>
                                <div class="blog-details__social-box">
                                    <p>Share:</p>
                                    <div class="blog-details__social">
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                    </div>
                                </div>
                                <div class="comment-one">
                                    <h3 class="comment-one__title">Comments (2)</h3>
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Mahina B. Sanwie</h3>
                                            <p>Blessed heaven in seasons man were image void seasons given bearing
                                                fly<br>
                                                multiply every deed you can surem dolor mesurement good.</p>
                                            <div class="comment-one__date-and-btn">
                                                <p class="comment-one__date">February 03. 2023</p>
                                                <a href="blog-details.html" class="comment-one__btn">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-one__single comment-one__single-2">
                                        <div class="comment-one__image">
                                            <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Jhone Langua</h3>
                                            <p>Blessed heaven in seasons man were image void seasons given bearing
                                                fly<br>
                                                multiply every deed you can surem dolor mesurement good.</p>
                                            <div class="comment-one__date-and-btn">
                                                <p class="comment-one__date">February 03. 2023</p>
                                                <a href="blog-details.html" class="comment-one__btn">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-one__single comment-one__single-3">
                                        <div class="comment-one__image">
                                            <img src="assets/images/blog/comment-1-3.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Kaniz D. Warnor</h3>
                                            <p>Blessed heaven in seasons man were image void seasons given bearing
                                                fly<br>
                                                multiply every deed you can surem dolor mesurement good.</p>
                                            <div class="comment-one__date-and-btn">
                                                <p class="comment-one__date">February 03. 2023</p>
                                                <a href="blog-details.html" class="comment-one__btn">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form__form-inner">
                                    <h3 class="comment-form__title">Leave A comment</h3>
                                    <form action="assets/inc/sendemail.php"
                                        class="comment-form__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Subject" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <button type="submit" class="comment-form__btn">Leave
                                                        Comment</button>
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
            </div>
        </section>

@endsection