@extends('layouts.frontLayout.front_custom_account')
@section('content')

 <style type="text/css">
   #main{
    background: linear-gradient(rgba(139, 69, 19, 0.6), rgba(139, 69, 19, 0.6)), url(../../images/backend_images/Blogs/blog3.jpg) fixed center center;
    background-size: cover;
   }
   #services {
    background: linear-gradient(rgba(139, 69, 19, 0.6), rgba(139, 69, 19, 0.6)), url('../../images/backend_images/Blogs/blog3.jpg') fixed center center;
  background-size: cover;
  padding: 40px 0;
}
        #about {

  position: relative;
    background: linear-gradient(rgba(139, 69, 19, 0.6), rgba(139, 69, 19, 0.6)), url('../../images/backend_images/Blogs/blog3.jpg') fixed center center;
  background-size: cover;
  padding: 40px 0;
}

 </style> 
  <main id="main" class="wow fadeInUp">
  	  <section id="form">
        <div class="container">

          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3>Registration Form</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>

          <div class="row section-bg">
  	        <div class="form">
  	        	<div class="col-md-12"><h3 style="border-bottom: 1px solid #222;">FILL UP</h3><div>
  	          <form action="{{action('CustomerRegisterController@store')}}" method="post" role="form" class="contactForm">
                  {{csrf_field()}}
  	            <div class="form-row">
  	              <div class="form-group col-md-6">
  	                <input type="text" name="fname" class="form-control" id="name" placeholder="First Name" required="true"  />
  	                <div class="validation"></div>
  	              </div>
    	              <div class="form-group col-md-6">
  	                <input type="text" name="lname" class="form-control" id="name" placeholder="Last Name" required="true" />
  	                <div class="validation"></div>
  	              </div>
                  <div class= "form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                   </div>
                    <div class="form-group col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password confirmation" required>
                    </div>
  	              <div class="form-group col-md-12">
  	                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" required="true">
  	                <div class="validation"></div>
  	              </div>
  	            </div>
  	            <div class="form-group">
  	              <input type="text" class="form-control" name="contact" placeholder="Contact No.(Ex. 09#########)" required="true"  />
  	              <div class="validation"></div>
  	            </div>
  	            <div class="form-group">
  	              <input type="text" class="form-control" name="address" id="address" placeholder="Complete Address" required="true" />
  	              <div class="validation"></div>
  	            </div>
                <div class="form-group text-center">
  	            <input type="submit" class="reserve-button" value="Register">
                </div>
  	          </form>
  	        </div>
          </div>
        </div>
	    </section><!-- #form -->

  </main>



@endsection()