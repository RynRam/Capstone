@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/discount" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Discount</a> </div>
    <h1>ADD NEW DISCOUNT</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="{{action('DiscountController@store')}}" method="POST">
		  <div class="form-group">
 	  	    {{csrf_field()}}
     		@include('admin.partials.error')
		    <label for="name">Discount Name:</label>
		    <input type="text" class="form-control" name="name" id="name">
		  </div>
		    <div class="form-group">
		    <label for="description">Description:</label>
		    <textarea  class="form-control" name="description" id="description" rows="8" style="width:100%;"></textarea> 
		  </div>
  		  <div class="form-group">
		    <label for="discount">Discount:</label>
		    <input type="number" class="form-control" name="discount" id="discount" >
		  </div>

		  <input type="submit" value="submit" class="btn btn-success">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection