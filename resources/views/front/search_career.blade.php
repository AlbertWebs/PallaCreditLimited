@extends('front.master-director')


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
                        Find Your Dream  <span class="mark-decoration-3-wrap">Job<b class="mark-decoration-3 wow scalexIn" data-wow-delay="0.5s"></b></span>
                    </span>
                </h1>

                <p class="hs-descr mb-0 wow fadeIn" data-wow-delay="0.2s">Unlock Opportunities That Match Your Passion</p>

            </div>
        </div>

    </div>

</section>
<!-- End Home Section -->


<section class="page-section">
    <div class="container relative">
        <div class="row">
            <!-- Content -->
            <div class="col-lg-10 mb-md-80" style="padding:10px; margin:0 auto">
                <!-- Widget -->
                <div class="widget" style="margin:0 auto">
                    <div class="widget-body" style="margin:0 auto">
                        <div class="tags" style="margin:0 auto">
                            <a href="#">Experienced</a>
                            <a href="#">Graduate</a>
                            <a href="#">Intermediate</a>

                        </div>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
        </div>
    </div>
</section>


<!-- Section -->
<section class="page-section" style="padding:10px; margin:0 auto">
    <div class="container relative">
        <div class="row">
            <!-- Content -->
            <div class="col-lg-10" style="margin:0 auto">

                <!-- Blog Posts Grid -->
                <div class="row mt-n50 mb-60 mb-sm-40 text-center">
                    <h2>
                        No Jobs Found
                    </h2>

                    <!-- Blog Post Item -->
                    {{-- <div class="post-prev-2 col-md-6 mt-50">

                        <div class="post-prev-2-img">
                            <a href="corporate-blog-single.html"><img src="images/demo-corporate/blog/post-prev-1.jpg" alt="Image Description" /></a>
                        </div>

                        <h3 class="post-prev-2-title"><a href="corporate-blog-single.html">Content Marketing Steps That Will Help You to Grow Your Business</a></h3>

                        <p class="post-prev-2-text">
                            The macro-environment, over which a firm holds little control, consists of a variety of external factors that manifest on a large scale.
                        </p>

                        <div class="post-prev-2-tags">
                            <span class="post-prev-2-tag">February 13, 2022</span>
                            <span class="post-prev-2-tag"><i class="mi-circle color-primary-1"></i> Articles</span>
                        </div>

                    </div> --}}
                    <!-- End Blog Post Item -->



                </div>
                <!-- End Blog Posts Grid -->

                <!-- Pagination -->
                {{-- <div class="pagination">
                    <a href="#"><i class="mi-chevron-left"></i><span class="visually-hidden">Previous page</span></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <span class="no-active">...</span>
                    <a href="#">9</a>
                    <a href="#"><i class="mi-chevron-right"></i><span class="visually-hidden">Next page</span></a>
                </div> --}}
                <!-- End Pagination -->

            </div>
            <!-- End Content -->
        </div>
    </div>
</section>
<!-- End Section -->

</main>
@endsection
