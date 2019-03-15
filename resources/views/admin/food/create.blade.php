@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/food" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Package</a> </div>
    <h1>ADD NEW PACKAGES</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="{{action('FoodController@store')}}" method="POST" enctype="multipart/form-data">
		  <div class="form-group">
  	      {{csrf_field()}}
  	      		@include('admin.partials.error')
		    <label for="package">Package Name:</label>
		    <input type="text" class="form-control" name="name" id="package" placeholder="Package (no)" >
		  </div>
		    <div class="form-group">
		    <label for="inclusion">Inclusion:</label>
		    <textarea  class="form-control" name="inclusion" id="inclusion" rows="8" style="width:100%;"></textarea> 
		  </div>
  		  <div class="form-group" style="width: 250px;">
	  	    <label for="name">Select Category:</label>
            <select name="category">
            @foreach($eventcategories as $category)
            <option  value="{{ $category->id}}">{{ $category->name}}</option>
            @endforeach
            </select>
		  </div>
   		  <div class="form-group">
		    <label for="file">Upload Image:</label>
		    <input type="file" class="form-control" name="file" id="file" >
		  </div>
  		  <div class="form-group">
		    <label for="prc">Price:</label>
		    <input type="number" class="form-control" name="price" id="prc" >
		  </div>

		  <input type="submit" value="submit" class="btn btn-success">
		</form>

      </div>
    </div>
  </div>
</div>
@endsection