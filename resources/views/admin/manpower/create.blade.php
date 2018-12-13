@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Staffs</a> </div>
    <h1>ADD NEW STAFF</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="/admin/manpower/@yield('editId')" method="POST">
	      {{csrf_field()}}  @section('editMethod')
  	      @show     		@include('admin.partials.error')
		    <div class="form-group">
			    <label for="fname">First Name:</label>
			    <input type="text" class="form-control" name="firstname" id="fname">
		    </div>
	  		<div class="form-group">
			    <label for="lname">Last Name:</label>
			    <input type="text" class="form-control" name="lastname" id="lname">
			</div>
          	<div class="form-group ">
	            <label for="role" class="col-md-4 control-label">Role</label>
	            <div class="col-md-6">
	                <select name="role" class="form-control" style="width: 17%" >
	            	@foreach($roles as $role)
	                    <option value="{{$role->name}}">{{$role->name}}</option>
	                @endforeach
	                </select> 
	            </div>
	        </div>
          	<div class="form-group ">
	            <label for="role" class="col-md-4 control-label">Assign</label>
	            <div class="col-md-6">
	                <select name="assign" class="form-control" style="width: 17%" >
	                    <option value="Available">Available</option>
	                    <option value="Assign 1">Reservation 1</option>
	                    <option value="Assign 2">Reservation 2</option>
	                </select> 
	            </div>
	        </div>
		  <input type="submit" value="submit" class="btn btn-success form-control" style="margin-top: 17px;">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection