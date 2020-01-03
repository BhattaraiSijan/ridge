@extends('frontend.layout')
@section('content')

<!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Project</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="index.html">Home</a></li>
                            <li>Project</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="project-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-item-wrapper space__bottom--m40">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                    <a class="single-project-item p-0" href="project-details.html">
                                        <img src="assets/img/projects/project1-m.jpg" class="img-fluid" alt="">
                                        <span class="single-project-title">Western Shopping Mall</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                    <a class="single-project-item p-0" href="project-details.html">
                                        <img src="assets/img/projects/project2-m.jpg" class="img-fluid" alt="">
                                        <span class="single-project-title">City Flyover</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                    <a class="single-project-item p-0" href="project-details.html">
                                        <img src="assets/img/projects/project3-m.jpg" class="img-fluid" alt="">
                                        <span class="single-project-title">Highway Carpeting</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                    <a class="single-project-item p-0" href="project-details.html">
                                        <img src="assets/img/projects/project4-m.jpg" class="img-fluid" alt="">
                                        <span class="single-project-title">House Infrustructure Making</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                    <a class="single-project-item p-0" href="project-details.html">
                                        <img src="assets/img/projects/project5-m.jpg" class="img-fluid" alt="">
                                        <span class="single-project-title">Wooden House</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                    <a class="single-project-item p-0" href="project-details.html">
                                        <img src="assets/img/projects/project6-m.jpg" class="img-fluid" alt="">
                                        <span class="single-project-title">Bridge Construction</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row space__top--50">
                <div class="col">
                    <ul class="page-pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--====================  brand logo area ====================-->
    <div class="brand-logo-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-wrapper">
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo1.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo2.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo3.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo4.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo5.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-brand-logo">
                            <a href="#"><img src="assets/img/brand-logo/logo4.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo area  ====================-->
    <!--====================  newsletter area ====================-->
    <div class="newsletter-area newsletter-area-bg bg-img" data-bg="assets/img/backgrounds/newsletter-bg.jpg">
        <div class="newsletter-wrapper background-color--default-overlay space__inner--y60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-10 mx-auto">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <!-- newsletter title -->
                                <h3 class="newsletter-title"><span>Newsletter</span> Subscribe now</h3>
                            </div>
                            <div class="col-lg-8">
                                <div class="newsletter-form">
                                    <form id="mc-form" class="mc-form">
                                        <input type="email" placeholder="To get update, enter your email">
                                        <button class="theme-button" type="submit">Subscribe</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of newsletter area  ====================-->

@endsection