<!-- header -->

  <header id="header">

    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">Lynagails Catering</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="#intro"><img src="../../images/logo2.png" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
      
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li class="menu-has-children"><a href="#services">Services</a>
            <ul>
              <li><a href="{{url('/basic-catering')}}">Basic Catering</a></li>
              <li><a href="{{url('/debut')}}">Debut</a></li>
              <li><a href="{{url('/wedding')}}">Wedding</a></li>
            </ul>
          </li>
            <!-- <li><a href="#skills">Why Us</a></li>
            <li><a href="#about">About Us</a></li>
          <li><a href="#portfolio">Catered Events</a></li> -->
          <!-- <li><a href="#feedbacks">Feedbacks</a>
          <li><a href="#contact">Contact</a></li> -->
          <li class="menu-has-children"><a href="#">Menus</a>
            <ul>
              <li><a href="{{url('/debutA')}}">Debut A</a></li>
              <li><a href="{{url('/debutB')}}">Debut B</a></li>
              
              <li><a href="{{url('/classA')}}">Wedding A</a></li>
              <li><a href="{{url('/classB')}}">Wedding B</a></li>
              <li><a href="{{url('/classC')}}">Wedding C</a></li>
            </ul>
          </li>
          <li><a href="{{url('/blog')}}">Blog</a></li>
         @if (Auth::guard('customer')->guest())
          <li class="menu-has-children"><a href="">Account</a>
            <ul>
              <li><a href="{{url('/customer-register')}}">Register</a></li>
              <li><a href="{{url('/customer-login')}}">Login</a></li>
            </ul>
          </li>
         @else
          <li class="menu-has-children"><a href=""><i class="ion-ios-contact" ></i> {{ Auth::guard('customer')->user()->fname }} </a>
            <ul>
            <li><a href="/customer-profile/{{Auth::guard('customer')->user()->id}}/edit">Profile</a></li>
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

      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
