@extends('front.master-pages')


@section('content')

<main id="main">


    <section class="page-section bg-gradient-gray-light-1 bg-scroll overflow-hidden">

        <!-- Background Shape -->
        <div class="bg-shape-1 wow fadeIn" style=" width: 100%;">
            <img class="opacity-05 about-banner" src="{{asset('uploads/business-loans-1-768x512.jpg')}}" alt="" />
        </div>
        <!-- End Background Shape -->

        <div class="container position-relative pt-10 pt-sm-40 text-center">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <h1 class="hs-title-9 mb-10">
                        <span class="wow charsAnimIn" data-splitting="chars">
                             <span class="mark-decoration-3-wrap">About Us<b class="mark-decoration-3 wow scalexIn" data-wow-delay="0.5s"></b></span>
                        </span>
                    </h1>

                    {{-- <p class="hs-descr mb-0 wow fadeIn" data-wow-delay="0.2s" style="max-width:600px; margin:0 auto;">
                        We encourage a culture of collaboration, diversity, and continuous learning, ensuring that all employees have the tools and opportunities to excel.
                    </p> --}}

                </div>
            </div>

        </div>

    </section>
    <!-- End Home Section -->


    <!-- About Section -->
    <section class="page-section bg-white light-content content-dark" id="about">

        <div class="container position-relative">


            <div class="row wow fadeInUp" data-wow-delay="0.5s">

                <div class="col-lg-6 mb-md-60s">
                    <div class="position-relative">

                        <!-- Image -->
                        <div class="video">
                            <video style="border-radius:75px; border:6px solid #88B437" preload="auto" loop="" controls="controls" poster="{{asset('uploads/palla-credit.jpg')}}">
                            <source src="{{asset('uploads/Palla-Credit-Clients-Testimonials.mp4')}}" type="video/mp4">
                        </video>
                        </div>
                        <!-- End Image -->



                    </div>
                </div>

                <div class="col-lg-6 col-xl-5 offset-xl-1">



                    <div class="content-dark">
                        <br>
                        <p>Palla Credit is a fast-growing non-deposit taking micro-finance institution with branches across major counties in Kenya namely: <strong>Nairobi, Nakuru, Kiambu, Kajiado, Embu and Machakos.</strong>
                        </p>
                        <p class="description normal animated vntd-animated fadeIn visible" data-animation="fadeIn" data-animation-delay="100">We are a company offering lending services to small and medium enterprises. Our flagship product, The <strong>Biashara Loan</strong>, is primarily intended to aid business people expand their operations. We take great pride and effort in ensuring that business owners and entrepreneurs meet their business goals by offering them the best possible financial solutions. We work hard in ensuring customer convenience so that you can focus on growing your business while leaving the financial aspects to us</p>
                    </div>



                </div>

            </div>


        </div>
    </section>
    <!-- End About Section -->

      <!-- Portfolio Section -->
      <section class="page-section bg-light-alpha-90" id="portfolio">
        <div class="container position-relative">

            <div class="row mb-70 mb-sm-50">

                <div class="col-lg-12 col-xl-10 mb-md-40">

                    {{-- <h2 class="section-title mb-40 mb-xs-30">About Us</h2> --}}

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





        </div>
    </section>
    <!-- End Portfolio Section -->


     <!-- About Section -->
     <section class="page-section bg-primary-1 bg-color-alpha-90 bg-scroll light-content" id="about" style="background-image: url('{{asset('uploads/palla-credit.jpg')}}')">
        <div class="container position-relative">

            <div class="row wow fadeInUp" data-wow-delay="0.5s">

                <div class="col-lg-6 col-xl-5 offset-xl-1" style="font-weight:600">


                    <h4 class="h5">Our Mission</h4>

                    <p class="text-white">
                            To improve the social –economic conditions of small and medium size business people by empowering them to become a catalyst for their increased participation in the development process, in order to enhance their quality of life.
                    </p>



                </div>

                <div class="col-lg-6 col-xl-5 offset-xl-1" style="font-weight:600">



                    <h4 class="h5">Our Vision</h4>

                    <p class="text-white">
                        To be the leading micro-finance institution for small and medium size business people in East Africa
                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- End About Section -->


</main>
@endsection
