<div class="header">
    <nav>
      <a href="{{ URL('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo"/>
      </a>
      <div class="nav-links" id="navLinks">
        <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
        <ul>
          <li><a href="{{ URL('about') }}">{{ __('About Us') }}</a></li>
          <li><a href="{{ URL('financialbasics')}}">{{ __('Financial Basics') }}</a></li>
          <li><a href="{{ URL('educational-resources')}}">{{ __('Educational Resources') }}</a></li>
          <li><a href="{{ URL('courses')}}">{{ __('Courses') }}</a></li>
          <li><a href="{{ URL('webinars-workshops')}}">{{ __('Webinars & Workshops') }}</a></li>
          <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
          <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
      </ul>
    </div>
    <i class="fa-solid fa-bars" onclick="showMenu()"></i>
     <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </nav>
</div>