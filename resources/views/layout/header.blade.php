
<div class="shadow   mb-5 bg-white rounded ">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top  " style="background-color:rgb(50, 28, 85)">

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" style="background-color: #ff6600;" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-light"></i>

        </button>
           <div class="res-logo">
            <a class="nav-item  text-white logo" href="{{route('home.index')}}"><img src="{{ asset('img/logo.png


                ') }}" alt="image"
                style="width: 100px;"></a>
           </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav d-flex justify-content-start">
                <a class="nav-item  text-white logo" href="{{route('home.index')}}"><img src="{{ asset('img/logo.png') }}" alt="image"
                        style="width: 100px;"></a>
                <a class="nav-item nav-link text-white" href="{{route('home.index')}}">Home</a>
                <a class="nav-item nav-link text-white" href="{{route('about')}}">About us</a>
                <!-- <a class="nav-item nav-link text-white" href="{{route('product')}}">Products</a> -->
                <!-- <div class="nav-item dropdown">
            <a class="nav-link text-white" href="{{route('product')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{route('Resin')}}">RESIN BONDED DIAMOND & CBN WHEELS</a></li>
                <li><a class="dropdown-item" href="{{route('Hybrid')}}">HYBRID BONDED DIAMOND & CBN WHEELS</a></li>
                <li><a class="dropdown-item" href="{{route('Vitrified')}}">VITRIFIED BONDED DIAMOND & CBN WHEELS</a></li>
            </ul>
        </div> -->

                <div class="dropdown">
                    <a class="btn nav-item text-white dropdown-toggle" href="{{route('product')}}" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('Resin')}}">RESIN BONDED DIAMOND & CBN WHEELS</a></li>
                        <li><a class="dropdown-item" href="{{route('Hybrid')}}">HYBRID BONDED DIAMOND & CBN WHEELS</a></li>
                        <li><a class="dropdown-item" href="{{route('Vitrified')}}">VITRIFIED BONDED DIAMOND & CBN WHEELS</a>
                        </li>
                    </ul>
                </div>

                <a class="nav-item nav-link text-white" href="{{ route('contact') }}">Contact us</a>
            </div>

            <div>
                <a href="{{ route('contact') }}"><button class="btn  p-2 quote" id="quote">Request A Quote <i
                            class="fa fa-arrow-right" aria-hidden="true"></i> </button></button></a>
            </div>

        </div>
    </nav>
</div>




