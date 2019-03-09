@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Discount</a> </div>
    <h1>ADD NEW CATEGORY</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="{{action('InventoryCategoryController@store')}}" method="POST">
		<div class="form-group">
  	      {{csrf_field()}}
  	      		@include('admin.partials.error')
		    <label for="category">Category:</label>
		    <input type="text" class="form-control" name="category" id="category" ">
		  </div>
		    <div class="form-group">
		    <label for="description">Description:</label>
		    <textarea  class="form-control" name="description" id="description" rows="8" style="width:100%;"></textarea> 
		  </div>
		  <input type="submit" value="submit" class="btn btn-success">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection