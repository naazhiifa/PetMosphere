
<header class="p-3 bg-dark text-white">
    <nav class="container">
        {{-- <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #000;"> --}}
        <nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white"> 🐶 PetMosphere</a></li>
            </ul>
            <div class="text-end">
                @guest
                <a href="{{ route('login')}}" class="btn btn-light btn-rounded ">Login</a>
                <a href="{{ route('register')}}" class="btn btn-primary btn-rounded">Sign Up</a>
                @else
                <a href="{{ url('/petpet') }}" class="btn btn-success btn-rounded">Product</a>
                <a href="{{ route('logout')  }}" class="btn btn-secondary btn-rounded" onclick= "event.preventDefault();
                document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                @endguest
                <form action="{{ route('logout')}}" id="logout-form" method="POST">
                @csrf  
                </form>  
            </div>
        </nav>
        </nav>
    </nav>
</header>


