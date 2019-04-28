
@extends('layouts.frontLayout.front_custom_account')
@section('content')
@include('front.partials.accountStyle')
<main id="main">
  	  <section id="form">
        <div class="container">
          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3>Customer Reset Password</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>         
            <form id="msform" action="{{ route('customer.password.email') }}" method="post" role="form" >
	              {{csrf_field()}}
                <!-- fieldsets -->
                <fieldset style="color:#fff;">
                  <h2 class="fs-title">Forgot your account?</h2>
                  <h3 class="fs-subtitle">  
                  @if (session('status'))
                    {{ session('status') }}
                   @endif
                   </h3>
                  <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required/>
                  
                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                  <input type="submit" name="submit" class="submit action-button" value="Send Password Reset Link" style="width:auto;" />

              </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>





@endsection