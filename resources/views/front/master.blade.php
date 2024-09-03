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
            <nav class="main-nav transparent sticky wow-menubar wch-unset">
                <div class="main-nav-sub container">

                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format.
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <div class="nav-logo-wrap position-static local-scroll">
                        <a href="{{url('/')}}" class="logo">
                            <img class="wow fadeInRight" data-wow-delay="2s" src="{{url('/')}}/uploads/Palla-Credit-Logo-new.png" alt="Palla Credit"  height="200" />
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
                            <li><a href="#home">HOME</a></li>
                            <li><a href="#about">ABOUT US</a></li>
                            <li><a href="#services">SERVICES</a></li>
                            <li><a href="#impact">IMPACT</a></li>
                            <li><a href="#services">EDUCATE YOURSELF</a></li>
                            <li><a href="{{url('/')}}/careers">CAREER</a></li>
                            <li><a href="#contact">CONTACT US</a></li>
                            <li class="desktop-nav-display">
                                <div class="vr mt-2"></div>
                            </li>

                            <li><a href="tel:+254 793 070 020 "><i class="mi-mobile size-24 color-primary-1 align-center"></i> +254 (079) 307 0020</a></li>

                            <!-- Social Links -->
                            <li>
                                <a href="https://web.facebook.com/pallacredit" class="no-hover opacity-1 pe-1"><span class="mn-soc-link mn-soc-link-color" title="Facebook"><i class="fa-facebook-f"></i></span> <span class="mobile-nav-display-i">Facebook</span></a>
                                <a href="https://www.linkedin.com/company/palla-credit-limited/" class="no-hover opacity-1 pe-1"><span class="mn-soc-link mn-soc-link-color" title="LinkedIn"><i class="fa-linkedin-in"></i></span> <span class="mobile-nav-display-i">LinkedIn</span></a>
                                <a href="https://wa.me/+254793070020?text=Hello, I am texting from your website" class="no-hover opacity-1"><span class="mn-soc-link mn-soc-link-color" title="WhatsApp"><i class="fa-whatsapp"></i></span> <span class="mobile-nav-display-i">WhatsApp</span></a>
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
            @include('front.footer')
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
