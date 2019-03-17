@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/discount" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>DISCOUNTS</h1>

  </div>
  <div class="container-fluid" style="position: relative;overflow: auto;overflow-x: visible;">
    <hr>
    <!-- Basic Catering -->
     <a href="{{'/admin/discount/create'}}"><button class="btn btn-success">Add Discount +</button></a>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" style="overflow-x:auto;">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Discount Table</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Discount</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach($discounts as $discount)
                <tr class="gradeX">
              	<td>{{$discount->name}}</td>
				<td>{{$discount->description}}</td>
				<td>{{$discount->discount}}%</td>
              	<td>{{$discount->created_at->diffForHumans()}}</td>
              	<td>{{$discount->updated_at->diffForHumans()}}</td>
				<td>{{$discount->is_active == 1 ? 'Available' : 'Unavailable'}}</td>
             	<td>
              <form action="{{ action('DiscountController@updateStatus', $discount->id) }}" class="form-group" style="display: -webkit-inline-box;" method="post">
                {{method_field('Patch')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm">Update</button>
              </form> |
             	<a href="{{'/admin/discount/'.$discount->id.'/edit'}}" class="btn btn-primary">Edit</a> 
           	 	</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Debut Catering -->



  </div>

</div>
@endsection 