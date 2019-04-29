<!-- header -->

  <header id="header">

    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">Lynagails Catering</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="https://lynagailscaters.herokuapp.com"><img src="../../images/logo2.png" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="https://lynagailscaters.herokuapp.com">Home</a></li>
          <li class="menu-has-children"><a href="">Services</a>
            <ul>
              <li><a href="https://lynagailscaters.herokuapp.com/basic-catering">Basic Catering</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/debut">Debut</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/wedding">Wedding</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Packages</a>
            <ul>
            <li><a href="https://lynagailscaters.herokuapp.com/cateringA">Catering Package A</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/cateringB">Catering Package B</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/cateringC">Catering Package C</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/debutA">Debut Package A</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/debutB">Debut Package B</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/debutC">Debut Package C</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/classA">Wedding Package A</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/classB">Wedding Package B</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/classC">Wedding Package C</a></li>
            </ul>
          </li>
          <li><a href="https://lynagailscaters.herokuapp.com/blog">Blog</a></li>
          @if (Auth::guard('customer')->guest())
          <li class="menu-has-children"><a href="">Account</a>
            <ul>
              <li><a href="https://lynagailscaters.herokuapp.com/customer-register">Register</a></li>
              <li><a href="https://lynagailscaters.herokuapp.com/customer-login">Login</a></li>
            </ul>
          </li>
         @else
         <li class="menu-has-children"><a href=""><i class="ion-ios-contact" style="position:relative !important;" ></i>  {{ Auth::guard('customer')->user()->fname }} </a>
            <ul>
            <li><a href="https://lynagailscaters.herokuapp.com/my-events">My Events</a></li>
         <li><a href="https://lynagailscaters.herokuapp.com/customer-profile/{{Auth::guard('customer')->user()->id}}/edit">Profile</a></li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            </ul>
         </li>
          @endif

        </ul>
      </nav>
    </div>
  </header>
        </ul>

      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
