<header>

    @guest
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid px-4">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div>
                        <img src="{{url('/img/logo-annidato-bn.png')}}" alt="logo-dvora" class="logo-dvora">
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">

            <ul class="navbar-nav align-self-right">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
            </ul>
            </div>
        </div>
    </nav>
@else
<nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
     <div class="container-fluid px-4">
         <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <div>
                 <img src="{{url('/img/logo-annidato-nb.png')}}" alt="logo-dvora" class="logo-dvora">
            </div>
        </a>

        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav align-self-right">
                <li class="nav-item dropdown nav-link dropdown-toggle" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}

                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">{{ __('Logout') }} </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                         </form>

                </li>
            </ul>
        </div>
    </div>
</nav>
 @endguest

</header>
