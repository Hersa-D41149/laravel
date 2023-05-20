<nav>
    <ul>
        <li class="logo"><img src="{{ asset('img/1.jpg') }}"></li>
        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>&nbsp; Home</a></li>
        <li><a href="{{ route('create') }}"><i class="fa fa-book"></i>&nbsp; Create</a></li>
        <li><a href="#"><i class="fa fa-users"></i>&nbsp; Users</a></li>
        <li><a href="#"><i class="fa fa-picture-o"></i>&nbsp; Pictures</a></li>
        <li><a href="#"><i class="fa fa-phone"></i>&nbsp; Contact</a></li>
        @if (Auth::check())
            <form action=" {{ route('logout') }}" method="post">
                @csrf
                <li> <button type="submit">Logout</button></li>
                <li> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#aModal">er</button>
                </li>
            </form>
        @endif
    </ul>
</nav>

@include('layouts.users.a')
