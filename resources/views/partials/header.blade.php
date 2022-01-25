<header class="d-flex align-items-center">
  
  <div class="container d-flex justify-content-center align-items-center ">
    <h1 class="px-4">lista film</h1>

    <ul class="nav nav-pills d-flex px-4">
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" href="{{route('home')}}">Film</a>
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