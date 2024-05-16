@extends('layout.master')
@section('title','Vitrified bonded')
@section('content')
    @include('layout.header')
    <div class="container-fluid  mt-3">
        <div class="row  p1-img">
            <img src="{{ asset('img/vitrified.jpg') }}" alt="product3 Image" class="mt-3">
        </div>
    </div>
        <div class="hr">
            <hr>
        </div>
        <div class="justify-content-center">
            <div class="container-fluid  p1-text">

                <h1 class="text-center  mt-4" style="color: #ff6600;" data-aos="fade-up">
                    <b>
                        <i>
                            VITRIFIED BONDED DIAMOND & CBN
                            WHEELS
                        </i>
                    </b>
                </h1>
            </div>
            <div class="container-fluid p1-text">
                <p class="text-justify  mt-3" style="color: rgb(50, 28, 85);" data-aos="fade-up">
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

            <div class="hr">
                <hr>
            </div>
            <div class="container-fluid" data-aos="fade-up">
                <div class="adv d-flex justify-content-center">
                    <div class="box mt-3 ">
                        <h1 class="text-center ml-0 mt-1  font-weight-bold" style="color:rgb(50, 28, 85);"
                            data-aos="fade-up">Grinding Application
                        </h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid" data-aos="fade-up">
                <div class="col-md-12 d-flex  mt-5" style="justify-content: space-evenly; ">
                    <div class="card " style=" width:30%; background-color:#ff6600;  ">

                        <div class="card-body">

                            <h3 class="card-title text-center  font-weight-bold" style="color:rgb(50, 28, 85);">Dimond</h3>
                            <div class="d-flex justify-content-center">
                            <ul class="mt-4" style="color:rgb(50, 28, 85);">
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

                    <div class="card" style="width:30%; background-color:#ff6600; ">

                        <div class="card-body">
                            <h3 class="card-title text-center  font-weight-bold " style="color:rgb(50, 28, 85);">CBN</h5>
                                <div class="d-flex justify-content-center">
                            <ul class="mt-4" style="color:rgb(50, 28, 85);">
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
                {{--  <div class="row app">
                    <div class="col-md-6 di mt-5 text-center text-justify" data-aos="fade-right">
                        <h3 class="diamond ml-5" style="color: #ff6600;">DIAMOND</h3>
                        <ul class="inline-list text-justify mt-2" style="color: rgb(50, 28, 85);">
                            <li>
                                PCD, PCBN
                            </li>
                            <li>
                                Natural Diamond, CVD,
                            </li>
                            <li>
                                Sapphire, Ruby Tungsten Carbide,
                            </li>
                            <li>Tungsten carbide composite material</li>
                            <li>
                                Ceramic, Cermet
                            </li>
                            <li>Glass, Quartz</li>
                        </ul>
                    </div>
                    <div class="col-md-6 di di-vertical  mt-5 text-center text-justify" data-aos="fade-left">
                        <h3 class="cbnp3 ml-5">CBN</h3>
                        <ul class="inline-list text-justify mt-2 p3-list" style="color: rgb(50, 28, 85);">
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
                </div>  --}}
            </div>
        </div>

    @include('layout.footer')
@endsection
