<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lynagails Catering</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
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
         <a href="https://lynagailscaters.herokuapp.com"><img src="../../images/logo2.png" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="https://lynagailscaters.herokuapp.com">Home</a></li>
          <li><a href="#form">Fill Up</a></li>
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


 @yield('content')
 
<!-- footer -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-4 col-md-6 footer-links">
            <h4>Site Map</h4>
            <ul>
            <li><i class="ion-ios-arrow-right"></i><a href="https://lynagailscaters.herokuapp.com/basic-catering">Basic Catering</a></li>
              <li><i class="ion-ios-arrow-right"></i><a href="https://lynagailscaters.herokuapp.com/debut">Debut Catering</a></li>
              <li><i class="ion-ios-arrow-right"></i><a href="https://lynagailscaters.herokuapp.com/wedding">Wedding Catering</a></li>
              <li><i class="ion-ios-arrow-right"></i><a href="https://lynagailscaters.herokuapp.com/blog">Blog</a></li>
            </ul>
        </div>


          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Help & Support</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://lynagailscaters.herokuapp.com/privacy&policy">Privacy Policy</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://lynagailscaters.herokuapp.com/#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://lynagailscaters.herokuapp.com/terms&condition">Terms & Conditions</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://lynagailscaters.herokuapp.com/feedback">Feedbacks</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
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
<!-- 
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Mailing List</h4>
            <p>Receive invitations, updates and news</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe" disabled="true">
            </form>
          </div> -->

        </div>
      </div>
    </div>
  </footer><!-- #footer -->
 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<a href="https://www.messenger.com/t/313110160307" class="call"><i class="fa fa-comment"></i></a>



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
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>

  <script>
 $("#validate").click(function(e){
  e.preventDefault();
  var pass = $('#pass').val();
  var cpass = $('#cpass').val();
  var email = $('#email').val();
  var correct = true;

    if(!email){
      swal('Please input valid email and not empty!', '', 'error');
       correct = false;
    }else if(!pass){
      swal('Password cannot be empty', '', 'error');
       correct = false;
    }else if(cpass !== pass && !email){
      swal('Confirm password must be same to your password and input is not empty or invalid!', 'ex.johndoe@gmail.com', 'error');
       correct = false;
    }else if(cpass !== pass){
      swal('Confirm password must be same to your password and input is not empty or invalid!', '', 'error');
       correct = false;
    }else{
      var element = document.getElementById("validate");
      element.classList.add("next");
    }


    if(correct){
     

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
    }
  });
</script>
  <!-- Form Venue validation -->
<script>
 
 $(function(){
   $('#showPrice').click(function(e) {
    
     e.preventDefault();
     var date = $('#datepicker').val();
     var valid = true;
     var reserved =$.ajax({
      type: "GET",
      url: "/reserved",
      data: date,
      cache: false,
      datatype:'json',
      success: function(data){
        var date = $('#datepicker').val();
        
        for (let x = 0; x < data.length; x++) {
          if(data[x].eventdate == date){
        swal("Date is already reserved", "", "error");
           valid = false; 
          }else{
            var element = document.getElementById("showPrice");
            element.classList.add("next");
          }
          
        }
        if(valid){
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
        }
      }
    });

   });
 });
 
</script>
   

<!-- show price -->
<script>

$(function(){
   $('#showPrice').click(function(e) {
     var venue = $('#select').val();
    //  var package = $('#package').val();
    //  var pax =  $('#people').val();
     var reserved =$.ajax({
      type: "GET",
      url: "/reservedvenue",
      data: venue,
      cache: false,
      datatype:'json',
      success: function(data){
        
        let venue = $('#select').val();
       
        for (let x = 0; x < data.length; x++) {
          if(data[x].id == venue){
            $('#venue_price').val(data[x].price);
            
          }
          
        }

      }
    });
   });

 });
 


</script>


<script>

$(function(){
   $('#showPrice').click(function(e) {
    
     var package = $('#package').val();
     var pax =  $('#people').val();
     var reserved =$.ajax({
      type: "GET",
      url: "/reservedpackage",
      data: package,
      cache: false,
      datatype:'json',
      success: function(data){
        
        let package = $('#package').val();
        let pax =  $('#people').val();
        let venue = $('#venue_price').val();
       
        for (let x = 0; x < data.length; x++) {
          if(data[x].id == package){
          let data_total = (pax * data[x].price); 
            $('#package_price').val(data_total);
            let total_amount = parseInt(data_total) + parseInt(venue);  
            $('#total_price').val(total_amount);
            
          }
          
        }

      }
    });
   });

 });
 


</script>

<!-- show price -->

<script>
$(function(){
  $('#msform').submit(function(e) {
 
    var venue = $("select#select").find(':selected').data('capacity');
    var pax = $('#people').val();
    if(document.getElementById('agree').checked){
      if (venue < pax) {
        swal("The pax exceeds the venue limit", "", "error");
     return false;
      }else if(pax < 20 ) {
     swal("The minimum pax is 20 for any event", "", "error");
     return false;
   }
    }
    else{
      swal("Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy", "", "warning");
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
  $("#datepicker").datepicker({ dateFormat: 'yyyy-mm-dd' });
  });
  var dateToday = addDays(new Date(), 7)
  var dates = $("#datepicker").datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      minDate: dateToday,
      format: "yyyy-mm-dd"
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

<script>
var width = $('.g-recaptcha').parent().width();
if (width < 552) {
	var scale = width / 552;
	$('.g-recaptcha').css('transform', 'scale(' + scale + ')');
	$('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
	$('.g-recaptcha').css('transform-origin', '0 0');
	$('.g-recaptcha').css('-webkit-transform-origin', '0 0');
}
</script>
  <!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

{!! $calendar_details->script() !!}


</body>
</html>
