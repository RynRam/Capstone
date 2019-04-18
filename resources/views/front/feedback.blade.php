@extends('layouts.frontLayout.front_custom')
@section('content')
@include('front.partials.accountStyle')
<main id="main">
  	  <section id="form">
        <div class="container">
          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3 style="color:#fff;">Login Form</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>         
            <form id="msform" action="{{action('FrontController@feedback')}}" method="post" role="form" >
	              {{csrf_field()}}
                <!-- fieldsets -->
                <fieldset>
                  <h2 class="fs-title">Your Feedback</h2>
                  <h3 class="fs-subtitle">  
                  @if (session('status'))
                    {{ session('status') }}
                   @endif
                   </h3>
                  <input type="hidden" name="name" value="{{Auth::guard('customer')->user()->fname}} {{Auth::guard('customer')->user()->lname}}" required/>
                  
                  <label for="feedback">Feedback:</label>
                <textarea class="form-control" rows="5" id="feeback" name="feedback"  required></textarea>

                  <input type="submit" name="submit" class="submit action-button" value="Submit" />

              </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>





@endsection