@extends('layout.master')
@section('title','Product')
@section('content')
@include('layout.header')
<a name="back-to-top"></a>

<div class="page-header" style="background-image: url('img/c1.jpg');" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    Products
                </h2>
            </div>
            <div class="col-12">
                <a href="{{route('home.index')}}">Home</a>
                <a href="{{route('about')}}">Products</a>
            </div>
        </div>
    </div>
</div>

{{--  <div class="hr">
    <hr>
</div>  --}}
<div class="product" >
    <div class="container">
        <div class="section-header text-center">
            <h5>
                <b>Our Products</b>
            </h5>
            <h2>
                <b>We Provide Products</b>
            </h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6  fadeInUp" data-aos="flip-right">
                <a href="{{route('Resin')}}">
                    <div class="product-item">
                        <div class="product-img">
                            <img src="{{ asset('img/product1 (1).jpg') }}" alt="Resin Image">
                        </div>
                        <div class="product-text">
                            <h3>RESIN BOND</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6  fadeInUp" data-aos="flip-right">
                <a href="{{route('Hybrid')}}">
                    <div class="product-item">
                        <div class="product-img">
                            <img src="{{ asset('img/product2 (1).jpg') }}" alt="Hybrid Image">
                        </div>
                        <div class="product-text">
                            <h3>HYBRID BOND</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6  fadeInUp" data-aos="flip-right">
                <a href="{{route('Vitrified')}}">
                    <div class="product-item">
                        <div class="product-img">
                            <img src="{{ asset('img/product3 (1).jpg') }}" alt="Vitrified Image">
                        </div>
                        <div class="product-text">
                            <h3>VITRIFIED BOND</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

{{--  <div class="hr">
    <hr>
</div>  --}}
<div class="text" data-aos="fade-down">
    <div class="shape text-center mt-5 ">
        <h1 class="font-weight-bold ">
            Standard Shape Of Diamond & CBN
            Wheels
        </h1>
    </div>
</div>
<div class="slider-container " data-aos="fade-up">
    <div class="slider mt-5" id="slider">
        <img src="{{ asset('img/11a2.jpg') }}" alt="Image 1">
        <img src="{{ asset('img/11v2.jpg') }}" alt="Image 2">
        <img src="{{ asset('img/11v9.jpg') }}" alt="Image 3">
        <img src="{{ asset('img/12a2.jpg') }}" alt="Image 4">
        <img src="{{ asset('img/12a2s.jpg') }}" alt="Image 5">
        <img src="{{ asset('img/12v9.jpg') }}" alt="Image 6">
        <img src="{{ asset('img/15v9.jpg') }}" alt="Image 7">
        <img src="{{ asset('img/1a1.jpg') }}" alt="Image 8">
        <img src="{{ asset('img/1ee1.jpg') }}" alt="Image 9">
        <img src="{{ asset('img/1ff1.jpg') }}" alt="Image 10">
        <img src="{{ asset('img/1v1.jpg') }}" alt="Image 11">
        <img src="{{ asset('img/4a2.jpg') }}" alt="Image 12">
        <img src="{{ asset('img/4et9.jpg') }}" alt="Image 13">
        <img src="{{ asset('img/6a2.jpg') }}" alt="Image 14">
        <img src="{{ asset('img/6a9.jpg') }}" alt="Image 15">
        <img src="{{ asset('img/9a3.jpg') }}" alt="Image 16">

    </div>
    <button class="prev btn btn-black " onclick="moveSlide(-1)">&#10094;</button>
    <button class="next btn btn-black " onclick="moveSlide(1)">&#10095;</button>
</div>

{{--  <div class="hr mt-5">
    <hr>
</div>  --}}

<div class="text" data-aos="fade-up" >
    <div class="shape text-center mt-5 ">
        <h1 class="font-weight-bold ">
            Selection of Grit Size DIAMOND/CBN
        </h1>
    </div>
