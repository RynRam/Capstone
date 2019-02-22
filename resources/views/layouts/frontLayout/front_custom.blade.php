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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/frontend_css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/frontend_css/jquery-ui.min.css')}}" rel="stylesheet">
  <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

  <header id="header">
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
          <li><a href="#form">Fill Up</a></li>
          <li><a href="#services">Services</a></li>
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

  <!-- Form Venue validation -->
<script>
  



$(function(){
  $('#msform').submit(function(e) {
 
    var venue = $("select#select").find(':selected').data('capacity');
    var pax = $('#people').val();
    if(document.getElementById('agree').checked){
      if (venue < pax) {
        alert('The pax exceeds the venue limit');
     return false;
      }
    }
    else{
      alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
      console.log(venue);
     return false;
    }


  });
});

  </script>

<!-- form datepicker -->
<script>
  function addDays(dateObj, numDays) {
   dateObj.setDate(dateObj.getDate() + numDays);
   return dateObj;
  }
  $(function() {
  $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
  });
  var dateToday = addDays(new Date(), 7)
  var dates = $("#datepicker").datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      minDate: dateToday,
      format: "yy-mm-dd"
  });
</script>
<!-- /form datepicker -->
<!-- select button add value -->
<script>
  $(function() {
      $('#add').on('click', function(){
          var changed = this;
      console.log(changed);
          var select = $('#venue').val();
          $('#select').append('<option value='+ select +' selected>'+select+'</option>');
      });
  });
</script>
<!-- /select button add value -->
<!-- captcha validate -->
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
<!-- captcha validate -->
<!-- form -->
<script>

  //jQuery time
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  $(".next").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
      step: function(now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        //2. bring next_fs from the right(50%)
        left = (now * 50)+"%";
        //3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'transform': 'scale('+scale+')',
          'position': 'relative'
        });
        next_fs.css({'left': left, 'opacity': opacity});
      }, 
      duration: 800, 
      complete: function(){
        current_fs.hide();
        animating = false;
      }, 
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });

  $(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
      step: function(now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale previous_fs from 80% to 100%
        scale = 0.8 + (1 - now) * 0.2;
        //2. take current_fs to the right(50%) - from 0%
        left = ((1-now) * 50)+"%";
        //3. increase opacity of previous_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({'left': left});
        previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
      }, 
      duration: 800, 
      complete: function(){
        current_fs.hide();
        animating = false;
      }, 
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });

  // $(".submit").click(function(){
  // 	return false;
  // });
</script> 
<!-- /form -->

  <!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

{!! $calendar_details->script() !!}


</body>
</html>
