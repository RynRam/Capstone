@extends('layouts.frontLayout.front_custom_account')
@section('content')
@include('front.partials.accountStyle')
 <main id="main">
  	  <section id="form">
        <div class="container">

          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3 style="color:#fff;">Registration Form</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>

         
            <form id="msform"  action="{{action('CustomerRegisterController@store')}}" method="post" role="form"  onsubmit="if(document.getElementById('agree').checked) {   swal('Thank you!', '', 'success');  return true; } else { swal('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy', '', 'info'); return false; }" >
	 {{csrf_field()}}
                <!-- progressbar -->
                <ul id="progressbar">
                  <li class="active">Account Setup</li>
                  <li>Social Profiles</li>
                  <li>Personal Details</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                  <h2 class="fs-title">Create your account</h2>
                  <h3 class="fs-subtitle">Use valid accounts</h3>
                  <input type="email" name="email" placeholder="Email (ex.johndoe@yahoo.com)"  id="email" required/>
                  <input type="password" name="password" placeholder="Password" id="pass" required/>
                  <input type="password" name="cpass" placeholder="Confirm Password" id="cpass" required/>
                  <input type="button" name="next" class="action-button" value="Next"  id="validate"/>
                </fieldset>
                <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                  <h3 class="fs-subtitle">We will never sell it</h3>
                  <input type="text" name="fname" placeholder="First Name" pattern="^[a-zA-Z ]*$" required />
                  <input type="text" name="lname" placeholder="Last Name" pattern="^[a-zA-Z ]*$" required />
                  <input type="text" name="contact" placeholder="Phone" required />
                  <textarea name="address" placeholder="Address" required></textarea>
                  <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                  <h2 class="fs-title">Social Profiles</h2>
                  <h3 class="fs-subtitle">Your presence on the social network</h3>
                  <input type="text" name="twitter" placeholder="Twitter(Optional)" />
                  <input type="text" name="facebook" placeholder="Facebook(Optional)" />
                  <input type="text" name="gplus" placeholder="Google Plus(Optional)" />
                  <div><input type="checkbox" name="checkbox" value="check" id="agree"  style="width:auto;"/> I have read and agree to the <u><a onclick="window.open('https://lynagailscaters.herokuapp.com/privacy&policy')">Privacy Policy</a></u></div>
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
                  <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>



@endsection()