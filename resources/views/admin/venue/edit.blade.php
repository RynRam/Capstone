@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Venue</a> </div>
    <h1>EDIT VENUE</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="/admin/venue/{{$files->id}}" method="POST" enctype="multipart/form-data">
		  <div class="form-group">
  	      {{csrf_field()}}	{{method_field('PUT')}}
  	      		@include('admin.partials.error')
		    <label for="venue">Venue Name:</label>
		    <input type="text" class="form-control" name="name" id="name" value="{{$files->name}}">
		  </div>
		    <div class="form-group">
		    <label for="address">Venue Address:</label>
		    <input type="text" class="form-control" name="address" id="address" value="{{$files->address}}">
		  </div>
  		  <div class="form-group">
		    <label for="contactperson">Contact Person:</label>
		    <input type="text" class="form-control" name="contact_person" id="contactperson" value="{{$files->contact_person}}">
		  </div>
		  <div class="form-group">
		    <label for="Contact No.">Contact No.:</label>
		    <input type="text" class="form-control" name="contact" id="Contact No." value="{{$files->contact}}">
		  </div>
  		  <div class="form-group">
		    <label for="prc">Price:</label>
		    <input type="number" class="form-control" name="price" id="prc" value="{{$files->price}}">
		  </div>
  		  <div class="form-group">
		    <label for="file">Upload Image:</label>
		    <input type="file" class="form-control" name="file" id="file" value="{{$files->file}}">
		  </div>
		  <input type="submit" value="submit" class="btn btn-success form-control" style="margin-top: 17px;">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection