@extends('layouts.frontLayout.front_custom_account')
@section('content')
@include('front.partials.accountStyle')
<style>
    #form{
        padding: 80px 0;
    }
  </style>
<main id="main">
  	  <section id="form">
        <div class="container">
          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3>Customer Reset Password</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>         
            <form id="msform" action="{{ route('customer.password.request') }}" method="post" role="form" >
            {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">
                <!-- fieldsets -->
                <fieldset>
                  <h2 class="fs-title">Customer Reset Password</h2>
                  <h3 class="fs-subtitle">  
                  @if (session('status'))
                    {{ session('status') }}
                   @endif
                   </h3>
                  <input type="email" id="email" name="email" placeholder="Email" value="{{ $email or old('email') }}" required autofocus/>
                  @if ($errors->has('email'))
                  
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  <input type="password" id="password" name="password" placeholder="Password" required/>
                  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                    <input id="password-confirm" type="password" name="password_confirmation"  placeholder="Password Confirmation"  required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif

                 
                  <input type="submit" name="submit" class="submit action-button" value="Reset Password" style="width:auto;" />
              </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>





@endsection