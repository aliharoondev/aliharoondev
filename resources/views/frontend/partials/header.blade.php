<header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ url('storage/' . $users->image) }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="{{route('landing')}}">{{$users->name}}</a></h1>
        <div class="social-links mt-3 text-center">
        @foreach($socialLinks as $socialLink)
          <a href="{{$socialLink->link}}" class="{{$socialLink->icon}}"><i class="bx bxl-{{$socialLink->icon}}"></i></a>
        @endforeach

        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{route('landing')}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{route('landing')}}#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{route('landing')}}#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="{{route('landing')}}#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="{{route('landing')}}#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="{{route('landing')}}#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
