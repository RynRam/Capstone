@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>EDIT CATEGORY</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="{{ '/admin/inventory-category/'.$category->id. }}" method="POST">
		  <div class="form-group">
  	      {{csrf_field()}} 	{{method_field('PUT')}}
  	      		@include('admin.partials.error')
		    <label for="category">Category:</label>
		    <input type="text" class="form-control" name="category" id="category" value="{{$category->category}}">
		  </div>
		    <div class="form-group">
		    <label for="description">Description:</label>
		    <textarea  class="form-control" name="description" id="description" rows="8" style="width:100%;">{{$category->description}}</textarea> 
		  </div>
		  <input type="submit" value="submit" class="btn btn-success">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection