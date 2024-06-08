<div class="shadow  rounded ">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top  "
        style="background-color:rgba(0,0,0,0.4); backdrop-filter:blur(4px );">

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" style="background-color: var(--heading);" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-light"></i>

        </button>
        <div class="res-logo">
            <a class="nav-item  text-white logo" href="{{route('home.index')}}"><img src="{{ asset('img/logo.png ') }}"
                    alt="image" style="width: 100px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav d-flex justify-content-start">
                <a class="nav-item  text-white logo" href="{{route('home.index')}}"><img
                        src="{{ asset('img/logo.png') }}" alt="image" style="width: 100px;"></a>
                <a class="nav-item nav-link text-white" href="{{route('home.index')}}">Home</a>
                <a class="nav-item nav-link text-white" href="{{route('about')}}">About us</a>



                <a class="btn nav-item nav-link text-white " href="{{route('product')}}">
                    Products
                </a>




                <a class="nav-item nav-link text-white" href="{{ route('contact') }}">Contact us</a>
            </div>

            <div>
                <a href="{{ route('contact') }}"><button class="btn  p-2 quote" id="quote">Request A Quote <i
                            class="fa fa-arrow-right" aria-hidden="true"></i> </button></button></a>
            </div>

        </div>
    </nav>
</div>
