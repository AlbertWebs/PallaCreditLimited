@extends('front.master-pages')


@section('content')

<main id="main">


       <!-- Home Section -->
       <section class="page-section bg-gradient-gray-light-1 bg-scroll overflow-hidden">

        <!-- Background Shape -->
        <div class="bg-shape-1 wow fadeIn">
            <img class="opacity-05" src="images/demo-corporate/bg-shape-1.svg" alt="" />
        </div>
        <!-- End Background Shape -->

        <div class="container position-relative pt-10 pt-sm-40 text-center">

            <div class="row">

                <div class="col-lg-10 offset-lg-1">

                    <h1 class="hs-title-9 mb-10">
                        <span class="wow charsAnimIn" data-splitting="chars">
                            Our Commitment to  <span class="mark-decoration-3-wrap">Sustainable Development.<b class="mark-decoration-3 wow scalexIn" data-wow-delay="0.5s"></b></span>
                        </span>
                    </h1>



                </div>
            </div>

        </div>

    </section>
    <!-- End Home Section -->

      <!-- Blog Section -->
      <section class="page-section bg-light-alpha-90" id="blog">
        <div class="container position-relative">

            <div class="row">


                <div class="col-lg-6 col-xl-4 mb-md-70 mb-sm-50">
                    <br><br><br>
                    <h2 class="section-title mb-40 mb-xs-30">Our impact</h2>
                    <p class="section-descr mb-50 mb-sm-40">
                        {{-- Palla Credit is committed to supporting communities by offering financial products and services that help small businesses while promoting global sustainability. Their efforts align with multiple United Nations Sustainable Development Goals (SDGs). --}}
                        We demonstrate our commitment to fostering economic growth, reducing inequalities, and supporting sustainable communities through the financial services that we offer to small businesses in Kenya.
                    </p>
                </div>

                <div class="col-lg-6 col-xl-8">
                    <div class="row mt-n50">
                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-4 mt-50 wow fadeInLeft">
                            <div class="post-prev-2-img">
                                <a href="#"><img src="{{url('/')}}/uploads/sdg/1.png" alt="Image Description" /></a>
                            </div>
                            {{-- <h3 class="post-prev-2-title"><a href="#">SDG 1: No Poverty </a></h3>
                            <p class="post-prev-2-text">
                                By providing accessible financial services, we helps individuals and small businesses improve their livelihoods, contributing to poverty reduction.
                            </p> --}}
                        </div>
                        <!-- End Blog Post Item -->

                         <!-- Blog Post Item -->
                         <div class="post-prev-2 col-md-4 mt-50 wow fadeInLeft">
                            <div class="post-prev-2-img">
                                <a href="#"><img src="{{url('/')}}/uploads/sdg/2.png" alt="Image Description" /></a>
                            </div>
                            {{-- <h3 class="post-prev-2-title"><a href="#">SDG 5: Gender Equality </a></h3>
                            <p class="post-prev-2-text">
                                We offer loans to women-owned businesses and have policies promoting equal access to financial services regardless of gender.
                            </p> --}}
                        </div>
                        <!-- End Blog Post Item -->

                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-4 mt-50 wow fadeInLeft">
                            <div class="post-prev-2-img">
                                <a href="#"><img src="{{url('/')}}/uploads/sdg/3.png" alt="Image Description" /></a>
                            </div>
                            {{-- <h3 class="post-prev-2-title"><a href="#">SDG 8: Decent Work and Economic Growth </a></h3>
                            <p class="post-prev-2-text">
                                By supporting small businesses and entrepreneurship through loans, we contribute to economic growth and the creation of decent jobs.
                            </p> --}}
                        </div>
                        <!-- End Blog Post Item -->
                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-4 mt-50 wow fadeInLeft">
                            <div class="post-prev-2-img">
                                <a href="#"><img src="{{url('/')}}/uploads/sdg/4.png" alt="Image Description" /></a>
                            </div>
                            {{-- <h3 class="post-prev-2-title"><a href="#">SDG 9: Industry, Innovation, and Infrastructure </a></h3>
                            <p class="post-prev-2-text">
                                Facilitating access to finance for small businesses encourages innovation and supports the development of infrastructure, particularly in underserved areas.
                            </p> --}}
                        </div>
                        <!-- End Blog Post Item -->


                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-4 mt-50 wow fadeInLeft">
                            <div class="post-prev-2-img">
                                <a href="#"><img src="{{url('/')}}/uploads/sdg/5.png" alt="Image Description" /></a>
                            </div>
                            {{-- <h3 class="post-prev-2-title"><a href="#">SDG 10: Reduced Inequalities  </a></h3>
                            <p class="post-prev-2-text">
                                Our inclusive approach to lending, such as not requiring collateral or guarantors, helps reduce inequalities by providing financial access to those who might be excluded from traditional banking services.
                            </p> --}}
                        </div>
                        <!-- End Blog Post Item -->


                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-4 mt-50 wow fadeInLeft">
                            <div class="post-prev-2-img">
                                <a href="#"><img src="{{url('/')}}/uploads/sdg/6.png" alt="Image Description" /></a>
                            </div>
                            {{-- <h3 class="post-prev-2-title"><a href="#">SDG 17: Partnerships for the Goals  </a></h3>
                            <p class="post-prev-2-text">
                                We collaborate with other organizations, governments, and international bodies to extend its reach and impact, it aligns with this goal by contributing to global partnerships for sustainable development.
                            </p> --}}
                        </div>
                        <!-- End Blog Post Item -->



                    </div>
                </div>


            </div>
            <hr>

            <div class="row mb-70 mb-sm-50">

                <div class="col-lg-12 col-xl-12 mb-md-40">


                    <p class="section-descr mb-0">
                        <strong>SDG 1 & 10
                            Reducing Poverty and Inequality
                            </strong>
                        - By providing accessible financial services, we helps individuals and small businesses improve their livelihoods, contributing to poverty reduction.
                        <br>
                        Our inclusive approach to lending, such as not requiring collateral or guarantors, helps reduce inequalities by providing financial access to those who might be excluded from traditional banking services.<br>
                        -   80%   of our clients reported improved household income.<br>
                        -   50%   of clients came from rural or marginalized areas, giving everyone a chance to grow.<br>
                        -   3,000 families   benefitted indirectly from the success of their businesses.<br><br>


                        <strong>SDG 5:Supporting Women in Business </strong>
                        We offer loans to women-owned businesses and have policies promoting equal access to financial services regardless of gender.
                        -   60%   of our loans were issued to women-owned businesses.<br>
                        -   45%   of these women expanded their businesses within the first year.<br>
                        -   Helping women succeed with fair and accessible financing.<br>

                        <br><br>
                        <strong> SDG 8:Driving Economic Growth  </strong>
                        - By supporting small businesses and entrepreneurship through loans, we contribute to economic growth and the creation of decent jobs.<br>
                        -   70%   of businesses grew their revenue by   15%   within a year of receiving loans.<br>
                        -   85%   of loan recipients successfully repaid their loans via M-Pesa.<br>
                        - Offering a   25% interest rate  , with no hidden fees and flexible repayment plans.<br>

                        <br><br>
                        <strong>SDG 9:    Innovating and Expanding</strong>
                        -Facilitating access to finance for small businesses encourages innovation and supports the development of infrastructure, particularly in underserved areas.
                        <br>
                        -   30%   of businesses used their loans to invest in new technologies or expand their services.<br>
                        -   25%   of clients entered new markets, growing their business reach.<br><br>

                        <strong>SDG 10: Reduced Inequalities</strong>

                        - Our inclusive approach to lending, such as not requiring collateral or guarantors, helps reduce inequalities by providing financial access to those who might
                        be excluded from traditional banking services.<br><br>

                        <strong>SDG 17: Partnerships for the Goals</strong>

                        - We collaborate with other organizations, governments, and international bodies to extend its reach and impact, it aligns with this goal by contributing to
                        global partnerships for sustainable development.<br>
                        -   10 strategic partnerships   formed with NGOs, government agencies, and business development centers.<br>
                         -   1,000 business owners   received training in financial management and business growth.<br><br>



                        We demonstrate our commitment to fostering economic growth, reducing inequalities, and supporting sustainable communities through the financial services
                        that we offer to small businesses in Kenya.
                    </p>

                </div>


            </div>

        </div>
    </section>
    <!-- End Blog Section -->





</main>
@endsection
