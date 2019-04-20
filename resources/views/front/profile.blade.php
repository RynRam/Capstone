@extends('layouts.frontLayout.front_custom1')
@section('content')
@include('front.partials.accountStyle')
 <main id="main">
  	  <section id="form">
        <div class="container">

          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3 style="color:#fff;">Update Form</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>

         
            <form id="msform"  action="{{action('CustomerProfileController@update', $customer->id )}}" method="post" role="form" >
	 {{csrf_field()}}{{method_field('PUT')}}
                <!-- progressbar -->
                <ul id="progressbar">
                  <li class="active">Account Setup</li>
                  <li>Social Profiles</li>
                  <li>Personal Details</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                  <h2 class="fs-title">Update your account</h2>
                  <h3 class="fs-subtitle">This is step 1</h3>
                  <input type="email" name="email" placeholder="Email" value="{{$customer->email}}" required/>
                  <input type="password" name="password" placeholder="Password" value="{{$customer->password}}"  required/>
                  <input type="password" name="cpass" placeholder="Confirm Password" value="{{$customer->password}}" />
                  <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                  <h2 class="fs-title">Social Profiles</h2>
                  <h3 class="fs-subtitle">Your presence on the social network</h3>
                  <input type="text" name="twitter" placeholder="Twitter"value="{{$customer->twitter}}" />
                  <input type="text" name="facebook" placeholder="Facebook" value="{{$customer->facebook}}" />
                  <input type="text" name="gplus" placeholder="Google Plus" value="{{$customer->gplus}}" />
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
                  <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                  <h2 class="fs-title">Personal Details</h2>
                  <h3 class="fs-subtitle">We will never sell it</h3>
                  <input type="text" name="fname" placeholder="First Name" value="{{$customer->fname}}" required />
                  <input type="text" name="lname" placeholder="Last Name" value="{{$customer->lname}}" required />
                  <input type="text" name="contact" placeholder="Phone" value="{{$customer->contact}}" required />
                  <textarea name="address" placeholder="Address" required>{{$customer->address}}</textarea>
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
                  <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>



@endsection()