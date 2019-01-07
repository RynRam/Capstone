@extends('layouts.frontLayout.front_custom_account')
@section('content')
@include('front.partials.accountStyle')
<main id="main" class="wow fadeInUp">
  	  <section id="form">
        <div class="container">
          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3>Login Form</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>         
            <form id="msform" action="{{action('CustomerLoginController@store')}}" method="post" role="form" >
	              {{csrf_field()}}
                <!-- fieldsets -->
                <fieldset>
                  <h2 class="fs-title">Login your account</h2>
                  <h3 class="fs-subtitle">  
                  @if (session('status'))
                    {{ session('status') }}
                   @endif
                   </h3>
                  <input type="email" name="email" placeholder="Email" required/>
                  <input type="password" name="password" placeholder="Password" required/>
                  <input type="submit" name="submit" class="submit action-button" value="Login" />
              </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>





@endsection