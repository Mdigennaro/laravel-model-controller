<header>
  <div class="container text-center">
    
    <h1 class="display-1">Movie</h1>

    <ul class="nav nav-pills d-flex justify-content-center display-4 pt-5">
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'about') ? 'active' : ''}}" href="{{route('about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route:: currentRouteName() === 'contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a>
      </li>
    </ul>

  </div>
</header>