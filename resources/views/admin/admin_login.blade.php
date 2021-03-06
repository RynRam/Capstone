<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://lynagailscaters.herokuapp.com/css/backend_css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://lynagailscaters.herokuapp.com/css/backend_css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="https://lynagailscaters.herokuapp.com/css/backend_css/matrix-login.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome.css" rel="stylesheet" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

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
            <form id="loginform" class="form-vertical" method="post" action="https://lynagailscaters.herokuapp.com/admin">
                {{ csrf_field() }}
				 <div class="control-group normal_text"> <h3><img src="../../images/logo2.png" alt="" title="" /></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <label style="color: #000;">Email:</label>
                            <input type="email" placeholder="email" name="email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                             <label style="color: #000;">Password:</label>
                           <input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                <a class="btn btn-danger" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                    <span class="pull-right"><input type="submit" value="Login" class="btn btn-primary" /></span>
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
        
        <script src="https://lynagailscaters.herokuapp.com/js/backend_js/jquery.min.js"></script>  
        <script src="https://lynagailscaters.herokuapp.com/js/backend_js/matrix.login.js"></script>
        <script src="https://lynagailscaters.herokuapp.com/js/backend_js/bootstrap.min.js"></script>  
    </body>

</html>
