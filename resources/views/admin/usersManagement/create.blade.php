@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/user" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">User Management</a> </div>
    <h1>ADD NEW ACCOUNT</h1>
  </div>
  <div class="container-fluid">
    <hr>
	@if (Session::has('status'))
        <h3 class="alert alert-primary">{{ Session::get('status') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
        </h3>
      @endif
		 <form method="POST" action="{{action('UserController@store')}}">
  	      		{{csrf_field()}}
  	      		@include('admin.partials.error')
	        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	            <label for="name" class="col-md-4 control-label">Name</label>

	            <div class="col-md-6">
	                <input id="name" type="text" class="form-control" name="name" value="@yield('editName')" required autofocus>

	                @if ($errors->has('name'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('name') }}</strong>
	                    </span>
	                @endif
	            </div>
	        </div>
	        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

	            <div class="col-md-6">
	                <input id="email" type="email" class="form-control" name="email" value="@yield('editEmail')" required>

	                @if ($errors->has('email'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('email') }}</strong>
	                    </span>
	                @endif
	            </div>
	        </div>
	        <div class="form-group ">
	            <label for="role" class="col-md-4 control-label">Role</label>
	            <div class="col-md-6">
	                <select name="role" class="form-control" style="width: 17%" >
	                    <option value="admin">Admin</option>
	                    <option value="reservation">Reservation</option>
	                    <option value="inventory">Inventory</option>
	                    <option value="manpower">Manpower</option>
	                </select> 
	            </div>
	        </div>
	        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	            <label for="password" class="col-md-4 control-label">Password</label>

	            <div class="col-md-6">
	                <input id="password" type="password" class="form-control" name="password"  required>

	                @if ($errors->has('password'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('password') }}</strong>
	                    </span>
	                @endif
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

	            <div class="col-md-6">
	                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="col-md-6 col-md-offset-4">
	                <button type="submit" class="btn btn-success">
	                    Register
	                </button>
	            </div>
	        </div>
		</form>

      </div>
    </div>
  </div>
</div>
@endsection