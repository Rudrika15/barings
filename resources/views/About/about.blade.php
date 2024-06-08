@extends('layout.master')
@section('title','About')
@section('content')
    @include('layout.header')
    <div class="container-fluid   p-0">

    {{--  <img src="{{ asset('img/c2.jpg') }}" style="height:300px; widht:100px;" alt="">  --}}


        <a name="back-to-top"></a>

        <div class="page-header" style="background-image: url('img/about.jpeg');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home.index') }}">Home</a>
                        <a href="{{ route('about') }}">About Us</a>
                    </div>
                </div>
            </div>
        </div>



{{--
        <div class="page-header" style="">

            <div class="container">
                <div class="row">
                    <div class="col-12" >
                        <h2 >About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home.index') }}">Home</a>
                        <a href="{{ route('about') }}">About Us</a>
                    </div>
                </div>
            </div>
        </div>  --}}

        {{--  <div class="hr">
            <hr>
        </div>  --}}

        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img" data-aos="fade-up">
                            <img src="{{ asset('img/about.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6" data-aos="fade-up">
                        <div class="section-header text-left">
                            <h5>
                                <b>Welcome to</b>
                            </h5>
                            <h1>
                                <b>MICRO DIAMOND & CBN WHEELS</b>
                            </h1>
                        </div>
                        <div class="about-text">
                            <p>
                                Since 2001, MICRO has been established a world prominent reputation of high- quality
                                products in Diamond and CBN wheels. Innovation and development have been the main strength
                                of Micro Products.Micro has multiples Bonds to meet your most critical tooling requirements.
                                We strive for regular up gradation in the manufacturing process.The high quality, superior
                                finishing and cost-effectiveness of our products have made us the first preference of many
                                leading corporations in India and Abroad.Micro always provides the most competitive price,
                                consistent quality, efficient service and the most effective technical support to our
                                valuable customers

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <div class="vimi-img">
            <div class="container vision mt-3" data-aos="fade-in">
                <div class="row vision-img"   >
                    <div class="col-md-6 text text-center">
                        <h1 class="mt-5" style="color: var(--heading);" >
                            <b>
                                <i>Our Vision</i>
                            </b>
                        </h1>
                        <h4 class="mt-2 text-justify" style="color:var(--smheading);">To be a market leader in
                            DIAMOND and CBN wheels industry.</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/vision (1).jpg') }}" alt="Vision Image" class="text-justify"  >
                    </div>
                </div>
            </div>

            <div class="container vision mt-5" data-aos="fade-in"  >
                <div class="row vision-img">
                    <div class="col-md-6 text order-md-2 text-center">
                        <h1 class="mt-5" style="color: var(--heading);">
                            <b>
                                <i class="mission">Our Mission</i>
                            </b>
                        </h1>
                        <h4 class="mt-2 text-justify mission" style="color:var(--smheading);">
                            <b>MICRO</b> likes to become a key partner of your success.
                        </h4>
                    </div>
                    <div class="col-md-6  mission-img d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/mission.jpg') }}" alt="Mission Image" class="text-justify">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#back-to-top" id="back-to-top-btn"><i class="fa-solid fa-up-long"></i></a>
    @include('layout.footer')
@endsection