</div>
<div class="all-table">
    <div class="table mt-5 row p-3" data-aos="fade-in">
        <div class="col-md-6">
            <table class="table table-bordered text-center  custom-table-border ">
                <thead>
                    <tr>
                        <th scope="col" rowspan="2">Application</th>
                        <th scope="col" rowspan="2">US STANDARD MESH</th>
                        <th scope="col" colspan="2">
                            FEPA STANDARD
                        </th>
                    </tr>
                    <tr>
                        <th>Diamond</th>
                        <th>CBN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="4">ROUGH GRINDING</td>
                        <td>60/70</td>
                        <td>D251</td>
                        <td>B251</td>
                    </tr>
                    <tr>
                        <td>70/80</td>
                        <td>D213</td>
                        <td>B213</td>
                    </tr>
                    <tr>
                        <td>80/100</td>
                        <td>D181</td>
                        <td>B181</td>
                    </tr>
                    <tr>
                        <td>100/120</td>
                        <td>D151</td>
                        <td>B151</td>
                    </tr>
                    <tr>
                        <td rowspan="4">MEDIUM GRINDING</td>
                        <td>120/140</td>
                        <td>D126</td>
                        <td>B126</td>
                    </tr>
                    <tr>
                        <td>140/170</td>
                        <td>D107</td>
                        <td>B107</td>
                    </tr>
                    <tr>
                        <td>170/200</td>
                        <td>D91</td>
                        <td>B91</td>
                    </tr>
                    <tr>
                        <td>200/230</td>
                        <td>D76</td>
                        <td>B76</td>
                    </tr>
                    <tr>
                        <td rowspan="3">FINISHING</td>
                        <td>230/270</td>
                        <td>D64</td>
                        <td>B64</td>
                    </tr>
                    <tr>
                        <td>270/325</td>
                        <td>D54</td>
                        <td>B54</td>
                    </tr>
                    <tr>
                        <td>325/400</td>
                        <td>D46</td>
                        <td>B46</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6" data-aos="fade-in">
            <table class="table table-bordered text-center  custom-table-border ">
                <thead>
                    <tr>
                        <th scope="col" rowspan="2">Application</th>
                        <th scope="col" rowspan="2">MICRO MESH SIZES(μm)</th>
                        <th scope="col" colspan="2">
                            MICRON GRIT SIZE
                        </th>
                    </tr>
                    <tr>
                        <th>Diamond</th>
                        <th>CBN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="6">LAPPING</td>
                        <td>30-40</td>
                        <td>D35</td>
                        <td>B35</td>
                    </tr>
                    <tr>
                        <td>25-35</td>
                        <td>D30</td>
                        <td>B30</td>
                    </tr>
                    <tr>
                        <td>20-30</td>
                        <td>D25</td>
                        <td>B25</td>
                    </tr>
                    <tr>
                        <td>15-25</td>
                        <td>D20</td>
                        <td>B20</td>
                    </tr>
                    <tr>
                        <td>10-20</td>
                        <td>D15</td>
                        <td>B15</td>
                    </tr>
                    <tr>
                        <td>6-12</td>
                        <td>D10</td>
                        <td>B10</td>
                    </tr>
                    <tr>
                        <td rowspan="3">POLISHING</td>
                        <td>4-8</td>
                        <td>D7</td>
                        <td>B7</td>
                    </tr>
                    <tr>
                        <td>2-4</td>
                        <td>D3</td>
                        <td>B3</td>
                    </tr>
                    <tr>
                        <td>1-2</td>
                        <td>D1</td>
                        <td>B1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table mt-5 p-3 row" data-aos="fade-in">
        <div class="col-md-6 " >
            <div class="ml-2" >
                <h2>Wheel PeriPheral Speed:</h2>
                <h5>Wheel Speed in meters per second (M/S)</h5>
            </div>
            <div style="overflow: scroll;" >
                <table class="table table-bordered text-center  big custom-table-border " >
                    <thead>
                        <tr>
                            <th scope="col">mm</th>
                            <th scope="col">8 m/s</th>
                            <th scope="col">12 m/s</th>
                            <th scope="col">16 m/s</th>
                            <th scope="col">18 m/s</th>
                            <th scope="col">20 m/s</th>
                            <th scope="col">22 m/s</th>
                            <th scope="col">26 m/s</th>
                            <th scope="col">30 m/s</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                10
                            </td>
                            <td>
                                15280
                            </td>
                            <td>
                                22930
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15
                            </td>
                            <td>
                                10170
                            </td>
                            <td>
                                15300
                            </td>
                            <td>
                                20200
                            </td>
                            <td>
                                22900
                            </td>
                            <td>
                                25500
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                        </tr>
                        <tr>
                            <td>
                                20
                            </td>
                            <td>
                                7650
                            </td>
                            <td>
                                11500
                            </td>
                            <td>
                                15300
                            </td>
                            <td>
                                17200
                            </td>
                            <td>
                                19000
                            </td>
                            <td>
                                21200
                            </td>
                            <td>
                                25000
                            </td>
                            <td>
                                28750
                            </td>
                        </tr>
                        <tr>
                            <td>
                                25
                            </td>
                            <td>
                                6125
                            </td>
                            <td>
                                9180
                            </td>
                            <td>
                                12250
                            </td>
                            <td>
                                13775
                            </td>
                            <td>
                                15300
                            </td>
                            <td>
                                16850
                            </td>
                            <td>
                                19900
                            </td>
                            <td>
                                23000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                50
                            </td>
                            <td>
                                3050
                            </td>
                            <td>
                                4580
                            </td>
                            <td>
                                6100
                            </td>
                            <td>
                                6880
                            </td>
                            <td>
                                7650
                            </td>
                            <td>
                                8400
                            </td>
                            <td>
                                9940
                            </td>
                            <td>
                                11450
                            </td>
                        </tr>
                        <tr>
                            <td>
                                75
                            </td>
                            <td>
                                2040
                            </td>
                            <td>
                                3060
                            </td>
                            <td>
                                4080
                            </td>
                            <td>
                                4580
                            </td>
                            <td>
                                5100
                            </td>
                            <td>
                                5600
                            </td>
                            <td>
                                6620
                            </td>
                            <td>
                                7650
                            </td>
                        </tr>
                        <tr>
                            <td>
                                90
                            </td>
                            <td>
                                1700
                            </td>
                            <td>
                                2550
                            </td>
                            <td>
                                3400
                            </td>
                            <td>
                                3820
                            </td>
                            <td>
                                4250
                            </td>
                            <td>
                                4670
                            </td>
                            <td>
                                5520
                            </td>
                            <td>
                                6370
                            </td>
                        </tr>
                        <tr>
                            <td>
                                100
                            </td>
                            <td>
                                1530
                            </td>
                            <td>
                                2290
                            </td>
                            <td>
                                3060
                            </td>
                            <td>
                                3440
                            </td>
                            <td>
                                3825
                            </td>
                            <td>
                                4200
                            </td>
                            <td>
                                4970
                            </td>
                            <td>
                                5730
                            </td>
                        </tr>
                        <tr>
                            <td>
                                125
                            </td>
                            <td>
                                1220
                            </td>
                            <td>
                                1830
                            </td>
                            <td>
                                2440
                            </td>
                            <td>
                                2750
                            </td>
                            <td>
                                3050
                            </td>
                            <td>
                                3355
                            </td>
                            <td>
                                3970
                            </td>
                            <td>
                                4600
                            </td>
                        </tr>
                        <tr>
                            <td>
                                150
                            </td>
                            <td>
                                1020
                            </td>
                            <td>
                                1530
                            </td>
                            <td>
                                2020
                            </td>
                            <td>
                                2290
                            </td>
                            <td>
                                2550
                            </td>
                            <td>
                                2800
                            </td>
                            <td>
                                3300
                            </td>
                            <td>
                                3800
                            </td>
                        </tr>
                        <tr>
                            <td>
                                200
                            </td>
                            <td>
                                765
                            </td>
                            <td>
                                1145
                            </td>
                            <td>
                                1530
                            </td>
                            <td>
                                1720
                            </td>
                            <td>
                                1910
                            </td>
                            <td>
                                2120
                            </td>
                            <td>
                                2490
                            </td>
                            <td>
                                2875
                            </td>
                        </tr>
                        <tr>
                            <td>
                                250
                            </td>
                            <td>
                                610
                            </td>
                            <td>
                                920
                            </td>
                            <td>
                                1225
                            </td>
                            <td>
                                1380
                            </td>
                            <td>
                                1525
                            </td>
                            <td>
                                1685
                            </td>
                            <td>
                                1990
                            </td>
                            <td>
                                2300
                            </td>
                        </tr>
                        <tr>
                            <td>
                                300
                            </td>
                            <td>
                                510
                            </td>
                            <td>
                                765
                            </td>
                            <td>
                                1020
                            </td>
                            <td>
                                1145
                            </td>
                            <td>
                                1275
                            </td>
                            <td>
                                1400
                            </td>
                            <td>
                                1660
                            </td>
                            <td>
                                1900
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="col-md-6" data-aos="fade-in">
            <div>
                <h2>Grinding Parameters:</h2>
                <h5>For resin Diamond/CBN Wheels</h5>
            </div>
            <div style="overflow: scroll;"  >
                <table class="table table-bordered   custom-table-border ">
                    <thead>
                        <tr>
                            <th scope="col">GRINDING PROCESS</th>
                            <th scope="col">PARAMETER</th>
                            <th scope="col">For DIAMOND</th>
                            <th scope="col">For CBN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3">Surface Grinding</td>
                            <td>Cutting Speed (m/s)</td>
                            <td>23-26</td>
                            <td>23-28</td>
                        </tr>
                        <tr>

                            <td rowspan="2">Depth of cut (m/s) <span style="margin-left: 20px;">Roughing
                                    Finishing</span></td>
            </div>
            <td>0.05-0.08</td>
            <td>0.06-0.1</td>
            </tr>
            <tr>
                <td>0.002-0.02</td>
                <td>0.005-0.03</td>
            </tr>
            <tr>
                <td rowspan="4">
                    External Cylindrical Grinding
                </td>
                <td>Cutting speed (m/s)</td>
                <td>23-26</td>
                <td>23-28</td>
            </tr>
            <tr>
                <td>Workpiece Speed(m/min)</td>
                <td>10-20</td>
                <td>10-20</td>

            </tr>
            <tr>
                <td rowspan="2">Depth of cut/in feed (mm)<span style="margin-left: 5px;">Roughing Finishing</span>
                </td>


                <td>0.03-0.05</td>
                <td>0.04-0.08</td>
            </tr>
            <tr>
                <td>0.03-0.02</td>
                <td>0.04-0.03</td>
            </tr>


            <tr>
                <td rowspan="4"> Internal Grinding</td>
                <td>Cutting speed (m/s)</td>
                <td>15-20</td>
                <td>18-25</td>
            </tr>
            <tr>
                <td>Workpiece Speed(m/min)</td>
                <td>25-30</td>
                <td>30-35</td>

            </tr>
            <tr>
                <td rowspan="2">Depth of cut/in feed (mm)<span style="margin-left: 5px;">Roughing Finishing</span>
                </td>


                <td>0.003-0.05</td>
                <td>0.003-0.03</td>
            </tr>
            <tr>
                <td>0.003-0.008</td>
                <td>0.003-0.05</td>
            </tr>
            <tr>
                <td rowspan="4">Tool & Cutter Grinding</td>
                <td>Cutting Speed(m/s)</td>
                <td>15-18</td>
                <td>18-30</td>
            </tr>
            <tr>
                <td>Table Speed(m/min)</td>
                <td>2-3</td>
                <td>3-5</td>
            </tr>
            <tr>
                <td> Workpiece Speed(m/min)</td>
                <td>25-30</td>
                <td>30-35</td>
            </tr>
            <tr>
                <td>Depth of cut/in feed(mm)</td>
                <td>0.02-0.3</td>
                <td>0.03-0.05</td>
            </tr>
            <tbody>
                </table>
        </div>
    </div>
</div>
<a href="#back-to-top" id="back-to-top-btn"><i class="fa-solid fa-up-long"></i></a>
@include('layout.footer')
@endsection
