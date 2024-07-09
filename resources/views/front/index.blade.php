@extends('front.master')


@section('content')

<main id="main">

    <!-- Home Section -->
    <section class="page-section" id="home">
        <div class="container position-relative d-flex align-items-center">

            <!-- Home Section Content -->
            <div class="home-content text-start mt-n40">
                <div class="row">

                    <!-- Home Section Text -->
                    <div class="col-lg-6 col-xl-5 offset-xl-1 d-flex align-items-center order-first order-lg-last mb-md-60">
                        <div class="w-100 text-center text-lg-start">

                            <h1 class="hs-title-9 mb-40 mb-sm-20 wow fadeInUp">
                               Access Instant Working Capital
                            </h1>

                            <p class="hs-descr mb-50 mb-sm-40 wow fadeInUp" data-wow-delay="0.15s">
                                Secure Fast and Reliable Business Loans to Accelerate Your Business Expansion Efforts
                            </p>

                            <div class="wow fadeInUp wch-unset animated" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                                <div class="local-scroll mb-60 mb-sm-50">
                                    <a href="#contact" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim">
                                        <span>Get a Consultation</span>
                                    </a>
                                </div>



                            </div>

                        </div>
                    </div>
                    <!-- End Home Section Text -->

                    <!-- Images -->
                    <div class="col-lg-6">
                        <div class="composition-8">

                            <!-- Decorative Dots -->
                            <div class="composition-8-decoration-1 mt-n90 mt-md-n60 wow fadeIn" data-wow-duration="1.3s">
                                <img src="{{asset('theme/images/demo-corporate/decoration-1.svg')}}" alt="" />
                            </div>
                            <!-- End Decorative Dots -->

                            <!-- Main Image -->
                            <div class="composition-8-image bg-white">
                                <img src="{{asset('uploads/salary-advance-kenya-768x5122.jpg')}}" alt="Image Description" class="wow fadeScaleOutIn" data-wow-duration="1.3s" />
                            </div>
                            <!-- End Main Image -->

                            <!-- Overlay Buttons -->
                            <div class="composition-8-decoration-2 local-scroll wow fadeIn" data-wow-duration="1.3s" data-wow-offset="0">
                                <div class="mt-10">
                                    <a href="#" class="btn btn-mod btn-w btn-with-icon btn-circle">
                                        <span class="btn-icon color-3"><i class="mi-user"></i></span>
                                        <span data-btn-animate="y">Creditline for SMEs</span>
                                    </a>
                                </div>
                                <div class="mt-10">
                                    <a href="#" class="btn btn-mod btn-w btn-with-icon btn-circle">
                                        <span class="btn-icon color-2"><i class="mi-search"></i></span>
                                        <span data-btn-animate="y">Quick Short Term Loans</span>
                                    </a>
                                </div>
                                <div class="mt-10">
                                    <a href="#" class="btn btn-mod btn-w btn-with-icon btn-circle">
                                        <span class="btn-icon color-4"><i class="mi-message"></i></span>
                                        <span data-btn-animate="y">Daily Repayment Plans</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Overlay Buttons -->

                        </div>
                    </div>
                    <!-- End Images -->

                </div>
            </div>
            <!-- End Home Section Content -->

        </div>
    </section>
    <!-- End Home Section -->

    <!-- About Section -->
    <section class="page-section bg-light light-content content-dark" id="about">

        <div class="container position-relative">

            <div class="row mb-60 mb-xs-30">

                <div class="col-md-6">
                    <h2 class="section-caption mb-xs-10 content-dark">Our Story</h2>
                    <h3 class="section-title mb-0 content-dark"><span class="wow charsAnimIn" data-splitting="chars">Palla Credit Limited</span></h3>
                </div>

                <div class="col-md-5 offset-md-1 relative text-start text-md-end pt-40 pt-sm-20 local-scroll">

                    <!-- Decorative Dots -->
                    <div class="decoration-2 opacity-035 d-none d-md-block" data-rellax-y data-rellax-speed="0.7" data-rellax-percentage="-0.2">
                        <img src="{{asset('theme/images/decoration-2.svg')}}" alt="" />
                    </div>
                    <!-- End Decorative Dots -->

                    <a href="#" class="link-hover-anim underline align-middle content-dark" data-link-animate="y">Learn more about us <i class="mi-arrow-right size-18"></i></a>

                </div>

            </div>

            <div class="row wow fadeInUp" data-wow-delay="0.5s">

                <div class="col-lg-6 mb-md-60s">
                    <div class="position-relative">

                        <!-- Image -->
                        <div class="video">
                            <video style="border-radius:75px;" preload="auto" loop="" controls="controls" poster="{{asset('uploads/palla-credit.jpg')}}">
                            <source src="{{asset('uploads/Palla-Credit-Clients-Testimonials.mp4')}}" type="video/mp4">
                        </video>
                        </div>
                        <!-- End Image -->



                    </div>
                </div>

                <div class="col-lg-6 col-xl-5 offset-xl-1">



                    <div class="content-dark">
                        <p>Palla Credit is a fast growing non deposit taking micro-finance institution with eight branches namely; <strong>Kangemi, Kiambu, Kawangware, Eastlands, Muranga, Naivasha, Kasarani, Githurai</strong></p>
                        <p class="description normal animated vntd-animated fadeIn visible" data-animation="fadeIn" data-animation-delay="100">We are a company offering lending services to small and medium enterprises. Our flagship product, The <strong>Biashara Loan</strong>, is primarily intended to aid business people expand their operations. We take great pride and effort in ensuring that business owners and entrepreneurs meet their business goals by offering them the best possible financial solutions. We work hard in ensuring customer convenience so that you can focus on growing your business while leaving the financial aspects to us</p>
                    </div>



                </div>

            </div>

        </div>
    </section>
    <!-- End About Section -->


    <!-- Divider -->
    <hr class="mt-0 mb-0"/>
    <!-- End Divider -->



    <!-- Services Section -->
    <section class="page-section" id="services">
        <div class="container position-relative">

            <div class="row">

                <div class="col-lg-6 mb-md-60 mb-sm-30">

                    <h2 class="section-caption mb-xs-10">Product & Services</h2>

                    <h3 class="section-title mb-30"><span class="wow charsAnimIn" data-splitting="chars">Biashara Loan.</span></h3>

                    <div class="row">
                        <div class="col-lg-10">
                            <p class="section-descr mb-50 mb-sm-30 wow fadeInUp" data-wow-delay="0.4s">
                                Apply  for the fastest  biashara loans in Kenya, payable over flexible repayment periods while giving you access to financing to drive your business short term and long-term goals.
                            </p>
                        </div>
                    </div>

                    <ul class="nav nav-tabs services-tabs wow fadeInUp" data-wow-delay="0.55s" role="tablist">
                        <li role="presentation">
                            <a href="#services-item-1" class="active" aria-controls="services-item-1" role="tab" aria-selected="true" data-bs-toggle="tab">Instant Loan <span class="number">01</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#services-item-2" aria-controls="services-item-2" role="tab" aria-selected="false" data-bs-toggle="tab">No guarantors <span class="number">02</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#services-item-3" aria-controls="services-item-3" role="tab" aria-selected="false" data-bs-toggle="tab">No Savings <span class="number">03</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#services-item-4" aria-controls="services-item-4" role="tab" aria-selected="false" data-bs-toggle="tab">No Registration Fee <span class="number">04</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#services-item-5" aria-controls="services-item-5" role="tab" aria-selected="false" data-bs-toggle="tab">No Hidden Costs <span class="number">05</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#services-item-6" aria-controls="services-item-6" role="tab" aria-selected="false" data-bs-toggle="tab">Flexible Payment Plan <span class="number">06</span></a>
                        </li>
                    </ul>

                </div>

                <div class="col-lg-6 d-flex wow fadeInLeft" data-wow-delay="0.55s" data-wow-offset="275">

                    <div class="tab-content services-content">

                        <!-- Tab Content -->
                        <div class="tab-pane services-content-item show fade active" id="services-item-1" role="tabpanel">

                            <div class="services-text">
                                <div class="services-text-container">
                                    <h4 class="services-title">Instant loan issued without deducting interest</h4>
                                    <p class="text-gray mb-0">
                                        Palla Credit offers instant loans with a fast application process and quick approval. Ideal for urgent expenses, business expansion, or emergencies, they provide competitive rates and flexible repayment options.
                                    </p>
                                </div>
                            </div>

                            <img class="services-image" src="{{asset('uploads/Untitled-design.png')}}" alt="Image Description" />

                        </div>
                        <!-- End Tab Content -->

                        <!-- Tab Content -->
                        <div class="tab-pane services-content-item fade" id="services-item-2" role="tabpanel">

                            <div class="services-text">
                                <div class="services-text-container">
                                    <h4 class="services-title">No guarantors Required</h4>
                                    <p class="text-gray mb-0">
                                        Palla Credit offers instant loans with no guarantors or security required. With a fast application process and quick approval, their loans are ideal for urgent expenses, business expansion, or emergencies, featuring competitive rates and flexible repayment options.
                                    </p>
                                </div>
                            </div>

                            <img class="services-image" src="{{asset('uploads/savings.jpg')}}" alt="Image Description" />

                        </div>
                        <!-- End Tab Content -->

                        <!-- Tab Content -->
                        <div class="tab-pane services-content-item fade" id="services-item-3" role="tabpanel">

                            <div class="services-text">
                                <div class="services-text-container">
                                    <h4 class="services-title">No savings required as collateral</h4>
                                    <p class="text-gray mb-0">
                                        Palla Credit offers instant loans with no collateral or guarantors required. With a quick application process and approval, their loans are ideal for urgent expenses, business expansion, or emergencies, featuring competitive rates and flexible repayment options.
                                    </p>
                                </div>
                            </div>

                            <img class="services-image" src="{{asset('uploads/savings.jpg')}}" alt="Image Description" />

                        </div>
                        <!-- End Tab Content -->

                        <!-- Tab Content -->
                        <div class="tab-pane services-content-item fade" id="services-item-4" role="tabpanel">

                            <div class="services-text">
                                <div class="services-text-container">
                                    <h4 class="services-title">No registration fee required to facilitate loan</h4>
                                    <p class="text-gray mb-0">
                                        Palla Credit offers instant loans with no registration fee, collateral, or guarantors needed. With a fast application and quick approval, their loans suit urgent expenses, business expansion, or emergencies, with competitive rates and flexible repayment.
                                    </p>
                                </div>
                            </div>

                            <img class="services-image" src="{{asset('uploads/Registration-Fee.png')}}" alt="Image Description" />

                        </div>
                        <!-- End Tab Content -->

                        <!-- Tab Content -->
                        <div class="tab-pane services-content-item fade" id="services-item-5" role="tabpanel">

                            <div class="services-text">
                                <div class="services-text-container">
                                    <h4 class="services-title">No Hidden Costs</h4>
                                    <p class="text-gray mb-0">
                                        Palla Credit offers instant loans with no hidden costs, registration fee, collateral, or guarantors needed. With a fast application and approval process, their loans are ideal for urgent expenses, business expansion, or emergencies, with competitive rates and flexible repayment.
                                    </p>
                                </div>
                            </div>

                            <img class="services-image" src="{{asset('uploads/iceberg.jpg')}}" alt="Image Description" />

                        </div>
                        <!-- End Tab Content -->

                        <!-- Tab Content -->
                        <div class="tab-pane services-content-item fade" id="services-item-6" role="tabpanel">

                            <div class="services-text">
                                <div class="services-text-container">
                                    <h4 class="services-title">Flexible repayment plan</h4>
                                    <p class="text-gray mb-0">
                                        Palla Credit offers instant loans with no hidden costs, registration fee, collateral, or guarantors required. With a fast application and approval process, their loans are ideal for urgent expenses, business expansion, or emergencies, featuring competitive rates and flexible repayment, including daily payments via M-Pesa.
                                    </p>
                                </div>
                            </div>

                            <img class="services-image" src="{{asset('uploads/pmt-blog-21-08-2022.jpg')}}" alt="Image Description" />

                        </div>
                        <!-- End Tab Content -->

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->



    <!-- Steps Section -->
    <section class="page-section bg-primary-1 bg-color-alpha-90 bg-scroll light-content" style="background-image: url('{{asset('theme/images/demo-corporate/section-bg-2.jpg')}}')">
        <div class="container position-relative">

            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">

                    <h2 class="section-title mb-70 mb-sm-50 text-center">Three Simple Steps</h2>

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
                        <img src="{{asset('uploads/pexels-olly-3801426.jpg')}}" alt="Image Description" class="wow scaleOutIn" />
                    </div>
                </div>

                <div class="col-md-6 offset-md-1 col-lg-5 offset-lg-1 d-flex align-items-center wow fadeInUp">
                    <blockquote class="testimonials-6-item">

                        <div class="testimonials-6-icon" aria-hidden="true">“</div>

                        <p class="testimonials-6-text mb-40">
                            Getting a loan from Palla Credit was incredibly easy and fast. Their process is seamless, with no hidden fees or complicated requirements. I applied online, got approved within hours, and the funds were in my account the next day. Perfect for anyone needing quick financial assistance with competitive rates and flexible repayment options. Highly recommend Palla Credit!
                        </p>

                        <div class="section-line mb-10"></div>

                        <footer>
                            <div class="testimonials-6-author">
                                Gerishom Kadiri
                            </div>
                            <div class="testimonials-6-position">
                                Marketing Consultant
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
                        <img src="{{asset('uploads/pexels-olly-3801426.jpg')}}" alt="Image Description" class="wow scaleOutIn" />
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 d-flex align-items-center wow fadeInUp">
                    <blockquote class="testimonials-6-item">

                        <div class="testimonials-6-icon" aria-hidden="true">“</div>

                        <p class="testimonials-6-text mb-40">
                            Choosing Palla Credit for my loan needs was a game-changer. Their no-hassle application process, combined with quick approval and transparent terms, made everything straightforward. Whether for business expansion or unexpected expenses, their competitive rates and flexible repayment plans provided the financial support I needed when I needed it most.
                        </p>

                        <div class="section-line mb-10"></div>

                        <footer>
                            <div class="testimonials-6-author">
                                Dan Faith
                            </div>
                            <div class="testimonials-6-position">
                                Accountant
                            </div>
                        </footer>

                    </blockquote>
                </div>

            </div>
            <!-- End Testimonial -->

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
                <div class="col-md-8 offset-md-5 col-lg-6 offset-lg-8 col-xl-5 offset-xl-7">

                    <h2 class="section-title mb-40 mb-xs-30">Smart <span class="mark-decoration-5">Financing</span> Solutions for Your Business</h2>

                    <p class="section-descr mb-50 mb-sm-40">
                        We understand that financial needs can arise unexpectedly. That's why we offer hassle-free instant loans designed to meet your urgent requirements, whether you're expanding your business, dealing with unforeseen expenses, or facing emergencies
                    </p>

                    <div class="local-scroll mb-70 mb-sm-50">
                        <a href="tel:+254722388009" class="btn btn-mod btn-w-c btn-large btn-round btn-hover-anim opacity-09"><span> <i class="fa-viber"></i> Give us a Call</span></a>
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


    <!-- Newsletter Section -->
    <section class="container">
        <div class="page-section px-4 px-md-0 bg-gradient-primary-light-1 round">

            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 wow fadeInUp">

                    <div class="row">
                        <div class="col-md-10 col-xl-8 d-flex mb-50 mb-sm-30">
                            <div class="flex-sm-shrink-0 me-3 me-sm-4">
                                <img src="{{asset('theme/images/demo-corporate/section-image-1.png')}}" width="100" height="100" alt="Image Description" />
                            </div>
                            <div class="d-flex align-items-center">
                                <h2 class="section-title-small w-100 mb-0">Stay informed with our weekly newsletter.</h2>
                            </div>
                        </div>
                    </div>

                    <form id="mailchimp" class="form">

                        <div class="d-sm-flex justify-content-between mb-3">
                            <label for="newsletter-email" class="visually-hidden">Your email</label>
                            <input placeholder="Enter your email" class="newsletter-field input-lg round" id="newsletter-email" name="newsletter-email" type="email" pattern=".{5,100}" required aria-required="true">
                            <button type="submit" aria-controls="subscribe-result" class="newsletter-button btn btn-mod btn-color btn-large btn-round btn-hover-anim">
                                <span>Subscribe <span class="d-none d-md-inline-block">Now</span></span>
                            </button>
                        </div>

                        <div class="form-tip">
                            <i class="icon-info size-16"></i>
                            By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                        </div>

                        <div id="subscribe-result" role="region" aria-live="polite" aria-atomic="true"></div>

                    </form>

                </div>
            </div>

        </div>
    </section>
    <!-- End Newsletter Section -->


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
                                        All the fields are required. By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
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
