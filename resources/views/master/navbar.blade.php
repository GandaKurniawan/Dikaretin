<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
      </form>
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">{{Auth::user()->name}}<span class="caret"></span></div></a>
        <div class="dropdown-menu dropdown-menu-right">
          @if(Auth::user()->status_id!=2)
        <a href="{{Route('profil',[Auth::user()->id])}}" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a>
          <a href="{{Route('Password',[Auth::user()->id])}}" class="dropdown-item has-icon"><i class="fas fa-unlock-alt"></i>Ganti Password</a>
          @endif
          <a href="{{Route('logout')}}" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>