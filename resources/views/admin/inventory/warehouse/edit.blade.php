@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>EDIT WAREHOUSE</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="/admin/warehouse/{{$warehouseId->id}}" method="POST">
  	      {{csrf_field()}}	{{method_field('PUT')}}
      		@include('admin.partials.error')
      		<div class="form-group">
		    <label for="warehouse">Warehouse Name:</label>
		    <input type="text" class="form-control" name="name" id="warehouse" value="{{$warehouseId->name}}">
		  	</div>
		  	<input type="submit" value="submit" class="btn btn-success">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection