<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title', 'Wealth-Minds')</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/main.js"></script>


</head>
<body>
<header>
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
          {{-- <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
          <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
          <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
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
      </ul>
    </div>
    <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="hero-box">
    <h1>@yield('heading', 'Default Heading')</h1>
    <p>@yield('paragraph', 'Default Content')</p>
    <div>
        <button type="button"><span></span>Find out more</button>
        <button type="button"><span></span>Enrol Now</button>
      </div>
    </div>
</div>
</header>

@yield('content')

  <footer>
   
  </footer>
</body>

</html>