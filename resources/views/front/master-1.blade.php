<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>

        <title>Palla Credit</title>
        <meta name="description" content="Resonance &mdash; One & Multi Page Creative Template">
        <meta charset="utf-8">
        <meta name="author" content="Designekta Studios">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" type="image/png" sizes="any">
        <link rel="icon" href="images/favicon.svg" type="image/svg+xml">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/style-responsive.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/vertical-rhythm.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/splitting.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/YTPlayer.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/demo-corporate/demo-corporate.css')}}">

    </head>
    <body class="appear-animate">

        <!-- Page Loader -->
        {{-- <div class="page-loader color">
            <div class="loader">Loading...</div>
        </div> --}}
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->

        <!-- Page Wrap -->
        <div class="page" id="top">

            <!-- Navigation Panel -->
            <nav class="main-nav dark transparent light-after-scroll stick-fixed wow-menubar wch-unset">
                <div class="main-nav-sub container">

                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format.
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <div class="nav-logo-wrap position-static local-scroll">
                        <a href="{{url('/')}}" class="logo">
                            <img  src="{{url('/')}}/uploads/Palla-Credit-Logo-new.png" alt="Palla Credit"  height="200" />
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="mobile-nav-icon"></i>
                        <span class="visually-hidden">Menu</span>
                    </div>

                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist local-scroll justify-content-end">
                            <li><a href="{{url('/')}}/#home" class="active">HOME</a></li>
                            <li><a href="{{url('/')}}/#about">ABOUT US</a></li>
                            <li><a href="{{url('/')}}/#services">SERVICES</a></li>
                            <li><a href="{{url('/')}}/#blog">UPDATES</a></li>
                            <li><a href="{{url('/')}}/#contact">CONTACT US</a></li>

                            <li class="desktop-nav-display">
                                <div class="vr mt-2"></div>
                            </li>

                            <li><a href="tel:+18376528800"><i class="mi-mobile size-24 color-primary-1 align-center"></i> +254 (072) 238 8009</a></li>

                            <!-- Social Links -->
                            <li>
                                <a href="#" class="no-hover opacity-1 pe-1"><span class="mn-soc-link mn-soc-link-color" title="Facebook"><i class="fa-facebook-f"></i></span> <span class="mobile-nav-display-i">Facebook</span></a>
                                <a href="#" class="no-hover opacity-1 pe-1"><span class="mn-soc-link mn-soc-link-color" title="LinkedIn"><i class="fa-linkedin-in"></i></span> <span class="mobile-nav-display-i">LinkedIn</span></a>
                                <a href="#" class="no-hover opacity-1"><span class="mn-soc-link mn-soc-link-color" title="Youtube"><i class="fa-youtube"></i></span> <span class="mobile-nav-display-i">Youtube</span></a>
                            </li>
                            <!-- End Social Links  -->
                        </ul>

                    </div>
                    <!-- End Main Menu -->

                </div>
            </nav>
            <!-- End Navigation Panel -->

            @yield('content')

            <!-- Divider -->
            <hr class="mt-0 mb-0"/>
            <!-- End Divider -->

            <!-- Footer -->
            <footer class="footer-2 pb-50">
                <div class="container position-relative">

                    <!-- Back to Top Link -->
                    <div class="local-scroll position-relative z-index-1">
                        <a href="#top" class="link-to-top color position-absolute top-0 end-0 translate-middle-y">
                            <i class="mi-arrow-up size-24"></i>
                            <span class="visually-hidden">Scroll to top</span>
                        </a>
                    </div>
                    <!-- End Back to Top Link -->

                    <div class="page-section">
                        <div class="row">

                            <div class="col-lg-6 mb-md-60">

                                <h2 class="section-title mb-60 mb-sm-40">Ready to get started with Business Loans?</h2>

                                <div class="local-scroll">
                                    <a href="corporate-contact.html" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim">
                                        <span>Get a Consultation</span>
                                    </a>
                                </div>

                            </div>

                            <div class="col-lg-5 offset-lg-1 pt-10">
                                <div class="row">

                                    <div class="col-md-6 mb-sm-40">
                                        <ul class="fw-menu-large clearlist">
                                            <li>
                                                <a href="#">About us</a>
                                            </li>
                                            <li>
                                                <a href="#">Services</a>
                                            </li>
                                            <li>
                                                <a href="#">Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="#">News Updates</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <ul class="fw-menu-large clearlist">
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="#">Copyright Statement</a>
                                            </li>
                                            <li>
                                                <a href="#">Credits</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Footer Text -->
                    <div class="row">

                        <div class="col-md-6 mb-sm-40">
                            © Copyright {{date('Y')}} All Rights Reserved | Powered By Designekta Studios
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-6 footer-2-social-links text-md-end mb-md-40">
                            <a href="#" title="Facebook" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Facebook</span>
                                <i class="fa-facebook-f"></i>
                            </a>
                            <a href="#" title="Instagram" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Instagram</span>
                                <i class="fa-instagram"></i>
                            </a>
                            <a href="#" title="LinkedIn" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">LinkedIn</span>
                                <i class="fa-linkedin"></i>
                            </a>
                            <a href="#" title="Youtube" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Youtube</span>
                                <i class="fa-youtube"></i>
                             </a>
                            {{-- <a href="#" title="Dribbble" rel="noopener nofollow" target="_blank">
                                <span class="visually-hidden">Dribbble</span>
                                <i class="fa-dribbble"></i>
                            </a> --}}
                        </div>
                        <!-- End Social Links -->

                    </div>
                    <!-- End Footer Text -->

                 </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Page Wrap -->

        <!-- JS -->
        <script src="{{asset('theme/js/jquery.min.js')}}"></script>
        <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('theme/js/plugins.js')}}"></script>
        <script src="{{asset('theme/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('theme/js/contact-form.js')}}"></script>
        <script src="{{asset('theme/js/all.js')}}"></script>
        <!-- End JS -->

    </body>
</html>
