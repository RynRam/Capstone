@extends('layouts.frontLayout.front_custom_account')
@section('content')
@include('front.partials.accountStyle')
 <main id="main" class="wow fadeInUp">
  	  <section id="form">
        <div class="container">

          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3>Registration Form</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>

         
            <form id="msform"  action="{{action('CustomerRegisterController@store')}}" method="post" role="form" >
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
                  <h3 class="fs-subtitle">This is step 1</h3>
                  <input type="email" name="email" placeholder="Email" required/>
                  <input type="password" name="password" placeholder="Password" required/>
                  <input type="password" name="cpass" placeholder="Confirm Password" />
                  <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                  <h2 class="fs-title">Social Profiles</h2>
                  <h3 class="fs-subtitle">Your presence on the social network</h3>
                  <input type="text" name="twitter" placeholder="Twitter" />
                  <input type="text" name="facebook" placeholder="Facebook" />
                  <input type="text" name="gplus" placeholder="Google Plus" />
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
                  <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                  <h2 class="fs-title">Personal Details</h2>
                  <h3 class="fs-subtitle">We will never sell it</h3>
                  <input type="text" name="fname" placeholder="First Name" required />
                  <input type="text" name="lname" placeholder="Last Name" required />
                  <input type="text" name="contact" placeholder="Phone" required />
                  <textarea name="address" placeholder="Address" required></textarea>
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
                  <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>



@endsection()