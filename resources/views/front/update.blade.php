@extends('front.master')


@section('content')
@foreach ($Blog as $blog)


    <main id="main">

        <!-- Header Section -->
        <section class="page-section bg-gray-light-1 bg-light-alpha-90 parallax-5" style="background-image: url('{{asset('theme/images/full-width-images/section-bg-1.jpg')}}')" id="home">
            <div class="container position-relative pt-30 pt-sm-50">

                <!-- Section Content -->
                <div class="text-center">
                    <div class="row">

                        <!-- Page Title -->
                        <div class="col-md-8 offset-md-2">

                            <h1 class="hs-title-1 mb-20">
                                <span class="wow charsAnimIn" data-splitting="chars">{{$blog->title}}</span>
                            </h1>

                            <!-- Author, Categories, Comments -->
                            <div class="blog-item-data mt-30 mt-sm-10 mb-0 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="d-inline-block me-3">
                                    <a href="#"><i class="mi-clock size-16"></i><span class="visually-hidden">Date:</span> {{date('M d, Y', strtotime($blog->created_at))}}</a>
                                </div>
                                <div class="d-inline-block me-3">
                                    <a href="#"><i class="mi-user size-16"></i><span class="visually-hidden">Author:</span> Admin</a>
                                </div>


                            </div>
                            <!-- End Author, Categories, Comments -->

                    </div>
                    <!-- End Page Title -->

                    </div>
                </div>
                <!-- End Section Content -->

            </div>
        </section>
        <!-- End Header Section -->


        <!-- Section -->
        <section class="page-section">
            <div class="container relative">

                <div class="row">

                    <!-- Content -->
                    <div class="col-lg-8 offset-lg-2">

                        <!-- Post -->
                        <div class="blog-item mb-80 mb-xs-40">

                            <div class="blog-item-body">

                                <!-- Media Gallery -->
                                <div class="blog-media mb-40 mb-xs-30">
                                    <div class="clearlist content-slider">
                                        <div>
                                            <img src="{{$blog->image_one}}" alt="Image Description">
                                        </div>

                                    </div>
                                </div>

                                <p class="lead">
                                    {!!html_entity_decode($blog->content)!!}
                                </p>



                            </div>

                        </div>
                        <!-- End Post -->




                        <!-- Prev/Next Post -->
                        <div class="clearfix mt-40">
                            <a href="#" class="blog-item-more left"><i class="mi-chevron-left"></i>&nbsp;Prev post</a>
                            <a href="#" class="blog-item-more right">Next post&nbsp;<i class="mi-chevron-right"></i></a>
                        </div>
                        <!-- End Prev/Next Post -->

                    </div>
                    <!-- End Content -->

                </div>

            </div>
        </section>
        <!-- End Section -->


        <!-- Divider -->
        <hr class="mt-0 mb-0">
        <!-- End Divider -->



    </main>

@endforeach
@endsection
