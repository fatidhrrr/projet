<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
                    </li>
                    <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/product">Products</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="/store">Store</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="/contact">Contact</a>
                    </li>
                    {{-- <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="/home">BackOffice</a>
                    </li> --}}
                    @if(Auth::check() && Auth::user()->role_id ==1)
                    <li class="nav-item px-lg-4" ><a class="nav-link text-uppercase text-expanded" href="{{route('admin.index')}}">ADMIN</a></li>
                    @else
                    @endif

                    @guest
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="{{ route('login') }}">{{ ('Login') }}</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="{{ route('register') }}">{{ ('Register') }}</a></li>
                    @endif
                    @else
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap core JavaScript -->

    @yield('content')

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Your Website 2019</p>
        </div>
    </footer>

    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
