
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
            @if(Session::has('flash_message_error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error')!!}</strong>
                </div>
            @endif
                        @if(Session::has('flash_message_success'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success')!!}</strong>
                </div>
            @endif
            <form id="loginform" class="form-vertical" method="POST" action="{{ route('password.request') }}>
                {{ csrf_field() }}
				 <div class="control-group normal_text"> <h3><img src="{{asset('images/logo2.png')}}" alt="" title="" /></div>
                <div class="control-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="controls">
                        <div class="main_input_box">
                            <label style="color: #000;">E-Mail Address:</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="controls">
                        <div class="main_input_box">
                             <label style="color: #000;">Password:</label>
                             <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="control-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <div class="controls">
                        <div class="main_input_box">
                             <label style="color: #000;">Confirm Password:</label>
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        
                        @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" value="Reset Password" class="btn btn-primary" /></span>
                </div>
            </form>

        </div>
        
        <script src="{{ asset('js/backend_js/jquery.min.js')}}"></script>  
        <script src="{{ asset('js/backend_js/matrix.login.js')}}"></script>
        <script src="{{ asset('js/backend_js/bootstrap.min.js')}}"></script>  
    </body>

</html>
