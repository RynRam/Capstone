<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lynagails Catering</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->

  <link href="{{asset('images/title.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/frontend_css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/frontend_css/jquery-ui.min.css')}}" rel="stylesheet">
  <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

  <header id="header" class="header-scrolled" style="background: #330101;padding: 20px 0;height: 72px;
">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="{{url('/')}}" class="scrollto">Lynagails Catering</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="#intro"><img src="{{asset('images/backend_images/logo.png')}}" alt="" title="" /></a> -->
         <a href="#intro"><img src="{{asset('images/logo2.png')}}" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{url('/')}}">Home</a></li>
          <li class="menu-has-children"><a href="#services">Services</a>
            <ul>
              <li><a href="{{url('/basic-catering')}}">Basic Catering</a></li>
              <li><a href="{{url('/debut')}}">Debut</a></li>
              <li><a href="{{url('/wedding')}}">Wedding</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="#">Menus</a>
            <ul>
              <li><a href="{{url('/debutA')}}">Debut A</a></li>
              <li><a href="{{url('/debutB')}}">Debut B</a></li>
              <li><a href="{{url('/debutC')}}">Debut C</a></li>
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
          <li><a href=""> {{ Auth::guard('customer')->user()->fname }} </a>
            <ul>
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


 @yield('content')
<!-- footer -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
            <h4>Payments</h4>
            <ul>

            </ul>
        </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Help & Support</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="/">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
             <li><i class="ion-ios-arrow-right"></i> <a href="/terms&condition">Terms & Conditions</a></li>
  
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <strong>Address: </strong>254 M. Gregorio St. cor Reynoso St San Antonio Cavite City Cavite City, Philippines 4100<br/>
              <strong>Phone:</strong> 0927 999 2081<br>
              <strong>Email:</strong> Lynagailscater@gmail.com<br>
            </p>

            <div class="social-links text-center">
              <a href="https://www.facebook.com/Lynagails-Catering-Services-313110160307/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/lynagailscatering/" ><i class="fa fa-instagram"></i></a>
              <a href="https://www.pinoyprofessionals.com/Food+Services/20623/lynagails-catering"><i class="fa fa-google-plus"></i></a>
        
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Join Our Mailing List</h4>
            <p>Receive invitations, updates and news</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe" disabled="true">
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- #footer -->
 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <a href="https://www.messenger.com/t/313110160307" class="call"><i class="fa fa-comment"></i></a>



  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/frontend_js/main.js')}}"></script>
  <script src="{{asset('js/frontend_js/jquery-ui.min.js')}}"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
  <script>
      var dateToday = new Date();
      var dates = $("#datepicker").datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
          minDate: dateToday
      });
</script>
  <script>

$(function() {

    $('#add').on('click', function(){
        var changed = this;
    console.log(changed);
        var select = $('#venue').val();
        $('#select').append('<option value='+select+' selected>'+select+'</option>');




    });
});

 
</script>
<script>
  $(function(){
    $('#fillform').submit(function(event){
      var verified = grecaptcha.getResponse();
      if(verified.length === 0){
        event.preventDefault();
      } 
    });
  });
</script>

</body>
</html>
