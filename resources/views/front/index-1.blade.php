@extends('front.master-1')


@section('content')
<main id="main">
    <!-- Home Section -->
    <section class="home-section light-content parallax-5" id="home">
        <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100 pt-sm-120 pb-sm-120">

            <!-- Background Video -->
            <!-- Please replace the video file in folder "video" with your own file -->
            <div class="bg-video-wrapper">
                <video class="bg-video" preload="auto" autoplay loop muted playsinline>
                    <source src="{{asset('uploads/banner.mp4')}}" type="video/mp4">
                </video>
                <div class="bg-video-overlay bg-dark-alpha-60"></div>
            </div>
            <a href="#" role="button" class="bg-video-button-muted"><i class="mi-volume-off"></i> <span class="visually-hidden">Volume On</span></a>
            <a href="#" role="button" class="bg-video-button-pause"><i class="mi-pause"></i> <span class="visually-hidden">Pause</span></a>
            <!-- End Background Video -->

            <!-- Top Dark Gradient Overlay -->
            <div class="position-absolute top-0 bottom-0 start-0 end-0 bg-gradient-dark-1 opacity-05"></div>
            <!-- End Top Dark Gradient Overlay -->


            <!-- Home Section Content -->
            <div class="home-content">
                <div class="row">

                    <!-- Home Section Text -->
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                        <h1 class="hs-title-9 mb-40 mb-sm-20 wow fadeInUp">
                            Get instant loans for your business today!
                        </h1>

                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <p class="hs-descr mb-50 mb-sm-40 wow fadeInUp" data-wow-delay="0.2s">
                                    We're your reliable provider for business loans to grow and expand your business.
                                </p>
                            </div>
                        </div>

                        <div class="local-scroll wow fadeInUp wch-unset" data-wow-delay="0.4s">
                            <a href="javascript:void(0)" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim" onclick="window.dialog.showModal();">
                                <span>Apply Now</span>
                            </a>
                        </div>


                    </div>
                    <!-- End Home Section Text -->

                </div>
            </div>
            <!-- End Home Section Content -->

            <!-- Scroll Down -->
            <div class="local-scroll scroll-down-wrap wow fadeInUp" data-wow-offset="0">
                <a href="#about" class="scroll-down"><i class="mi-chevron-down"></i><span class="visually-hidden">Scroll to the next section</span></a>
            </div>
            <!-- End Scroll Down -->

        </div>
    </section>
    <!-- End Home Section -->

    <!-- About Section -->
    <section class="page-section" id="about">


        <!-- Decorative Line -->
        <div class="bg-line-1 opacity-025">
            {{-- <img src="{{asset('theme/images/demo-corporate/decoration-2.svg')}}" alt="" class="wow fadeIn" data-wow-delay="4.4s" />- --}}
        </div>
        <!-- End Decorative Line -->

        <div class="container position-relative">

            <div class="row mb-70 mb-sm-50">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">

                    <h2 class="section-title mb-40 mb-xs-30 wow fadeInUp" data-wow-delay="0.4s">Empowering SMEs with The Biashara Loan for Business Growth</h2>

                    <p class="section-descr mb-0 wow fadeInUp" data-wow-delay="0.4s">
                        Palla Credit is a fast-growing non-deposit taking micro-finance institution with branches across major counties in Kenya namely: <strong>Nairobi, Nakuru, Kiambu, Kajiado, Embu and Machakos.</strong>
                    </p>



                </div>
            </div>


            <div class="local-scroll text-center wow fadeInUp" data-wow-delay="0.4s">
                <a href="{{route('about-us')}}" class="btn btn-mod btn-w btn-with-icon btn-circle"><span class="btn-icon color-3"><i class="mi-favorite"></i></span> <span data-btn-animate="y">Read More About Us <i class="mi-arrow-right"></i></span></a>
            </div>

        </div>

    </section>
    <!-- End About Section -->



    <!-- Steps Section -->
    <section class="page-section bg-primary-1 bg-color-alpha-90 bg-scroll light-content" style="background-image: url('{{asset('theme/images/demo-corporate/section-bg-2.jpg')}}')">
        <div class="container position-relative">

            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">

                    <h2 class="section-title mb-70 mb-sm-50 text-center">
                        Get your biashara loan in 3 simple steps
                    </h2>

                    <!-- Steps Grid -->
                    <div class="mb-n20">

                        <!-- Steps Item -->
                        <div class="steps-2-item d-block d-sm-flex mb-20">

                            <div class="steps-2-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M17.492 15.432c-.433 0-.855-.087-1.253-.259l.467-1.082c.25.107.514.162.786.162.222 0 .441-.037.651-.11l.388 1.112c-.334.118-.683.177-1.039.177zm-10.922-.022c-.373 0-.741-.066-1.093-.195l.407-1.105c.221.081.451.122.686.122.26 0 .514-.05.754-.148l.447 1.09c-.382.157-.786.236-1.201.236zm8.67-.783l-1.659-.945.583-1.024 1.66.945-.584 1.024zm-6.455-.02l-.605-1.011 1.639-.981.605 1.011-1.639.981zm3.918-1.408c-.243-.101-.5-.153-.764-.153-.23 0-.457.04-.674.119l-.401-1.108c.346-.125.708-.188 1.075-.188.42 0 .83.082 1.217.244l-.453 1.086zm7.327-.163c-.534 0-.968.433-.968.968 0 .535.434.968.968.968.535 0 .969-.434.969-.968 0-.535-.434-.968-.969-.968zm-16.061 0c-.535 0-.969.433-.969.968 0 .535.434.968.969.968s.969-.434.969-.968c0-.535-.434-.968-.969-.968zm18.031-.832v6.683l-4 2.479v-4.366h-1v4.141l-4-2.885v-3.256h-2v3.255l-4 2.885v-4.14h-1v4.365l-4-2.479v-13.294l4 2.479v3.929h1v-3.927l4-2.886v4.813h2v-4.813l1.577 1.138c-.339-.701-.577-1.518-.577-2.524l.019-.345-2.019-1.456-5.545 4-6.455-4v18l6.455 4 5.545-4 5.545 4 6.455-4v-11.618l-.039.047c-.831.982-1.614 1.918-1.961 3.775zm2-8.403c0-2.099-1.9-3.801-4-3.801s-4 1.702-4 3.801c0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199zm-5.5.199c0-.829.672-1.5 1.5-1.5s1.5.671 1.5 1.5-.672 1.5-1.5 1.5-1.5-.671-1.5-1.5zm-.548 8c-.212-.992-.547-1.724-.952-2.334v2.334h.952z"/>
                                </svg>
                            </div>

                            <div class="steps-2-intro pb-xs-30">
                                <h3 class="steps-2-title">Application</h3>
                                <p class="steps-2-text mb-0">
                                    Complete a straightforward online application form with basic personal and financial details.
                                </p>
                            </div>

                            <div class="steps-2-number">
                                Step 1
                            </div>

                        </div>
                        <!-- End Steps Item -->

                        <!-- Steps Item -->
                        <div class="steps-2-item d-block d-sm-flex mb-20">

                            <div class="steps-2-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M23 0l-4.5 16.5-6.097-5.43 5.852-6.175-7.844 5.421-5.411-1.316 18-9zm-11 12.501v5.499l2.193-3.323-2.193-2.176zm-2.789 3.857l.94.934c-.875.885-1.773 1.933-2.125 3.375l-1.286-.314c.434-1.774 1.491-3.004 2.471-3.995zm-1.565 7.642c-.715 0-1.353-.279-1.887-.83-1.458.515-2.844-.044-3.576-1.084-.575-.817-.703-1.853-.353-2.845-.552-.534-.83-1.166-.83-1.884 0-1.562 1.16-2.803 3.24-2.586l.195 1.117c-.664.062-1.277.097-1.674.494-.668.668-.467 2.063.787 2.433-.832.836-.751 2.037-.127 2.696.654.69 1.903.799 2.765-.059.385 1.305 1.798 1.422 2.433.787.392-.392.431-.995.492-1.649l1.125.229c.2 1.979-1.009 3.181-2.59 3.181zm-3.318-7.032l.314 1.287c1.755-.43 2.953-1.45 3.989-2.471l-.938-.931c-.876.866-1.927 1.764-3.365 2.115z"/>
                                </svg>
                            </div>

                            <div class="steps-2-intro pb-xs-30">
                                <h3 class="steps-2-title">Approval</h3>
                                <p class="steps-2-text mb-0">
                                    Receive rapid approval after submitting your application, usually within a short period.
                                </p>
                            </div>

                            <div class="steps-2-number">
                                Step 2
                            </div>

                        </div>
                        <!-- End Steps Item -->

                        <!-- Steps Item -->
                        <div class="steps-2-item d-block d-sm-flex mb-20">

                            <div class="steps-2-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M21 3c0-1.657-1.343-3-3-3s-3 1.343-3 3c0 1.323.861 2.433 2.05 2.832.168 4.295-2.021 4.764-4.998 5.391-1.709.36-3.642.775-5.052 2.085v-7.492c1.163-.413 2-1.511 2-2.816 0-1.657-1.343-3-3-3s-3 1.343-3 3c0 1.305.837 2.403 2 2.816v12.367c-1.163.414-2 1.512-2 2.817 0 1.657 1.343 3 3 3s3-1.343 3-3c0-1.295-.824-2.388-1.973-2.808.27-3.922 2.57-4.408 5.437-5.012 3.038-.64 6.774-1.442 6.579-7.377 1.141-.425 1.957-1.514 1.957-2.803zm-16.8 0c0-.993.807-1.8 1.8-1.8s1.8.807 1.8 1.8-.807 1.8-1.8 1.8-1.8-.807-1.8-1.8zm3.6 18c0 .993-.807 1.8-1.8 1.8s-1.8-.807-1.8-1.8.807-1.8 1.8-1.8 1.8.807 1.8 1.8zm10.2-16.2c-.993 0-1.8-.807-1.8-1.8s.807-1.8 1.8-1.8 1.8.807 1.8 1.8-.807 1.8-1.8 1.8z"/>
                                </svg>
                            </div>

                            <div class="steps-2-intro pb-xs-30">
                                <h3 class="steps-2-title">Disbursement</h3>
                                <p class="steps-2-text mb-0">
                                    Once approved, the funds are disbursed directly to your designated bank account or mobile wallet, ready for immediate use.
                                </p>
                            </div>

                            <div class="steps-2-number">
                                Step 3
                            </div>

                        </div>
                        <!-- End Steps Item -->

                    </div>
                    <!-- End Steps Grid -->

                </div>
            </div>

        </div>
    </section>
    <!-- End Steps Section -->

         <!-- Services Section -->
         <section class="page-section pb-0" id="services">

            <div class="container position-relative">

                <div class="row mb-70 mb-sm-50">
                    <div class="col-md-8 offset-md-2 text-center">

                        <h2 class="section-title mb-40 mb-xs-30">Our Services</h2>

                        <p class="section-descr mb-0">
                            Unbeatable Rates Tailored to Your Financial Needs: Secure the Best Interest Rates in the Market with Our Customized Financial Solutions
                        </p>

                    </div>
                </div>

            </div>

            <div class="container position-relative">
                <!-- Services Grid -->
                <div class="row g-0 mb-70 mb-sm-50">


                    {{--  --}}
                    <!-- Portfolio Grid -->
                    <div class="row mt-n50 mt-sm-n40 mb-70 mb-sm-50">

                        <!-- Portfolio Item -->
                        <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                            <a href="#" class="portfolio-5-link">

                                <div class="portfolio-5-image">
                                    <div class="portfolio-5-image-bg wow scalexIn"></div>
                                    <div class="wow fadeIn" data-wow-delay="1s">
                                        <img class="service-images-resize" src="{{url('/')}}/uploads/facebook/1.jpg" alt="#" />
                                    </div>
                                </div>

                                <h3 class="portfolio-5-title text-center">
                                    <span>Merchant Cash Advances</span>
                                </h3>
                            </a>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Portfolio Item -->
                        <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                            <a href="#" class="portfolio-5-link">

                                <div class="portfolio-5-image">
                                    <div class="portfolio-5-image-bg wow scalexIn"></div>
                                    <div class="wow fadeIn" data-wow-delay="1s">
                                        <img class="service-images-resize" src="{{url('/')}}/uploads/shutterstock/steptodown.com989010.jpg" alt="Image Description" />

                                    </div>
                                </div>
                                <h3 class="portfolio-5-title text-center">
                                    <span>Equipment Financing</span>
                                </h3>
                            </a>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Portfolio Item -->
                        <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                            <a href="#" class="portfolio-5-link">

                                <div class="portfolio-5-image">
                                    <div class="portfolio-5-image-bg wow scalexIn"></div>
                                    <div class="wow fadeIn" data-wow-delay="1s">
                                        <img class="service-images-resize" src="{{url('/')}}/uploads/shutterstock/steptodown.com982368.jpg" alt="Image Description" />
                                    </div>
                                </div>

                                <h3 class="portfolio-5-title text-center">
                                    <span>Inventory Financing</span>
                                </h3>
                            </a>
                        </div>
                        <!-- End Portfolio Item -->

                         <!-- Portfolio Item -->
                         <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                            <a href="#" class="portfolio-5-link">

                                <div class="portfolio-5-image">
                                    <div class="portfolio-5-image-bg wow scalexIn"></div>
                                    <div class="wow fadeIn" data-wow-delay="1s">
                                        <img class="service-images-resize" src="{{url('/')}}/uploads/shutterstock/steptodown.com433291.jpg" alt="Image Description" />
                                    </div>
                                </div>

                                <h3 class="portfolio-5-title text-center">
                                    <span>Minimart Stock Financing</span>
                                </h3>
                            </a>
                        </div>
                        <!-- End Portfolio Item -->

                         <!-- Portfolio Item -->
                        <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                            <a href="#" class="portfolio-5-link">

                                <div class="portfolio-5-image">
                                    <div class="portfolio-5-image-bg wow scalexIn"></div>
                                    <div class="wow fadeIn" data-wow-delay="1s">
                                        <img class="service-images-resize" src="{{url('/')}}/uploads/facebook/5.jpg" alt="Image Description" />

                                    </div>
                                </div>

                                <h3 class="portfolio-5-title text-center">
                                    <span>Equipment Purchase Financing</span>
                                </h3>
                            </a>
                        </div>
                        <!-- End Portfolio Item -->


                         <!-- Portfolio Item -->
                         <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                            <a href="#" class="portfolio-5-link">

                                <div class="portfolio-5-image">
                                    <div class="portfolio-5-image-bg wow scalexIn"></div>
                                    <div class="wow fadeIn" data-wow-delay="1s">
                                        <img class="service-images-resize" src="{{url('/')}}/uploads/facebook/6.jpg" alt="Image Description" />
                                    </div>
                                </div>

                                <h3 class="portfolio-5-title text-center">
                                    <span>Agri-Business Financing</span>
                                </h3>
                            </a>
                        </div>
                        <!-- End Portfolio Item -->



                    </div>
                    <!-- End Portfolio Grid -->
                    {{--  --}}

                </div>
                <!-- End Services Grid -->
            </div>


        </section>
        <!-- End Services Section -->

               <!-- Portfolio Section -->
               <section class="page-section bg-light-alpha-90" id="portfolio">
                    <div class="container position-relative">

                        <div class="row mb-70 mb-sm-50">

                            <div class="col-lg-12 col-xl-10 mb-md-40">

                                <h2 class="section-title mb-40 mb-xs-30">About Us</h2>

                                <p class="section-descr mb-0">
                                    <strong>Mission Statement:</strong> Our mission goes beyond providing loans; we are dedicated to fostering growth, supporting entrepreneurship, and transforming communities. Our impact can be seen in the thriving businesses and the vibrant communities we serve
                                </p>

                            </div>

                            <div class="col-lg-2 offset-xl-1 d-flex align-items-end pb-10">

                                <!-- Features List -->
                                <div class="row mt-n10">



                                </div>
                                <!-- End Features List -->

                            </div>

                        </div>

                        <!-- Portfolio Grid -->
                        {{-- <div class="row mt-n50 mt-sm-n40 mb-70 mb-sm-50">

                            <!-- Portfolio Item -->
                            <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                                <a href="#" class="portfolio-5-link">

                                    <div class="portfolio-5-image">
                                        <div class="portfolio-5-image-bg wow scalexIn"></div>
                                        <div class="wow fadeIn" data-wow-delay="1s">
                                            <img src="{{url('/')}}/uploads/facebook/Hassle_Free_Loans.png" alt="#" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Portfolio Item -->

                            <!-- Portfolio Item -->
                            <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                                <a href="#" class="portfolio-5-link">

                                    <div class="portfolio-5-image">
                                        <div class="portfolio-5-image-bg wow scalexIn"></div>
                                        <div class="wow fadeIn" data-wow-delay="1s">
                                            <img src="{{url('/')}}/uploads/facebook/Palla_Credit_Loans.png" alt="Image Description" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Portfolio Item -->

                            <!-- Portfolio Item -->
                            <div class="col-md-6 col-lg-4 mt-50 mt-sm-40">
                                <a href="#" class="portfolio-5-link">

                                    <div class="portfolio-5-image">
                                        <div class="portfolio-5-image-bg wow scalexIn"></div>
                                        <div class="wow fadeIn" data-wow-delay="1s">
                                            <img src="{{url('/')}}/uploads/facebook/Worry_No_More.png" alt="Image Description" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Portfolio Item -->

                        </div> --}}
                        <!-- End Portfolio Grid -->

                       @include('front.reach')

                    </div>

                </section>
            <!-- End Portfolio Section -->


        <!-- Numbers Section -->
        <section class="page-section bg-light-alpha-90 bg-scroll" style="background-image: url('{{url('/')}}/uploads/Picture1.jpg')">
            <div class="container position-relative">

                <!-- Numbers Grid -->
                <div class="row mt-n30 wow fadeInUp">

                    <!-- Numbers Item -->
                    <div class="col-sm-6 col-xl-3 d-flex align-items-stretch mt-30">
                        <div class="number-2-item">
                            <div class="number-2-title">
                                122+
                            </div>
                            <div class="number-2-descr">
                                Branches in Kenya
                            </div>
                        </div>
                    </div>
                    <!-- End Numbers Item -->

                    <!-- Numbers Item -->
                    <div class="col-sm-6 col-xl-3 d-flex align-items-stretch mt-30">
                        <div class="number-2-item">
                            <div class="number-2-title">
                                865,000
                            </div>
                            <div class="number-2-descr">
                                Total Loans Disbursed
                            </div>
                        </div>
                    </div>
                    <!-- End Numbers Item -->

                    <!-- Numbers Item -->
                    <div class="col-sm-6 col-xl-3 d-flex align-items-stretch mt-30">
                        <div class="number-2-item">
                            <div class="number-2-title">
                                750,000
                            </div>
                            <div class="number-2-descr">
                                Total Repeat Loans
                            </div>
                        </div>
                    </div>
                    <!-- End Numbers Item -->

                    <!-- Numbers Item -->
                    <div class="col-sm-6 col-xl-3 d-flex align-items-stretch mt-30">
                        <div class="number-2-item">
                            <div class="number-2-title">
                                115,000
                            </div>
                            <div class="number-2-descr">
                                New Client Loans
                            </div>
                        </div>
                    </div>
                    <!-- End Numbers Item -->

                </div>
                <!-- End Numbers Grid -->

            </div>
        </section>
        <!-- End Numbers Section -->


          <!-- Call to Action Section -->
          <section class="page-section bg-scroll light-content" style="background-image: url('{{url('/')}}/uploads/facebook/6.jpg'); background-position: 20% 70% !important; padding-bottom:30px; padding-top:30px">

            <!-- Desktop Overlay -->
            <div class="bg-overlay bg-gradient-primary-alpha-1 d-none d-md-block"></div>
            <!-- End Desktop Overlay -->

            <!-- Mobile Overlay -->
            <div class="bg-overlay bg-primary-1 opacity-09 d-md-none"></div>
            <!-- End Mobile Overlay -->

            <div class="container position-relative">

                <div class="row">
                    <div class="col-md-7 col-lg-7 col-xl-7">

                        <h2 class="section-title mb-40 mb-xs-30">Vision for the  <span class="mark-decoration-5">Future</span> </h2>

                        <p class="section-descr mb-50 mb-sm-40">
                            Our mission doesn’t stop here. As we continue to support small businesses across Kenya, our commitment to empowering entrepreneurs remains stronger than ever. Over the next five years, our goal is to provide 10,000 more small businesses with the capital they need to grow and thrive. By driving economic growth and fostering innovation, we’re building a brighter future for our communities.
                            <br><br>
                            Be a part of this exciting journey! Whether you're a small business owner looking to expand, a partner eager to collaborate, or someone who believes in the power of entrepreneurship, there’s a role for you in our story. Join us in empowering the next generation of Kenyan entrepreneurs. Learn how you can get involved today.
                        </p>

                        <div class="local-scroll mb-70 mb-sm-50">
                            <a href="#" class="btn btn-mod btn-w-c btn-large btn-round btn-hover-anim opacity-09"><span>Get Involved</span></a>
                        </div>

                    </div>
                </div>

                <!-- Logotypes & Brands, Use M-PESA, KCB and More -->
                {{-- <div class="row">
                    <div class="col-md-6">

                        <h2 class="section-title-tiny opacity-09 mb-30">Trusted by leading companies</h2>

                        <div class="logo-grid">
                            <img class="logo-grid-img" src="images/clients-logos/logo-grid-dark/logo-1.png" width="110" height="33" alt="Image description is here" />
                            <img class="logo-grid-img" src="images/clients-logos/logo-grid-dark/logo-2.png" width="119" height="33" alt="Image description is here" />
                            <img class="logo-grid-img" src="images/clients-logos/logo-grid-dark/logo-3.png" width="79" height="33" alt="Image description is here" />
                            <img class="logo-grid-img" src="images/clients-logos/logo-grid-dark/logo-4.png" width="122" height="33" alt="Image description is here" />
                        </div>

                    </div>
                </div> --}}
                <!-- End Logotypes -->

            </div>
        </section>
        <!-- End Call to Action Section -->

    <!-- Testimonials Section -->
    <section class="page-section" id="clients-stories">
        <div class="container position-relative">

            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <h2 class="section-title mb-70 mb-sm-50 text-center">Clients Stories</h2>
                </div>
            </div>

            <!-- Testimonial -->
            <div class="row mb-80 mb-sm-60">

                <div class="col-md-5 col-lg-4 offset-lg-1 mb-sm-40">
                    <div class="overflow-hidden round">
                        <img src="{{asset('uploads/testimonials/business-loan-in-kenya.jpg')}}" alt="Image Description" class="wow scaleOutIn" style="min-height:400px; object-fit: cover" />
                    </div>
                </div>

                <div class="col-md-6 offset-md-1 col-lg-5 offset-lg-1 d-flex align-items-center wow fadeInUp">
                    <blockquote class="testimonials-6-item">

                        <div class="testimonials-6-icon" aria-hidden="true">“</div>

                        <p class="testimonials-6-text mb-40">
                            Getting a loan from Palla Credit was incredibly easy and fast. Their process is seamless, with no hidden fees or complicated requirements. I applied online, got approved within hours, and the funds were in my account the next day.
                        </p>

                        <div class="section-line mb-10"></div>

                        <footer>
                            <div class="testimonials-6-author">
                                Gerishom Kadiri
                            </div>
                            <div class="testimonials-6-position">
                                Stock Acquisition Loan
                            </div>
                        </footer>

                    </blockquote>
                </div>

            </div>
            <!-- End Testimonial -->

            <!-- Testimonial -->
            <div class="row">

                <div class="col-md-5 offset-md-1 col-lg-4 offset-lg-1 order-md-last mb-sm-40">
                    <div class="overflow-hidden round">
                        <img src="{{asset('uploads/testimonials/business-loans-kenyas.jpg')}}" alt="Image Description" class="wow scaleOutIn" style="min-height:400px; object-fit: cover" />
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 d-flex align-items-center wow fadeInUp">
                    <blockquote class="testimonials-6-item">

                        <div class="testimonials-6-icon" aria-hidden="true">“</div>

                        <p class="testimonials-6-text mb-40">
                            Palla Credit's no-hassle application, quick approval, and transparent terms were a game-changer. Their competitive rates and flexible repayment plans provided the financial support I needed for business expansion and unexpected expenses
                        </p>

                        <div class="section-line mb-10"></div>

                        <footer>
                            <div class="testimonials-6-author">
                                Dan Faith
                            </div>
                            <div class="testimonials-6-position">
                                Business Expansion Loan
                            </div>
                        </footer>

                    </blockquote>
                </div>

            </div>
            <!-- End Testimonial -->

              <!-- Testimonial -->
              <div class="row mb-80 mt-80 mb-sm-60">

                <div class="col-md-5 col-lg-4 offset-lg-1 mb-sm-40">
                    <div class="overflow-hidden round">
                        <img src="{{asset('uploads/testimonials/women-loan-in-nairobi.jpg')}}" alt="Image Description" class="wow scaleOutIn" style="min-height:400px; object-fit: cover" />
                    </div>
                </div>

                <div class="col-md-6 offset-md-1 col-lg-5 offset-lg-1 d-flex align-items-center wow fadeInUp">
                    <blockquote class="testimonials-6-item">

                        <div class="testimonials-6-icon" aria-hidden="true">“</div>

                        <p class="testimonials-6-text mb-40">
                            Getting a loan from Palla Credit was incredibly easy and fast. Their process is seamless, with no hidden fees or complicated requirements. I applied online, got approved within hours, and the funds were in my account the next day.
                        </p>

                        <div class="section-line mb-10"></div>

                        <footer>
                            <div class="testimonials-6-author">
                                Gerishom Kadiri
                            </div>
                            <div class="testimonials-6-position">
                                Women Loan Nairobi
                            </div>
                        </footer>

                    </blockquote>
                </div>

            </div>
            <!-- End Testimonial -->

            <div class="local-scroll text-center wow fadeInUp" data-wow-delay="0.4s">
                <a href="{{route('about-us')}}" class="btn btn-mod btn-w btn-with-icon btn-circle"><span class="btn-icon color-3"><i class="mi-favorite"></i></span> <span data-btn-animate="y">Read More Stories <i class="mi-arrow-right"></i></span></a>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->


    <!-- Call to Action Section -->
    <section class="page-section bg-scroll light-content" style="background-image: url('{{asset('uploads/pexels-nappy-935979.jpg')}}'); padding-top:30px; padding-bottom:30px">

        <!-- Desktop Overlay -->
        <div class="bg-overlay bg-gradient-primary-alpha-2 d-none d-md-block"></div>
        <!-- End Desktop Overlay -->

        <!-- Mobile Overlay -->
        <div class="bg-overlay bg-primary-1 opacity-09 d-md-none"></div>
        <!-- End Mobile Overlay -->

        <div class="container position-relative">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-8" style="margin:0 auto; text-align:center">

                    <h2 class="section-title mb-40 mb-xs-30" style="color:#88B437; font-weight:900 ">Smart <span class="mark-decoration-5">Financing</span> Business Solutions</h2>

                    <p class="section-descr mb-50 mb-sm-40">
                        We understand that financial needs can arise unexpectedly. That's why we offer hassle-free instant loans designed to meet your urgent requirements, whether you're expanding your business, dealing with unforeseen expenses, or facing emergencies
                    </p>

                    <div class="local-scroll mb-70 mb-sm-50">
                        <a href="https://wa.me/+254793070020?text=Hello, I am texting from your website" class="btn btn-mod btn-w-c btn-large btn-round btn-hover-anim opacity-09" style="background-color: #88B437">
                            <span> <i class="fa-viber"></i> Whatsapp us now! </span>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->


    <!-- Blog Section -->
    <section class="page-section" id="blog">
        <div class="container position-relative">

            <div class="row">

                <div class="col-lg-5 col-xl-4 mb-md-70 mb-sm-50">

                    <h2 class="section-title mb-40 mb-xs-30">Our Blog</h2>

                    <p class="section-descr mb-50 mb-sm-40">
                        Explore the top marketing resources and the latest news about our company.
                    </p>

                    <div class="local-scroll">
                        <a href="{{url('/news-and-updates')}}" class="btn btn-mod btn-w btn-with-icon btn-circle"><span class="btn-icon color-3"><i class="mi-link-alt"></i></span> <span data-btn-animate="y">Read All Articles <i class="mi-arrow-right"></i></span></a>
                    </div>

                </div>

                <div class="col-lg-7 col-xl-8">
                    <div class="row mt-n50">
                        <?php
                           $Blog = DB::table('blogs')->orderBy('id','DESC')->limit('2')->get();
                        ?>
                        @foreach ($Blog as $blog)
                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-6 mt-50 wow fadeInLeft">

                            <div class="post-prev-2-img">
                                <a href="{{url('/')}}/news-updates/{{$blog->slung}}"><img src="{{$blog->image_one}}" alt="{{$blog->title}}" /></a>
                            </div>

                            <h3 class="post-prev-2-title">
                                <a href="{{url('/')}}/news-updates/{{$blog->slung}}">{{$blog->title}}</a>
                            </h3>

                            <p class="post-prev-2-text">
                                {{$blog->meta}}
                            </p>

                            <div class="post-prev-2-tags">
                                <span class="post-prev-2-tag">{{date('M d, Y', strtotime($blog->created_at))}}</span>
                                <span class="post-prev-2-tag"><i class="mi-circle color-primary-1"></i> News Updates</span>
                            </div>

                        </div>
                        <!-- End Blog Post Item -->
                        @endforeach



                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Blog Section -->



  <!-- Divider -->
  <hr class="mt-0 mb-0"/>
  <!-- End Divider -->

    <!-- Contact Section -->
    <section class="page-section" id="contact">

        <!-- Decorative Line -->
        <div class="bg-line-3 opacity-025 mb-n90 mb-lg-n70 mb-md-n60 mb-sm-n40">
            <img src="{{asset('theme/images/demo-corporate/decoration-4.svg')}}" alt="" />
        </div>
        <!-- End Decorative Line -->

        <div class="container position-relative">

            <div class="row mb-80 mb-sm-60">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">

                    <h2 class="section-title mb-40 mb-xs-30">Let’s have a conversation</h2>

                    <p class="section-descr mb-0">
                        We’re open to talking to good people. Just say hello, and we’ll start productive cooperation. Start your own success story.
                    </p>

                </div>
            </div>

            <div class="row wow fadeInUp">

                <!-- Left Column -->
                <div class="col-lg-5 mb-md-50 mb-sm-30 d-flex align-items-strech">
                    <div class="bg-color-primary-1 bg-color-alpha-90 bg-image bg-scroll light-content w-100 round overflow-hidden px-4 px-sm-5 py-5" style="background-image: url(images/demo-corporate/section-bg-4.jpg)">

                        <!-- Address -->
                        <div class="contact-item mb-40 mb-sm-20">
                            <div class="ci-icon">
                                <i class="mi-location"></i>
                            </div>
                            <h4 class="ci-title">
                                Address
                            </h4>
                            <div class="ci-text large">
                              Kilos Building RM 3, next to Total Petrol Station Kangemi
                            </div>
                            <div class="ci-link">
                                <a href="https://maps.app.goo.gl/hsHGevZZBQM8bwfL8" rel="nofollow noopener" target="_blank">See Map</a>
                            </div>
                        </div>
                        <!-- End Address -->

                        <hr class="mt-0 mb-40 mb-sm-20 opacity-02"/>

                        <!-- Email -->
                        <div class="contact-item mb-40 mb-sm-20">
                            <div class="ci-icon">
                                <i class="mi-email"></i>
                            </div>
                            <h4 class="ci-title">
                                Email
                            </h4>
                            <div class="ci-text large">
                                info@pallacredit.co.ke
                            </div>
                            <div class="ci-link">
                                <a href="mailto:info@pallacredit.co.ke">Say Hello</a>
                            </div>
                        </div>
                        <!-- End Email -->

                        <hr class="mt-0 mb-40 mb-sm-20 opacity-02"/>

                        <!-- Phone -->
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="mi-mobile"></i>
                            </div>
                            <h4 class="ci-title">
                                Phone
                            </h4>
                            <div class="ci-text large">
                                +254722388009/+254705100090
                            </div>
                            <div class="ci-link">
                                <a href="tel:+61383767284">Call now</a>
                            </div>
                        </div>
                        <!-- End Phone -->

                    </div>
                </div>
                <!-- End Left Column -->

                <!-- Right Column -->
                <div class="col-lg-7 d-flex align-items-strech">
                    <div class="border-color-primary-1 round w-100 px-4 px-sm-5 py-5">

                        <h3 class="section-title-small mt-n10 mb-40 mb-sm-30">We'd love to hear from you</h3>

                        <!-- Contact Form -->
                        <form class="form contact-form" id="contact_form">

                            <div class="row">
                                <div class="col-md-6">

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="Enter your name" pattern=".{3,100}" required aria-required="true">
                                    </div>
                                    <!-- End Name -->

                                </div>

                                <div class="col-md-6">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="Enter your email" pattern=".{5,100}" required aria-required="true">
                                    </div>
                                    <!-- End Email -->

                                </div>
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="input-lg round form-control" style="height: 132px;" placeholder="Enter your message"></textarea>
                            </div>

                            <div class="row">

                                <div class="col-md-6 col-xl-7 d-flex align-items-center">

                                    <!-- Inform Tip -->
                                    <div class="form-tip w-100 pt-3">
                                        <i class="icon-info size-16"></i>
                                        All the fields are required. By sending the form you agree to the <a target="new" href="{{url('/')}}/terms-and-conditions">Terms & Conditions</a> and <a target="new" href="{{url('/')}}/privacy-policy">Privacy Policy</a>.
                                    </div>
                                    <!-- End Inform Tip -->

                                </div>

                                <div class="col-md-6 col-xl-5 mt-sm-20">

                                    <!-- Send Button -->
                                    <div class="pt-3 text-md-end">
                                        <button type="submit" class="submit_btn btn btn-mod btn-color btn-large btn-round btn-hover-anim" id="submit_btn" aria-controls="result">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                    <!-- End Send Button -->

                                </div>

                            </div>

                           <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                        </form>
                        <!-- End Contact Form -->

                    </div>
                </div>
                <!-- End Right Column -->

            </div>

        </div>

    </section>
    <!-- End Contact Section -->

</main>
@endsection
