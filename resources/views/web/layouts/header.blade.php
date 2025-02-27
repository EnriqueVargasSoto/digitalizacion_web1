<header class="header sticky-active">
    <div class="primary-header">
        <div class="container">
            <div class="primary-header-inner">
                <div class="header-logo d-lg-block">
                    <a href="i{{route('/')}}">
                        <img src="{{ asset('web/assets/img/logo/logo-dark.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="header-menu-wrap">
                    <div class="mobile-menu-items">
                        <ul>
                            <li class="menu-item-has-children active">
                                <a href="index-2.html">Home</a>
                                <ul>
                                    <li><a href="index-2.html">Home One</a></li>
                                    <li><a href="index-3.html">Home Two</a></li>
                                    <li><a href="index-4.html">Home Three</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('about-us')}}">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Service</a>
                                <ul>
                                    <li><a href="service.html">service</a></li>
                                    <li><a href="service-details.html">service-details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Projects</a>
                                <ul>
                                    <li><a href="project.html">Project</a></li>
                                    <li><a href="project-details.html">Project-details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="blog-grid.html">Blog</a>
                                <ul>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="error.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.header-menu-wrap -->
                <div class="header-right">
                    <div class="search-icon dl-search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <a href="contact.html" class="pb-primary-btn header-btn">Get Started</a>
                    <div class="header-right-item">
                        <a href="javascript:void(0)" class="mobile-side-menu-toggle d-lg-none"
                            ><i class="fa-sharp fa-solid fa-bars"></i
                        ></a>
                    </div>
                </div>
                <!-- /.header-right -->
            </div>
            <!-- /.primary-header-inner -->
        </div>
    </div>
    <!-- /.primary-header -->
</header>
