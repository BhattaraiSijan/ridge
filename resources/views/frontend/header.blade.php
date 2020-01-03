<!--====================  header area ====================-->
<div class="header-area header-sticky bg-img space__inner--y40 background-repeat--x background-color--dark d-none d-lg-block" data-bg="assets/img/icons/ruler.png">
        <!-- header top -->
        <!-- <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="header-top-info">
                            <span class="header-top-info__image pr-1"><img src="assets/img/icons/phone.png" alt=""></span>
                            <span class="header-top-info__text">01225 265 847</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-center">
                            <span class="header-top-info__image pr-1"><img src="assets/img/icons/clock.png" alt=""></span>
                            <span class="header-top-info__text">9.00 am - 11.00 pm</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-right">
                            <a class="header-top-info__link" href="login-register.html"><span>Login</span></a> / <a class="header-top-info__link" href="login-register.html">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- menu bar -->
        <div class="menu-bar position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-bar-wrapper background-color--default space__inner--x35">
                            <div class="menu-bar-wrapper-inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <div class="brand-logo">
                                            <a href="index.html">
                                                <img src="{{ asset('assets/img/ridge_logo.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="navigation-area d-flex justify-content-end align-items-center">
                                            <!-- navigation menu -->
                                            <nav class="main-nav-menu">
                                                <ul class="d-flex justify-content-end">
                                                    <li><a href="{{ route('home') }}">Home</a></li>
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                    <li><a href="{{ route('service') }}">Service</a></li>
                                                    <li><a href="{{ route('project') }}">Project</a></li>
                                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <!-- search icon nav menu -->
                                            <div class="nav-search-icon">
                                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                                <div class="header-search-form">
                                                    <form action="#">
                                                        <input type="text" placeholder="Type and hit enter">
                                                        <button><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->
    <!--====================  mobile header ====================-->
    <div class="mobile-header header-sticky bg-img space__inner--y30 background-repeat--x background-color--dark d-block d-lg-none" data-bg="assets/img/icons/ruler.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="assets/img/logo-white.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile-menu-trigger-wrapper text-right" id="mobile-menu-trigger">
                        <span class="mobile-menu-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of mobile header  ====================