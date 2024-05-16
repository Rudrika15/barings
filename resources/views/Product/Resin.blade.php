@extends('layout.master')
@section('title', 'Resin Bonded')
@section('content')
<a name="back-to-top"></a>

    @include('layout.header')
    <div class="container-fluid  mt-3">
        <div class="row  p1-img">

            <img src=" {{ asset('img/product1.jpg') }}" alt="Vision Image" class="mt-3">
        </div>
    </div>
    <div class="hr">
        <hr>
    </div>
    <div class="container-fluid p1-text">

        <h1 class="text-center  mt-4" style="color: #ff6600;">
            <b>
                <i>
                    RESIN BONDED DIAMOND & CBN
                    WHEELS
                </i>
            </b>
        </h1>
    </div>
    <div class="container-fluid  ">
        <p class="text-justify p1-text  mt-3" style="color: rgb(50, 28, 85);">
            Resin bond ideally used for dry and wet
            grinding. It has excellent grinding ability, surface finish and minimal chipping. Resin bond
            products have the features of good self-sharpening, sharp cutting, High removal rates, high
            efficiency, low roughness of work piece surface, few heat generating and without burning workpiece.
            It has free cutting power and reduce workpiece damage even at high removal rate.Resin bond normally used in
            automobiles, aerospace, defence, watch industries, glass industries, wood working
            industries, moulds & dies.
        </p>

    </div>
    <div class="hr">
        <hr>
    </div>

    <div class="container-fluid mt-4">
        <div class="adv d-flex justify-content-center">
            <div class="box mt-3 ">
                <h1 class="text-center ml-0 mt-1 font-weight-bold" style="color: rgb(50, 28, 85);">Grinding Application</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex  mt-5" style="justify-content: space-evenly; " data-aos="fade-up">
                <div class="card " style=" width:40%; background-color:#ff6600;  ">

                    <div class="card-body">
                        <h3 class="card-title text-center  font-weight-bold" style="color:rgb(50, 28, 85);">Dimond</h3>
                        <div class="d-flex  justify-content-center">
                        <ul class="mt-3" style="color:rgb(50, 28, 85);">
                            <li class="child-li">Tungsten carbide</li>
                            <li class="child-li">Carbide/steel combination</li>
                            <li class="child-li">Ceramics and tile grinding</li>
                            <li class="child-li">Ferrites,Graphite</li>
                            <li class="child-li">Glass,Glass sheet,Optical glass</li>
                            <li class="child-li">Cermet</li>
                        </ul>
                    </div>

                    </div>
                </div>

                <div class="card" style="width:40%; background-color:#ff6600; ">

                    <div class="card-body">
                        <h3 class="card-title text-center  font-weight-bold " style="color:rgb(50, 28, 85);">CBN</h5>
                            <div class="d-flex  justify-content-center">
                        <ul class="mt-3" style="color:rgb(50, 28, 85);">
                            <li class="child-li">
                                High Speed Steel-HSS
                            </li>
                            <li class="child-li">
                                Hardened steel alloys
                            </li>
                            <li class="child-li">
                                Cast Iron Tool Steels (Un hardened)
                            </li>
                            <li class="child-li">
                                Dies and moulds
                            </li>
                            <li class="child-li">Carbon and alloy steel</li>
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
