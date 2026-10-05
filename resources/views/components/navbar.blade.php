<nav class="navbar navbar-expand-lg nav-custom">
  <i class="fa-solid fa-camera-retro ms-2 i"></i>
  <p class="h4 ps-1 mt-2"><strong>PHOTO</strong>LAND</p>
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link link-custom" aria-current="page" href="{{route ('homepage')}}">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link link-custom" href="{{route ('chi-siamo')}}">Chi Siamo</a>
        </li>
        
        @guest
        <li class="nav-item">
          <a class="nav-link link-custom" href="{{route ('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-custom" href="{{route ('login')}}">Login</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
          <a class="nav-link link-custom" href="#">Benvenut* {{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-custom" href="{{route ('profilo')}}">Profilo</a>
        </li>
        <li class="nav-item">
          <form class="d-inline m-0 p-0" action="{{route ('logout')}}" method="POST">
            @csrf
            <button type="submit" class="nav-link link-custom bg-transparent border-0 p-0 d-inline-block align-baseline">Logout</button>
          </form>
        </li>
        @endauth
        
      </ul>
    </div>
  </div>
</nav>
