<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-login.css')}}" />
        <link href="{{ asset('fonts/backend_fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
        <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <form id="loginform" class="form-vertical" method="post" action="{{ route('password.email') }}">
                {{ csrf_field() }}
				 <div class="control-group normal_text"> <h3><img src="{{asset('images/logo2.png')}}" alt="" title="" /></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label style="color: #000;">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
                
                <div class="form-actions">
 
                    <span class="pull-right"><input type="submit" value="Send Password Reset Link" class="btn btn-primary" /></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Recover</a></span>
                </div>
            </form>
        </div>
        
        <script src="{{ asset('js/backend_js/jquery.min.js')}}"></script>  
        <script src="{{ asset('js/backend_js/matrix.login.js')}}"></script>
        <script src="{{ asset('js/backend_js/bootstrap.min.js')}}"></script>  
    </body>

</html>
