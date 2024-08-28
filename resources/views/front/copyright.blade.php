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
                            Copyright <span class="mark-decoration-3-wrap">Statement<b class="mark-decoration-3 wow scalexIn" data-wow-delay="0.5s"></b></span>
                        </span>
                    </h1>



                </div>
            </div>

        </div>

    </section>
    <!-- End Home Section -->


    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container position-relative">

            <div class="row mb-80 mb-sm-60 wow fadeInUp" data-wow-offset="0">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-centers">

                    <p class="section-descr mb-0">
                        {{--  --}}
                        <div>
                            © {{date('Y')}} Palla Credit. All rights reserved.
                            <br><br>
                            This website and its content, including but not limited to text, graphics, logos, images, and software, are the property of Palla Credit and are protected by international copyright laws. Any unauthorized use, reproduction, or distribution of this material without prior written permission from Palla Credit is strictly prohibited.
                            <br><br>
                            Palla Credit reserves the right to pursue legal action against any infringement of its intellectual property rights.
                        </div>


                        {{--  --}}
                    </p>

                </div>
            </div>
        </div>
    </section>

</main>
@endsection
