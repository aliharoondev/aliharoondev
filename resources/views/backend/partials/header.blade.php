<header class="ah-wrap">
        <a href="#" class="btn-mob-nav btnMobNav"><i class="mdi mdi-menu"></i></a>
        <div class="ah-logo">
            <img src="assets/images/logo.png" alt="" >
        </div>
        <a href="#" class="btn-sidebar-toggle btnToggleSidebar"><i class="mdi mdi-menu-open"></i></a>
        <div class="ah-right">
            <div class="ah-right-dd ah-user-dd">
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown">
                        <span class="ratio ratio-1x1">
                            <i class="mdi mdi-account text-center mdi-dark"></i>
                            <!-- <img src="assets/images/user.png" alt="" srcset=""> -->
                        </span>
                        <span class="username"> {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        <i class="mdi mdi-chevron-down d-none d-lg-block"></i>
                    </a>
                    <ul class="dropdown-menu"">
                      <li><a  class="btn btn-label btn-label-brand btn-sm btn-bold" href="#">My Profile</a></li>
                      <li> <a href="{{ route('logout') }}" class="btn btn-label btn-label-brand btn-sm btn-bold" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>
                    </ul>
                  </div>
            </div>
        </div>
    </header>

