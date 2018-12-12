@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>{{ucfirst(substr(Route::currentRouteName(),10))}} Category</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="/admin/inventory-category/@yield('editId')" method="POST">
		  <div class="form-group">
  	      {{csrf_field()}}
  	      @section('editMethod')
  	      	@show
  	      		@include('admin.partials.error')
		    <label for="category">Category:</label>
		    <input type="text" class="form-control" name="category" id="category" value="@yield('editCategory')">
		  </div>
		    <div class="form-group">
		    <label for="description">Description:</label>
		    <textarea  class="form-control" name="description" id="description" rows="8" style="width:100%;">@yield('editDescription')</textarea> 
		  </div>
		  <input type="submit" value="submit" class="btn btn-success">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection