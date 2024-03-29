<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Brand</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-shopping-cart"></i> Shopping Cart</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> User Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check())
            <a class="dropdown-item" href="{{ route('user.profile')}}">UserProfile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('user.logout')}}">Logout</a>
          @else
            <a class="dropdown-item" href="{{ route('user.signup')}}">Signup</a>
            <a class="dropdown-item" href="{{ route('user.signin')}}">Signin</a>
          @endif
        </div>
      </li>
    </ul>
  </div>
</nav>