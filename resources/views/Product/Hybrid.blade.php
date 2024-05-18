@extends('layout.master')
@section('title','Hybrid Bonded')
@section('content')
<a name="back-to-top"></a>

    @include('layout.header')
    <div class="container-fluid  mt-3">
        <div class="row  p1-img">
            <img src="{{ asset('img/hybrid.jpg') }}" alt="product2Image" class="mt-5">
        </div>
    </div>
    {{--  <div class="hr">
        <hr>
    </div>  --}}
    <div class="container-fluid p1-text">

        <h1 class="text-center  mt-4 product-heading" data-aos="fade-up">
            <b>
                <i>
                    HYBRID BONDED DIAMOND & CBN
                    WHEELS
                </i>
            </b>
        </h1>
    </div>
    <div class="container-fluid p1-text">
        <p class="text-justify  mt-3 product-text"  data-aos="fade-up">
            In cutting tools industry, Fluting, Gashing and Relief grinding process requires higher profile consistency and
            high edge quality. Fluting is most critical, time consuming and cost intensive operation which increases overall
            tool delivery cycles.

            MICRO has developed hybrid bond Diamond and CBN wheels to solve above problems. This innovative bond structured
            provides the strength and durability with maximum depth of cut as well as maintain their profile shape
            throughout the entire grinding process.

            Hybrid Wheels ensure high stock removal without compromising on the surface finish, while ensuring considerable
            reduction in cycle time.

            This bond specially used for making new and re-sharpening carbide tools like end-mills, drills and reamers only
            on CNC Grinder such as: WALTER, WIDMA, ANCA, ROLLOMATIC EWAG, etc.
        </p>

    </div>
    {{--  <div class="hr">
        <hr>
    </div>  --}}

    <div class="container-fluid " data-aos="fade-up" >
        <div class="adv d-flex justify-content-center">
            <div class="box-p2 mt-3 ">
                <h1 class="text-center  mt-3  font-weight-bold product-app" >
                    Advantages of hybrid bond Diamond abd CBN
                    wheels
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center" data-aos="fade-up">
        <div class="card mt-3 card-box" style=" width:80%; ">

            <div class="card-body">

                <ul class="mt-2" style="color:var(--smheading);">
                    <li>
                        Fully utilizing grinding wheel and machine capabilities
                    </li>
                    <li>
                        Faster grinding and takes higher depth of cut
                    </li>
                    <li>Extremely high stock removal with free cutting Longer profile retention on the wheel</li>
                    <li>
                        Lesser load on the spindle motor
                    </li>
                    <li>
                        Low frictional heat in the contact zone
                    </li>
                    <li>Superior surface finish and edge quality</li>
                </ul>

            </div>
        </div>

    </div>
    <a href="#back-to-top" id="back-to-top-btn"><i class="fa-solid fa-up-long"></i></a>
    @include('layout.footer')
@endsection




