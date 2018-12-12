@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Category</a> </div>
    <h1>EDIT CATEGORY</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="/admin/category/{{$caterings->id}}" method="POST">
			  	      {{csrf_field()}}	{{method_field('PUT')}}
      		@include('admin.partials.error')
		  <div class="form-group" style="width: 250px;">
		  	    <label for="name">Select Category:</label>
            <select name="category">
            <option  value="{{$categoryId->id}}">{{$categoryId->name}}</option>	
            @foreach($eventcategories as $category)
            <option  value="{{$category->id}}">{{$category->name}}</option>
       		@endforeach
            </select>
		  </div>
		  <div class="form-group">
  		    <label for="name">Name:</label>

		    <input type="text" class="form-control" name="name" id="name" value="{{$caterings->name}}">
		  </div>

		  <input type="submit" value="submit" class="btn btn-success">
		</form>

      </div>
    </div>
  </div>
</div>
@endsection