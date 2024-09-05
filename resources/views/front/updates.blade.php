@extends('front.master')


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
                                Latest <span class="mark-decoration-3-wrap">News<b class="mark-decoration-3 wow scalexIn" data-wow-delay="0.5s"></b></span>
                            </span>
                        </h1>

                        <p class="hs-descr mb-0 wow fadeIn" data-wow-delay="0.2s">Insights and inspiration at your fingertips.</p>

                    </div>
                </div>

            </div>

        </section>
        <!-- End Home Section -->


        <!-- Section -->
        <section class="page-section">
            <div class="container ">

                <div class="row">

                    <!-- Content -->
                    <div class="col-lg-12 mb-md-80" style="margin:0 auto">

                        <!-- Blog Posts Grid -->
                        <div class="row mt-n50 mb-60 mb-sm-40">

                            <!-- Blog Post Item -->
                                @foreach ($Blog as $blog)
                                    <!-- Blog Post Item -->
                                    <div class="post-prev-2 col-md-4 wow fadeInLeft">

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
                            <!-- End Blog Post Item -->
                        </div>
                        <!-- End Blog Posts Grid -->



                    </div>
                    <!-- End Content -->



                </div>

            </div>
        </section>
        <!-- End Section -->





    </main>

@endsection
