<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lynagails Catering</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <style>
    html{
  
    background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url(../../images/backend_images/Blog3.jpg) fixed center center;
    background-size: cover;
    }
  </style>
  <!-- Favicons -->
  
  <link href="https://lynagailscaters.herokuapp.com/images/title.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    <!-- Main Stylesheet File -->
  <link href="https://lynagailscaters.herokuapp.com/css/frontend_css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="https://lynagailscaters.herokuapp.com" class="scrollto">Lynagails Catering</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="#intro"><img src="{{asset('images/backend_images/logo.png')}}" alt="" title="" /></a> -->
         <a href="https://lynagailscaters.herokuapp.com"><img src="../../images/logo2.png" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="https://lynagailscaters.herokuapp.com">Home</a></li>
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


 @yield('content')

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.8.1/jquery.hoverIntent.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.9/js/superfish.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.2/wow.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.5/isotope.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="https://lynagailscaters.herokuapp.com/js/frontend_js/main.js"></script>

  <!-- form -->
<script>

  //jQuery time
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

function testing(){
  $(".next").click(function eventclick(){
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
}

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
<script>
 $("#validate").click(function(e){

  var pass = $('#pass').val();
  var cpass = $('#cpass').val();
  var correct = true;
    if(cpass !== pass){
      swal('Confirm password must be same to your password!', '', 'error');
      e.preventDefault();
    }
    if(correct){
 
      var element = document.getElementById("validate");
      element.classList.add("next");
      return correct;
      testing();


    }
  });
</script>
<!-- /form -->
</body>
</html>
