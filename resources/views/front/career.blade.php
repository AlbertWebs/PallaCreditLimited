@extends('front.master-director')


@section('content')

<main id="main">

<!-- Home Section -->
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
                         <span class="mark-decoration-3-wrap">Career<b class="mark-decoration-3 wow scalexIn" data-wow-delay="0.5s"></b></span>
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
<section class="page-section  bg-light-alpha-90 light-contents content-dark" id="career">
    <div class="container position-relative">


        <div class="row mb-70 mb-sm-50">
            <div class="col-md-8 offset-md-2 text-center">


                <p class="section-descr mb-0">
                    Message from the director:

                </p>

            </div>
        </div>

        <div class="row wow fadeInUp" data-wow-delay="0.5s">

            <div class="col-lg-6 mb-md-60s">
                <div class="position-relative">
                    <!-- Image -->
                    <div class="video">
                        <div class="round wow fadeIn animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
                            <img class="round" style="max-height:800px; width:100%; object-fit:cover" src="{{url('/')}}/uploads/team/director.jpeg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Image -->
                </div>
            </div>

            <div class="col-lg-6">

                <p class="section-descr mb-0" style="font-size: 24px">
                    Welcome to Palla Credit!

                    <br><br>
                    At Palla Credit, we are committed to empowering small businesses and individuals through accessible and reliable financial services. Our growth is fueled by innovation, integrity, and a dedication to customer satisfaction.
                    <br><br>
                    Despite challenges, we’ve successfully expanded our services and solidified our position as a leader in microfinance. We believe that financial inclusion is key to economic growth, and we continuously innovate to provide tailored solutions that meet our clients' unique needs.
                    <br><br>
                    Our strong culture of excellence, governance, and accountability drives everything we do. As you explore our offerings, I invite you to join us in our mission to transform lives through financial empowerment.
                    <br><br>
                    Thank you for visiting Palla Credit.
                    <br><br>
                    <small>
                    Warm regards,<br>
                    Joyce Wambui,<br>
                    Director, Palla Credit Ltd.
                    </small>



                </p>
            </div>

        </div>
    </div>



</section>
<!-- End About Section -->

<!-- About Section -->
<section class="page-section light-contents content-dark" id="career">
    <div class="container position-relative">


        <div class="row mb-70 mb-sm-50">
            <div class="col-md-8 offset-md-2 text-center">


                <p class="section-descr mb-0">
                    Message from Human Resources Manager
                </p>

            </div>
        </div>

        <div class="row wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-lg-6 mb-md-60s">
                <div class="position-relative">
                    <!-- Image -->
                    <div class="video">
                        <div class="round wow fadeIn animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
                            <img class="round" style="max-height:800px; width:100%; object-fit:cover" src="{{url('/')}}/uploads/team/hr.jpeg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Image -->
                </div>
            </div>


            <div class="col-lg-6">

                <p class="section-descr mb-0" style="font-size: 24px">
                    Hello,<br><br>

                    At Palla Credit, we believe our people are our greatest asset. Our HR department is committed to creating a positive and dynamic workplace where every team member feels valued and empowered to succeed.
                    <br><br>
                    We encourage a culture of collaboration, diversity, and continuous learning, ensuring that all employees have the tools and opportunities to excel. Whether you’re a current employee, a potential candidate, or exploring opportunities with us, we invite you to discover what makes Palla Credit a great place to work.
                    <br><br>
                    Thank you for your interest in Palla Credit. We look forward to the possibility of working together.
                    <br><br>
                    Best regards,
                    <br><br>
                    <small>
                        Valary Lurongo,<br>
                        Human Resources  Manager,<br>
                        Palla Credit Ltd.<br>
                    </small>

                </p>
            </div>



        </div>
    </div>



</section>

<section class="page-section light-contents bg-light-alpha-90 content-dark" id="career">
    <!-- End About Section -->
    <div class="local-scroll text-center mb-60 mb-sm-50">
        <a href="{{url('/')}}/search-career" class="btn btn-mod btn-color btn-large btn-round btn-hover-anim">
            <span>Browse Jobs  <i class="mi-search size-18" aria-hidden="true"></i></span>
        </a>
    </div>
</section>

</main>
@endsection
