@extends('front.master-career')


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


{{-- <section class="page-section">
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
</section> --}}


<!-- Section -->
<section class="page-section" style="padding:10px; margin:0 auto">
    <div class="container relative">
        <div class="row">
            <!-- Content -->
            <div class="col-lg-10" style="margin:0 auto">

                <!-- Blog Posts Grid -->
                <div class="row mt-n50 mb-60 mb-sm-40 text-centers">
                    <?php
                       $Careers = DB::table('careers')->get();
                    ?>
                    @if($Careers->isEmpty())
                    <h2>
                        No Jobs Found
                    </h2>
                    @else


                    @foreach ($Careers as $Career)
                        <!-- Blog Post Item -->
                        <div class="post-prev-2 col-md-12 mt-50">

                            <div class="post-prev-2-img">
                                <a href="#"><img src="{{url('/')}}/uploads/{{$Career->image}}" alt="{{$Career->title}}" /></a>
                            </div>

                            <h3 class="post-prev-2-title"><a href="#">{{$Career->title}}</a></h3>
                            <h4><a href="#">{{$Career->function}}</a></h4>
                            <p class="post-prev-2-text">
                                {!!html_entity_decode($Career->content)!!}
                            </p>
                        </div>
                        <!-- End Blog Post Item -->
                    @endforeach

                    @endif



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
