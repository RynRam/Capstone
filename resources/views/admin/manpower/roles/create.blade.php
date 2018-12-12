@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Roles</a> </div>
    <h1>ADD NEW ROLES</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="/admin/manpower/roles" method="POST">
	      {{csrf_field()}}	@include('admin.partials.error')
		    <div class="form-group">
			    <label for="roles">Roles:</label>
			    <input type="text" class="form-control" name="roles" id="roles">
		    </div>
		  <input type="submit" value="submit" class="btn btn-success form-control" style="margin-top: 17px;">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection