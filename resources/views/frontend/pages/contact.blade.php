@extends('frontend.layout')
@section('content')

<!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Contact</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  contact area ====================-->
    <div class="conact-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col space__bottom--40">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.22268960882!2d-118.69511008446011!3d34.0381583259191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e81fcf6add4e6b%3A0x2e40b4a05c4cc7a0!2sThe%20Business%20Agency!5e0!3m2!1sen!2sbd!4v1571570206192!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="contact-information">
                        <h4 class="space__bottom--30">Contact Information</h4>
                        <ul>
                            <li>
                                <span class="icon"><i class="fa fa-map-marker"></i></span>
                                <span class="text"><span>Stock Building, 125 Main Street 1st Lane, San Francisco, USA</span></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-phone"></i></span>
                                <span class="text"><a href="#">(001) 24568 365 987)</a><a href="#">(001) 65897 569 784)</a></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-envelope-open"></i></span>
                                <span class="text"><a href="#">info@example.com</a><a href="#">www.example.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="contact-form">
                        <h4 class="space__bottom--30">Leave Your Message</h4>
                        <form id="contact-form" action="assets/php/mail.php" method="post">
                            <div class="row row-10">
                                <div class="col-md-6 col-12 space__bottom--20"><input name="con_name" type="text" placeholder="Your Name"></div>
                                <div class="col-md-6 col-12 space__bottom--20"><input name="con_email" type="email" placeholder="Your Email"></div>
                                <div class="col-12"><textarea name="con_message" placeholder="Your Message"></textarea></div>
                                <div class="col-12"><button>Send Message</button></div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of contact area  ====================-->
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