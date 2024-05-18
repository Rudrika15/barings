@extends('layout.master')
@section('title','Vitrified bonded')
@section('content')
<a name="back-to-top"></a>

    @include('layout.header')
    <div class="container-fluid  mt-3">
        <div class="row  p1-img">
            <img src="{{ asset('img/vitrified.jpg') }}" alt="product3 Image" class="mt-5">
        </div>
    </div>
        {{--  <div class="hr">
            <hr>
        </div>  --}}
        <div class="justify-content-center">
            <div class="container-fluid  p1-text">

                <h1 class="text-center  mt-4 product-heading"  data-aos="fade-up">
                    <b>
                        <i>
                            VITRIFIED BONDED DIAMOND & CBN
                            WHEELS
                        </i>
                    </b>
                </h1>
            </div>
            <div class="container-fluid p1-text">
                <p class="text-justify  mt-3 product-text "  data-aos="fade-up">
                    MICRO has successfully developed Vitrified bond (Ceramic bond) to meet a large-scale demand of special
                    bond
                    for PCD & PCBN inserts grinding

                    Vitrified bond has the features of free cutting with extremely hard, sharp cutting edge, high
                    efficiency,
                    easy control of the precision grinding, high stock removal without burning and self-dressing

                    Vitrified bond wheels completed the need of precision grinding at high speed and accomplish high
                    productivity demands with low grinding cost per component.
                </p>
            </div>

            {{--  <div class="hr">
                <hr>
            </div>  --}}
            <div class="container-fluid " data-aos="fade-up">
                <div class="adv d-flex justify-content-center">
                    <div class="box mt-3 ">
                        <h1 class="text-center ml-0 mt-5  font-weight-bold product-app"
                            data-aos="fade-up">Grinding Application
                        </h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid" data-aos="fade-up">
                <div class="col-md-12 d-flex  mt-5" style="justify-content: space-evenly; ">
                    <div class="card card-box" >

                        <div class="card-body">

                            <h3 class="card-title text-center  font-weight-bold product-app-sub" >Dimond</h3>
                            <div class="d-flex justify-content-center">
                            <ul class="mt-4" style="color:var(--smheading);">
                                <li>
                                    PCD, PCBN
                                </li>
                                <li>
                                    Natural Diamond, CVD
                                </li>
                                <li>
                                    Sapphire, Ruby
                                </li>
                                <li>
                                    Tungsten Carbide
                                </li>
                                <li>Tungsten carbide composite material</li>
                                <li>
                                    Ceramic, Cermet
                                </li>
                                <li>Glass, Quartz</li>
                            </ul>
                        </div>
                        </div>
                    </div>

                    <div class="card card-box" >

                        <div class="card-body">
                            <h3 class="card-title text-center  font-weight-bold product-app-sub " >CBN</h5>
                                <div class="d-flex justify-content-center">
                            <ul class="mt-4" style="color:var(--smheading);">
                                <li>
                                    High Speed Steel-HSS
                                </li>
                                <li>
                                    Hardened Carbon Steel
                                </li>
                                <li>
                                    Hardened Stainless Steels
                                </li>
                                <li>
                                    Alloy Steels
                                </li>
                                <li>
                                    Mould & Dies Steel
                                </li>
                                <li>
                                    Aerospaces Alloys
                                </li>
                                <li>
                                    Automotive parts grinding
                                </li>
                                <li>
                                    Bearing Industries
                                </li>
                                <li>
                                    Camshafts, Crankshafts
                                </li>
                            </ul>
                                </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <a href="#back-to-top" id="back-to-top-btn"><i class="fa-solid fa-up-long"></i></a>
    @include('layout.footer')
@endsection
