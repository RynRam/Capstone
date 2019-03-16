@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/inventory-critical" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>CRITICAL STOCKS</h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Critical Stock Table </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Item Code</th>
                  <th>Item Name</th>
                  <th>Stock on hand</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
	                @foreach($stocks as $stock)
	                <tr class="gradeX">
		  	      <td>{{ucfirst($stock->item_code)}}</td>
	              <td>{{$stock->item_name}}</td>
	              <td>{{$stock->stock_on_hand}}</td>
	              <td>          
                  <a href="{{action('CriticalStockController@edit', $stock->id)}}"><button class="btn btn-success" data-toggle="modal" data-target="#critical{{$stock->id}}">Add Stock  +</button></a>
    		       </td>
	                </tr>
                     <!-- edit -->
                    <div class="modal fade" id="critical{{$stock->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ADD STOCKS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{action('CriticalStockController@update', $stock->id)}}" method="POST">
                            {{method_field('patch')}}{{csrf_field()}}      
                              <div class="form-group">
                                <label for="critical" class="col-form-label">Item Code:</label>
                                <input type="text" class="form-control" name="critical" id="critical" value="{{$stock->item_code}}" style="margin-bottom: 0;" readonly> 
                            </div> 
                            <div class="form-group">
                                <label for="name" class="col-form-label">Item Name:</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$stock->item_name}}" style="margin-bottom: 0;" readonly> 
                            </div> 
                            <div class="form-group">
                                <label for="stock" class="col-form-label">Item Stock:</label>
                                <input type="text" class="form-control" name="stock" id="stock"  style="margin-bottom: 0;">
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
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection 