<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse py-2" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item ">
            <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
                @foreach ($links as $link)
                <a class="dropdown-item" href="{{ route('category', $link->id) }}">{{ $link->name }}</a>
                @endforeach
               
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/')}}">Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/')}}">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin')}}">Admin Panel</a>
        </li>
        
    </ul>
    <!--  laravel code default auth code -->

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</div>
