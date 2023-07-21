<section class="header">
    <nav>
      <a href="{{ URL('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo"/>
      </a>
      <div class="nav-links" id="navLinks">
        <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
        <ul>
          <li><a href="{{ URL('about') }}">About Us</a></li>
          <li><a href="{{ URL('financialbasics')}}">Financial Basics</a></li>
          <li><a href="{{ URL('educational-resources')}}">Educational Resources</a></li>
          <li><a href="{{ URL('courses')}}">Courses</a></li>
          <li><a href="{{ URL('webinars-workshops')}}">Webinars & Workshops</a></li>
          <li><a href="{{ URL('login')}}"><i class="fa-solid fa-right-to-bracket login"></i></a></li>
      </ul>
    </div>
    <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>
  </section>