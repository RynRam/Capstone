@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>EDIT ITEM</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="/admin/inventory/{{$inventories->id}}" method="POST">
  	      {{csrf_field()}}	{{method_field('PUT')}}
      		@include('admin.partials.error')
      		<div class="form-group">
		    <label for="itm">Item Code:</label>
		    <input type="text" class="form-control" name="item_code" id="itm" value="{{$inventories->item_code}}">
		  	</div>
		 	 <div class="form-group">
			    <label for="description">Product Description:</label>
			    <input type="text" class="form-control" name="description" id="description" value="{{$inventories->item_name}}">
		 	 </div>
			<div class="form-group" style="width: 250px;" >
	  	    <label for="name">Select Category:</label>
	            <select name="category" class="form-control" >
 				 <option  value="{{$categoryId->id}}">{{$categoryId->category}}</option>
	            @foreach($categories as $category)
	            <option  value="{{ $category->id}}">{{ $category->category}}</option>
	            @endforeach
	            </select>
		  	</div>
			<div class="form-group" style="width: 250px;" >
	  	    <label for="name">Select Stock Room:</label>
	            <select name="warehouse" class="form-control" >
 				 <option  value="{{$warehouseId->id}}">{{$warehouseId->name}}</option>
	            @foreach($warehouses as $warehouse)
	            <option  value="{{ $warehouse->id}}">{{ $warehouse->name}}</option>
	            @endforeach
	            </select>
		  	</div>
		  <div class="form-group">
		    <label for="prc">Price:</label>
		    <input type="number" class="form-control" name="price" id="prc" value="{{$inventories->price}}">
		  </div>
		      <hr>
  		  <div class="col-md-4" style="float:left;padding: 15px;padding-left: 0;">
		    <label for="qty"><b>Add Stock:</b></label>
		    <input type="number" class="form-control" name="quantity" id="qty"  placeholder="stock available: {{$inventories->stock_on_hand}}">
		  </div>
		  <div class="col-md-4" style="float:left;padding: 15px;">
		    <label for="dmg"><b>Damaged Items:</b></label>
		    <input type="number" class="form-control" name="damage" id="dmg" value="0">
		  </div>
  		  <div class="col-md-4" style="padding: 15px;">
		    <label for="defect"><b>Defect Items:</b></label>
		    <input type="number" class="form-control" name="defect" id="defect" value="0">
		  </div>
		  <input type="submit" value="submit" class="btn btn-success">
		</form>
      </div>
    </div>
  </div>
</div>
@endsection