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
                            <p>Credits:</p>
                            <p>Some images and videos used on this website were created by our in-house photographers and videographers. We acknowledge their creativity and dedication in capturing these visuals.</p>
                            <p>Additionally, certain images were purchased from reputable image vendors, including but not limited to shutterstock, Freepik, and Pixels.</p>
                            <p>All rights to these images and videos are retained by their respective creators and licensors. Unauthorized use is strictly prohibited.</p>
                        </div>


                        {{--  --}}
                    </p>

                </div>
            </div>
        </div>
    </section>

</main>
@endsection
