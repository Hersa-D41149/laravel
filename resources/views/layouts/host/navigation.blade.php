<nav class="navbar navbar-expand-lg navbar-light shadow fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ Route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                {{-- Nav drop down --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Dropdown </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                {{-- End of Nav drop down --}}
                <li>
                    <div class="search-box">
                        <div class="search-input">
                            <input class="input" type="search" placeholder="NeQuiz kode" aria-label="Search" />
                        </div>
                        <div class="search-icon">
                            <a href=""> <i class="bi bi-search"></i></a> </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-end">
                        @if (Auth::check())
                            <form action=" {{ route('logout') }}" method="post">
                                @csrf
                                <div class="dropdown me-1">

                                    <button>
                                        <a href="{{ route('crud') }}" class="bi bi-plus-circle">Create</a>
                                    </button>


                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                        Offset
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">

                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <button
                                                    type="submit">Logout</button></a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>

                                    </ul>
                                </div>
                            </form>
                        @else
                            <!-- Button trigger modal Login -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</button>
                            <!-- Button trigger modal Register -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#registerModal">Register</button>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Login-->
@include('auth.login')
<!-- End Modal Login -->

<!-- Modal Register-->
@include('auth.register')
{{-- End Modal Register --}}
