@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Venue</a> </div>
    <h1>ADD NEW VENUE</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="/admin/venue/@yield('editId')" method="POST" enctype="multipart/form-data">
		  <div class="form-group">
  	      {{csrf_field()}}
  	      @section('editMethod')
  	      	@show
  	      		@include('admin.partials.error')
		    <label for="venue">Venue Name:</label>
		    <input type="text" class="form-control" name="name" id="name" value="@yield('editName')">
		  </div>
		    <div class="form-group">
		    <label for="address">Venue Address:</label>
		    <input type="text" class="form-control" name="address" id="address" value="@yield('editAddress')">
		  </div>
  		  <div class="form-group">
		    <label for="contactperson">Contact Person:</label>
		    <input type="text" class="form-control" name="contact_person" id="contactperson" value="@yield('editContactPerson')">
		  </div>
		  <div class="form-group">
		    <label for="Contact No.">Contact No.:</label>
		    <input type="text" class="form-control" name="contact" id="Contact No." value="@yield('editContact')">
		  </div>
  		  <div class="form-group">
		    <label for="prc">Price:</label>
		    <input type="number" class="form-control" name="price" id="prc" value="@yield('editPrice')">
		  </div>
			<div class="form-group">
		    <label for="capacity">Capacity:</label>
		    <input type="number" class="form-control" name="capacity" id="capacity" value="@yield('editCapacity')">
		  </div>
  		  <div class="form-group">
		    <label for="file">Upload Image:</label>
		    <input type="file" class="form-control" name="file" id="file" value="@yield('editFile')">
		  </div>
		  <input type="submit" value="submit" class="btn btn-success form-control" style="margin-top: 17px;">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection