 @extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>ADD NEW ITEM</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="{{ action('InventoryController@store')}}" method="POST">
	  	        {{csrf_field()}}
	  	        @section('editMethod')
  	      		@show
  	      		@include('admin.partials.error')
      		<div class="form-group">
		    <label for="itm">Item Code:</label>
		    <input type="text" class="form-control" name="item_code" id="itm">
		  	</div>
		 	 <div class="form-group">
			    <label for="description">Product Description:</label>
			    <input type="text" class="form-control" name="description" id="description">
		 	 </div>
			<div class="form-group" style="width: 250px;" >
	  	    <label for="name">Select Category:</label>
	            <select name="category" class="form-control" >
	            @foreach($categories as $category)
	            <option  value="{{ $category->id}}">{{ $category->category}}</option>
	            @endforeach
	            </select>
		  	</div>
				<div class="form-group" style="width: 250px;" >
	  	    <label for="name">Select Stock Room:</label>
	            <select name="warehouse" class="form-control" >
	            @foreach($warehouses as $warehouse)
	            <option  value="{{ $warehouse->id}}">{{ $warehouse->name}}</option>
	            @endforeach
	            </select>
		  	</div>
		  <div class="form-group">
		    <label for="prc">Price:</label>
		    <input type="number" class="form-control" name="price" id="prc">
		  </div>
		  <div class="form-group">
		    <label for="qty">Stock on hand:</label>
		    <input type="number" class="form-control" name="quantity" id="qty">
		  </div>
		  <input type="submit" value="submit" class="btn btn-success">
		</form>
	</div>
    </div>
  </div>
</div>
@endsection