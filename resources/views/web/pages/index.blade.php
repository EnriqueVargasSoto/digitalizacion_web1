@extends('web.layouts.layout')

@section('content')
    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
            </form>
            <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
        </div>
    </div>
    <!-- /#popup-search-box -->

    <div class="preloader">
        <img src="{{ asset ('web/assets/img/logo/proloader.gif')}}" alt="preloader-icon">
    </div>
    <!--/.site-preloader-->

    <div class="mobile-side-menu">
        <div class="side-menu-content">
            <div class="side-menu-head">
                <a href="index-2.html"><img src="{{ asset ('web/assets/img/logo/logo-dark.png')}}" alt="logo"></a>
                <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
            </div>
            <div class="side-menu-wrap"></div>
            <div class="contact-item item-2">
                <ul class="contact-list">
                    <li>Address : <span>Amsterdam, 109-74</span></li>
                    <li>Phone : <a href="tel:+01569896654">+01 569 896 654</a></li>
                    <li>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.mobile-side-menu -->
    <div class="mobile-side-menu-overlay"></div>

    <section class="hero-section" data-background="{{ asset ('web/assets/img/bg-img/hero-bg.png')}}">
        <div class="hero-shapes">
            <div class="shape top-shape"></div>
            <div class="shape bottom-shape"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content md-pb-20">
                        <h1 class="title tracking-in-expand wow fade-in-bottom" data-wow-delay="300ms"><span class="shape-text">Unlock Your <img class="shape" src="{{ asset('web/assets/img/shapes/hero-text-shape.png')}}" alt="shape"></span> Online <span class="gradient-text">Marketing</span></h1>
                        <p class="wow fade-in-bottom" data-wow-delay="500ms">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                        <a href="about.html" class="pb-primary-btn primary-2 wow fade-in-bottom" data-wow-delay="600ms">Learn More</a>
                        <div class="shapes">
                            <div class="round-shape"><img src="{{ asset ('web/assets/img/shapes/hero-round.png')}}" alt="shape"></div>
                            <div class="star"><img src="{{ asset ('web/assets/img/shapes/hero-star.png')}}" alt="shape"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb text-center">
                        <div class="shapes">
                            <div class="shape hero-shape-1"><img src="{{ asset ('web/assets/img/shapes/hero-shape-1.png')}}" alt="shape"></div>
                            <div class="shape hero-shape-2"><img src="{{ asset ('web/assets/img/shapes/hero-img-shape-1.png')}}" alt="shape"></div>
                            <div class="shape hero-shape-3"><img src="{{ asset ('web/assets/img/shapes/hero-img-shape-2.png')}}" alt="shape"></div>
                        </div>
                        <div class="hero-counter">
                            <img src="{{ asset ('web/assets/img/icon/hero-user.png')}}" alt="icon">
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="5000">0</span>+</h3>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                        <img src="{{ asset('web/assets/img/images/hero-img-1.png')}}" alt="hero">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ hero-section -->

    <section class="service-section pt-120">
        <div class="container">
            <div class="row justify-content-center gy-lg-0 gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item text-center wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="service-icon">
                            <img src="{{ asset ('web/assets/img/icon/service-icon-1.png')}}" alt="service">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Digital Advertising</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item text-center wow fade-in-bottom" data-wow-delay="500ms">
                        <div class="service-icon">
                            <img src="{{ asset ('web/assets/img/icon/service-icon-2.png')}}" alt="service">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Search Engine </a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="service-icon">
                            <img src="{{ asset('web/assets/img/icon/service-icon-3.png')}}" alt="service">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Social Media Management</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ service-section -->

    <div class="sponsor-section pt-180 pb-180">
        <div class="container">
            <div class="sponsor-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <a href="#"><img src="{{ asset ('web/assets/img/sponsor/sponsor-1.png')}}" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <a href="#"><img src="{{ asset ('web/assets/img/sponsor/sponsor-2.png')}}" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <a href="#"><img src="{{ asset ('web/assets/img/sponsor/sponsor-3.png')}}" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <a href="#"><img src="{{ asset ('web/assets/img/sponsor/sponsor-4.png')}}" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <a href="#"><img src="{{ asset ('web/assets/img/sponsor/sponsor-5.png')}}" alt="sponsor"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ sponsor-section -->

    <section class="about-section pb-120">
        <div class="container">
            <div class="row align-items-center gy-lg-0 gy-4">
                <div class="col-lg-6">
                    <div class="about-img wow fade-in-left" data-wow-delay="400ms">
                        <div class="shape" data-background="{{ asset ('web/assets/img/shapes/about-shape.png')}}"></div>
                        <img class="img" src="{{ asset('web/assets/img/images/about-img-1.png')}}" alt="about">
                        <div class="about-counter">
                            <div class="counter-icon">
                                <div class="icon">
                                    <img src="{{ asset('web/assets/img/icon/about-icon.png')}}" alt="icon">
                                </div>
                                <h3 class="title"><span class="odometer" data-count="10">0</span>+</h3>
                            </div>
                            <p>Years Of Experiences</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="shape wow fade-in-right" data-wow-delay="400ms"><img src="{{asset('web/assets/img/shapes/about-shape-2.png')}}" alt="shape"></div>
                        <div class="section-heading heading-2">
                            <h4 class="sub-heading wow fade-in-right" data-wow-delay="300ms">About Us</h4>
                            <h2 class="section-title wow fade-in-right" data-wow-delay="400ms">Dominate the <span>Digital</span> Landscape</h2>
                            <p class="wow fade-in-right" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                        </div>
                        <ul class="about-list wow fade-in-right" data-wow-delay="600ms">
                            <li><i class="fa-regular fa-chevrons-right"></i>International Development Authority</li>
                            <li><i class="fa-regular fa-chevrons-right"></i>Real Authority Method</li>
                            <li><i class="fa-regular fa-chevrons-right"></i>Live Project Done With Practical</li>
                        </ul>
                        <a href="about.html" class="pb-primary-btn wow fade-in-right" data-wow-delay="700ms">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

    <section class="skill-section pb-120">
        <div class="container">
            <div class="row skill-wrap gy-lg-0 gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="skill-content">
                        <div class="section-heading heading-2">
                            <h4 class="sub-heading wow fade-in-left" data-wow-delay="300ms">What We Do</h4>
                            <h2 class="section-title wow fade-in-left" data-wow-delay="400ms">Drive More <span>Traffic</span> Get More Sales</h2>
                            <p class="wow fade-in-left" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                        </div>
                        <div class="skills-items">
                            <div class="skills-item wow fade-in-left" data-wow-delay="600ms">
                                <div class="item-content">
                                    <h4 class="title">International Authority</h4>
                                    <span>$4000</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 80%;">
                                        <span data-background="{{asset('web/assets/img/shapes/skill-shape.png')}}">80%</span>
                                        <div class="dot"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skills-item wow fade-in-left" data-wow-delay="700ms">
                                <div class="item-content">
                                    <h4 class="title">Real Authority Method</h4>
                                    <span>12 Month</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 70%;">
                                        <span data-background="{{asset('web/assets/img/shapes/skill-shape.png')}}">70%</span>
                                        <div class="dot"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-img wow fade-in-right" data-wow-delay="500ms">
                        <img src="{{asset('web/assets/img/images/skill-img-1.png')}}" alt="skill">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ skill-section -->

    <section class="counter-section">
        <div class="bg-color"></div>
        <div class="container">
            <div class="row counter-wrap gy-lg-0 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <img src="{{ asset ('web/assets/img/icon/counter-1.png')}}" alt="icon">
                        </div>
                        <div class="counter-content">
                            <h3 class="title"><span class="odometer" data-count="200">0</span><span class="text">+</span></h3>
                            <p>Team member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <img src="{{ asset ('web/assets/img/icon/counter-2.png')}}" alt="icon">
                        </div>
                        <div class="counter-content">
                            <h3 class="title"><span class="odometer" data-count="30">0</span><span class="text">k+</span></h3>
                            <p>Winning award</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <img src="{{ asset ('web/assets/img/icon/promo-1.png')}}" alt="icon">
                        </div>
                        <div class="counter-content">
                            <h3 class="title"><span class="odometer" data-count="20">0</span><span class="text">+</span></h3>
                            <p>Complete project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <img src="{{ asset ('web/assets/img/icon/counter-4.png')}}" alt="icon">
                        </div>
                        <div class="counter-content">
                            <h3 class="title"><span class="odometer" data-count="300">0</span><span class="text">+</span></h3>
                            <p>Client review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ counter-section -->

    <section class="project-section pt-120 bg-grey">
        <div class="bg-color"></div>
        <div class="shapes">
            <div class="shape shape-1"><img src="{{ asset ('web/assets/img/shapes/project-shape-1.png')}}" alt="project"></div>
            <div class="shape shape-2"><img src="{{ asset ('web/assets/img/shapes/project-shape-2.png')}}" alt="project"></div>
        </div>
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Projects</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Optimizing Brands for Online <span>Success</span></h2>
            </div>
            <div class="project-filter">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-filter-list text-center">
                            <div class="filter-item active" data-filter="*">Search Engine</div>
                            <div class="filter-item" data-filter=".authority ">Real Authority Method</div>
                            <div class="filter-item" data-filter=".content">Content Creation</div>
                        </div>
                    </div>
                </div>
                <div class="row filter-items justify-content-center gy-lg-0 gy-4">
                    <div class="col-lg-4 col-md-6 single-item authority content">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="project-details.html"><img src="{{asset('web/assets/img/project/project-1.jpg')}}" alt="project"></a>
                                <div class="project-content">
                                    <h3 class="title"><a href="project-details.html">Brand design</a></h3>
                                    <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item authority">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="project-details.html"><img src="{{asset('web/assets/img/project/project-2.jpg')}}" alt="project"></a>
                                <div class="project-content">
                                    <h3 class="title"><a href="project-details.html">E-commerce Solutions</a></h3>
                                    <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item content">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="project-details.html"><img src="{{asset('web/assets/img/project/project-3.jpg')}}" alt="project"></a>
                                <div class="project-content">
                                    <h3 class="title"><a href="project-details.html">Mobile Marketing</a></h3>
                                    <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->

    <section class="testimonial-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="testi-info md-pb-40">
                        <div class="section-heading heading-2">
                            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Cients</h4>
                            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Grow Your Business with Strategic <span>SEO</span></h2>
                            <p class="wow fade-in-bottom" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                        </div>
                        <img class="wow fade-in-bottom" data-wow-delay="600ms" src="{{asset('web/assets/img/images/testi-img.png')}}" alt="testi">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testi-items">
                        <div class="testi-item wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="client-thumb">
                                <img src="{{asset('web/assets/img/images/testi-client-1.png')}}" alt="testi">
                            </div>
                            <img class="quote" src="{{asset('web/assets/img/shapes/quote.png')}}" alt="quote">
                            <div class="testi-content">
                                <h3 class="name">Robert Fox <span>Nursing Assistant</span></h3>
                                <ul class="review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <p>Financial planners help people to knowledge in about how to invest and save their moneye the most efficient way in to eve.planners Financial planners help people to my destin knowledge in about how to invest</p>
                            </div>
                        </div>
                        <div class="testi-item wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="client-thumb">
                                <img src="{{asset('web/assets/img/images/testi-client-2.png')}}" alt="testi">
                            </div>
                            <img class="quote" src="{{asset('web/assets/img/shapes/quote.png')}}" alt="quote">
                            <div class="testi-content">
                                <h3 class="name">Leslie Alexander <span>Nursing Assistant</span></h3>
                                <ul class="review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <p>Financial planners help people to knowledge in about how to invest and save their moneye the most efficient way in to eve.planners Financial planners help people to my destin knowledge in about how to invest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->

    <section class="pricing-section pb-120 overflow-hidden">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Pricing</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Harness the Power of Digital <span>Marketing</span></h2>
            </div>
            <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                <div class="shape"><img src="{{asset('web/assets/img/shapes/pricing.png')}}" alt="shape"></div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Yearly</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Monthly</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{asset('web/assets/img/icon/pricing-1.png')}}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Starter Plan</span>
                                        <h3 class="title">$19 <span>/mo</span></h3>
                                        <p>Lorem Ipsum is simply dummy.</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{asset('web/assets/img/icon/pricing-2.png')}}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Platinum Plan</span>
                                        <h3 class="title">$39 <span>/mo</span></h3>
                                        <p>Lorem Ipsum is simply dummy.</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{asset('web/assets/img/icon/pricing-3.png')}}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Gold Plan</span>
                                        <h3 class="title">$69 <span>/mo</span></h3>
                                        <p>Lorem Ipsum is simply dummy.</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{asset('web/assets/img/icon/pricing-1.png')}}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Starter Plan</span>
                                        <h3 class="title">$29 <span>/mo</span></h3>
                                        <p>Lorem Ipsum is simply dummy.</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{asset('web/assets/img/icon/pricing-2.png')}}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Platinum Plan</span>
                                        <h3 class="title">$49 <span>/mo</span></h3>
                                        <p>Lorem Ipsum is simply dummy.</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{asset('web/assets/img/icon/pricing-3.png')}}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Gold Plan</span>
                                        <h3 class="title">$89 <span>/mo</span></h3>
                                        <p>Lorem Ipsum is simply dummy.</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ pricing-section -->

    <section class="request-section bg-grey pt-120">
        <div class="bg-color"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="request-content wow fade-in-left" data-wow-delay="400ms">
                        <div class="shape"><img src="{{asset ('web/assets/img/shapes/request-shape.png')}}" alt="shape"></div>
                        <div class="section-heading heading-2">
                            <h4 class="sub-heading">Contact Us</h4>
                            <h2 class="section-title">Stand Out in the <span>Digital</span> Crowd Presence</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                        </div>
                        <div class="request-form">
                            <form action="https://html.rrdevs.net/optiboom/contact.php" method="post" id="ajax_contact" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="nice-select select-control form-control country" tabindex="0"><span class="current">Sort by popular</span><ul class="list"><li data-value="" class="option selected focus">Sort by popular</li><li data-value="vdt" class="option">Plan One</li><li data-value="can" class="option">Plan Two</li><li data-value="uk" class="option">Plan Three</li></ul></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="submit-btn text-center">
                                    <button id="submit" class="pb-primary-btn" type="submit">Send a messege</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="request-img text-center wow fade-in-right" data-wow-delay="300ms">
                        <img src="{{asset('web/assets/img/images/request-img.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ request-section -->

    <section class="blog-section pt-120 pb-120">
        <div class="container">
            <div class="section-heading heading-2">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our Blogs</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Drive Results with <span>Effective</span> Online Marketing</h2>
            </div>
            <div class="row gy-lg-0 gy-4 justify-content-center">
                <div class="col-md-6">
                    <div class="post-card wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="post-thumb">
                            <img src="{{asset('web/assets/img/blog/post-1.jpg')}}" alt="post">
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li>By admin</li>
                                <li>Comments (05)</li>
                                <li>October 19, 2023</li>
                            </ul>
                            <div class="post-content">
                                <h3 class="title"><a href="blog-details.html">Reach New Heights with Digital the Search Engine Results </a></h3>
                                <p>Medical is a field that deals with the study, diagnosis, and treatment diseases Medical is a field that deals with the </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post-card wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="post-thumb">
                            <img src="{{asset('web/assets/img/blog/post-2.jpg')}}" alt="post">
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li>By admin</li>
                                <li>Comments (05)</li>
                                <li>October 19, 2023</li>
                            </ul>
                            <div class="post-content">
                                <h3 class="title"><a href="blog-details.html">Propel Your Business to Success with SEO Boost Your Online Presence </a></h3>
                                <p>Medical is a field that deals with the study, diagnosis, and treatment diseases Medical is a field that deals with the </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ blog-section -->
@endsection
