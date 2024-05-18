@extends('layout.master')
@section('title','Home')
@section('content')

@include('layout.header')
<a name="back-to-top"></a>
    <div class="container-fluid  m-0 p-0">
        {{--  data-ride="carousel"  --}}
        <div id="carouselExampleIndicators" class="carousel slide" >
            {{--  <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>  --}}
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img class="d-block " src="{{ asset('img/c2.jpg') }}" style="opacity: 0.9;" alt="First slide">
                    <div class="carousel-caption ">
                        <h1 class="animated fadeInLeft  mt-5">MICRO DIAMOND & CBN WHEELS</h1>
                        <a class="btn animated fadeInUp" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block " src="{{ asset('img/c2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block " src="{{ asset('img/c3.jpg') }}" alt="Third slide">
                </div>
            </div>
            {{--  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>  --}}
        </div>

        {{--  <div class="hr">
            <hr>
        </div>  --}}
        <div class="about" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('img/about.jpg') }}" alt="Image"  data-aos="fade-right">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <h5  data-aos="fade-up"><b>Welcome to </b></h5>
                            <h1  data-aos="fade-up"><b>MICRO DIAMOND & CBN WHEELS</b></h1>
                        </div>
                        <div class="about-text">
                            <p>
                                Since 2001, MICRO has been established a world prominent reputation of high- quality
                                products in Diamond and CBN wheels. Innovation and development have been the main
                                strength
                                of Micro Products.Micro has multiples Bonds to meet your most critical tooling
                                requirements.
                                We strive for regular up gradation in the manufacturing process.The high quality,
                                superior
                                finishing and cost-effectiveness of our products have made us the first preference of
                                many
                                leading corporations in India and Abroad.Micro always provides the most competitive
                                price,
                                consistent quality, efficient service and the most effective technical support to our
                                valuable customers
                            </p>

                            <a class="btn" href="{{route('about')}}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- product -->
        {{--  <div class="hr">
            <hr>
        </div>  --}}
        <div class="product" data-aos="fade-up">
            <div class="container">
                <div class="section-header text-center">
                    <h5><b>Our Products</b></h5>
                    <h2 ><b>We Provide Products</b></h2>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 col-md-6  fadeInUp">
                        <div class="product-item">
                            <div class="product-img"  data-aos="flip-right">
                                <img src="{{ asset('img/product1 (1).jpg') }}" alt="Image" >
                                <div class="product-overlay">
                                    <p>
                                        Resin bond ideally used for dry and wet grinding. It has excellent grinding
                                        ability, surface finish and minimal chipping. Resin bond products have the
                                        features of good self-sharpening, sharp cutting, High removal rates, high
                                        efficiency, low roughness of work piece surface, few heat generating and without
                                        burning workpiece. It has free cutting power and reduce workpiece damage even at
                                        high removal rate.
                                    </p>
                                </div>
                            </div>
                            <div class="product-text">
                                <h3>RESIN BOND</h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6  fadeInUp">
                        <div class="product-item">
                            <div class="product-img"  data-aos="flip-right">
                                <img src="{{ asset('img/product2 (1).jpg') }}" alt="Image">
                                <div class="product-overlay">
                                    <p>
                                        Micro Hybrid Bonded Diamond / CBN Grinding Wheel, especially used for the CNC
                                        TOOLS grinding machine, such as:
                                        ANCA, WALTER, SCHUTTE, EWAG, SCHNEEBERGER, HUFFMANN and so on. Have shown
                                        excellent grinding performance in flute grinding with high stock removal
                                        capacity combined with a minimum of wheel wear.
                                </div>
                            </div>
                            <div class="product-text">
                                <h3>HYBRID BOND</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6  fadeInUp">
                        <div class="product-item">
                            <div class="product-img"  data-aos="flip-right">
                                <img src="{{ asset('img/product3 (1).jpg') }}" alt="Image">
                                <div class="product-overlay">
                                    <p>
                                        Vitrified bond has the features of free cutting with extremely hard, sharp
                                        cutting edge, high efficiency, easy control of the precision grinding, high
                                        stock removal without burning

                                        and self-dressing.
                                        Vitrified bond wheels completed the need of precision grinding at high speed and
                                        accomplish high productivity demands with low grinding cost per component. </p>
                                </div>
                            </div>
                            <div class="product-text">
                                <h3>VITRIFIED BOND</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <a href="#back-to-top" id="back-to-top-btn"><i class="fa-solid fa-up-long"></i></a>

@include('layout.footer')
@endsection
