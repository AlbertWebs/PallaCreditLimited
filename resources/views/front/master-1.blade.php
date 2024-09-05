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
        <link rel="stylesheet" href="{{asset('theme/css/pops.css')}}">

        @include('front.favicon')

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
                        <ul class="clearlist scroll-nav local-scroll justify-content-end">
                            <li><a href="{{url('/')}}/#home">HOME</a></li>
                            <li><a href="{{url('/')}}/#about">ABOUT US</a></li>
                            <li><a href="{{url('/')}}/#services">SERVICES</a></li>
                            <li><a href="{{url('/')}}/#impact">IMPACT</a></li>
                            <li><a href="{{url('/')}}/#blog">EDUCATE YOURSELF</a></li>
                            <li><a href="{{url('/')}}/careers">CAREER</a></li>
                            <li><a href="{{url('/')}}/#contact">CONTACT US</a></li>
                            <li class="desktop-nav-display">
                                <div class="vr mt-2"></div>
                            </li>
                            <li><a href="tel:+254793070020" style="font-size: 16px"><i class="mi-mobile size-24 color-primary-1 align-center"></i> +254 (079) 307 0020</a></li>
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

        {{-- <button class="primary" onclick="window.dialog.showModal();">Open Dialog</button> --}}

        <dialog id="dialog">
             <!-- Contact Form -->
             <h3 class="section-title-small mt-n10 mb-40 mb-sm-30 text-center">Application Form</h3>
             <form class="form contact-form" id="contact_forms" action="{{route('send-application')}}">
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Full Name" pattern=".{3,100}" required aria-required="true">
                            </div>
                            <!-- End Name -->

                        </div>

                        <div class="col-md-6">

                            <!-- Email -->
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="input-md round form-control" placeholder="Mobile"  required aria-required="true">
                            </div>
                            <!-- End Email -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="county" id="county" class="input-md round form-control" placeholder="County" required aria-required="true">
                            </div>
                            <!-- End Name -->
                        </div>

                        <div class="col-md-6">
                            <!-- Email -->
                            <div class="form-group">
                                <input type="text" name="sub" id="sub" class="input-md round form-control" placeholder="Sub County" required aria-required="true">
                            </div>
                            <!-- End Email -->
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!-- Message -->
                        <div class="form-group">
                            <textarea name="message" id="message" class="input-md round form-control" style="height: 132px;" placeholder="Enter your message"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                         <!-- Inform Tip -->
                         <div class="form-tip w-100 pt-3">
                            <i class="icon-info size-16"></i>
                            All the fields are required. By sending the form you agree to the <a href="{{url('/')}}/terms-and-conditions">Terms & Conditions</a> and <a href="{{url('/')}}/privacy-policy">Privacy Policy</a>.
                        </div>
                        <!-- End Inform Tip -->
                    </div>

                    <div class="col-md-12 col-xl-5 mt-sm-20" style="margin:0 auto">

                        <!-- Send Button -->
                        <div class="pt-3 text-md-end">
                            <button type="submit" class="submit_btn btn btn-mod btn-color btn-medium btn-round btn-hover-anim" id="submit_btn" aria-controls="result">
                                <span>Send Message <img class="d-none spinner-img" style="width:20px; height:20px" src="{{url('/')}}/uploads/loading.gif"></span>
                            </button>
                        </div>
                        <!-- End Send Button -->

                    </div>
                </div>
               <div id="results" role="region" aria-live="polite" aria-atomic="true"></div>

            </form>
            <!-- End Contact Form -->
            <button onclick="window.dialog.close();" aria-label="close" class="x">❌</button>
        </dialog>

        {{-- contact_form --}}

        {{-- contact_form --}}

        <!-- JS -->
        <script src="{{asset('theme/js/jquery.min.js')}}"></script>
        <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('theme/js/plugins.js')}}"></script>
        <script src="{{asset('theme/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('theme/js/contact-form.js')}}"></script>
        <script src="{{asset('theme/js/all.js')}}"></script>
        <!-- End JS -->
        <script>
        $(document).ready(function() {
            $("#contact_forms").on('submit', (function(e) {
                e.preventDefault();
                $(".spinner-img").css("display", "block");
                $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    $(".spinner-img").css("display", "none");
                    $("#results").html("<strong>Application registered successfully!</strong>");
                    $("#contact_forms").trigger("reset"); // to reset form input fields
                    setTimeout(function() {
                        $(".x").click();
                    }, 4000);

                    // Close button
                },
                error: function(e) {
                    console.log(e);
                }
                });
            }));
        });
        </script>

        <script>
            function formatHeading(headingText, duration) {
                    return `${Math.floor(duration).toLocaleString('en-US')} ${headingText}`;
            };

            var counted = 0;
            $(window).scroll(function() {

            var oTop = $('#counter-stats').offset().top - window.innerHeight;
            if (counted == 0 && $(window).scrollTop() > oTop) {
                $('.count').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                    },

                    {

                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(addComma(Math.floor(this.countNum)));
                    },
                    complete: function() {
                        $this.text(addComma(this.countNum));
                    }

                    });
                });
                counted = 10;
            }

            });
        </script>

        <script>
            function addComma(x){
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        </script>

    </body>
</html>
