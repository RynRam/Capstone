@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/warehouse" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>WAREHOUSE<a onclick="window.open('/admin/Inventorypdf')" class="btn btn-danger" style="float:right; margin-right: 50px;">Convert to PDF</a></h1>

  </div>
    @include('admin.partials.message')
<div class="container-fluid" style="position: relative;">
    <hr>
     <a href="{{action('WarehouseController@create')}}"><button class="btn btn-success" data-toggle="modal" data-target="#warehouse">New Warehouse +</button></a>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" >
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Inventory table </h5>
          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Warehouse Name</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
	                @foreach($warehouses as $warehouse)
	                <tr class="gradeX">
		  	      <td>{{ucfirst($warehouse->name)}}</td>
	              <td>{{$warehouse->created_at->diffForHumans()}}</td>
	              <td>{{$warehouse->updated_at->diffForHumans()}}</td>
	              <td>          
                  <a href="{{action('WarehouseController@edit', $warehouse->id)}}"  class="btn btn-primary btn-lg">Edit</a>
    		       </td>
	                </tr>

	                @endforeach
	                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- create -->
<div class="modal fade" id="warehouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD NEW WAREHOUSE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{action('WarehouseController@store')}}" method="POST">
              {{csrf_field()}}
          <div class="form-group">
            <label for="warehouse" class="col-form-label">Warehouse Name:</label>
            <input type="text" class="form-control" id="warehouse" name="name" style="margin-bottom: 0;"> 
            <input type="submit" value="+" class="btn btn-success">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection 