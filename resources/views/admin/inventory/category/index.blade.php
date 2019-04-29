@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/inventory-category" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>INVENTORY CATEGORIES<a onclick="window.open('/admin/Inventorypdf')" class="btn btn-danger" style="float:right; margin-right: 50px;">Convert to PDF</a></h1>

  </div>
    @include('admin.partials.message')
<div class="container-fluid" style="position: relative;">
    <hr>
     <a href="{{'/admin/inventory-category/create'}}"><button class="btn btn-success">New Category +</button></a>

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
                  <th>Category Name</th>
                  <th>Description</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
	                @foreach($categories as $category)
	                <tr class="gradeX">
		  	      <td>{{ucfirst($category->category)}}</td>
	   		      <td>{{$category->description}}</td>
	              <td>{{$category->created_at->diffForHumans()}}</td>
	              <td>{{$category->updated_at->diffForHumans()}}</td>
                <td>{{$category->is_active == 1 ? 'Available' : 'Unavailable'}}</td>
	              <td>          
	              <form action="{{ action('InventoryCategoryController@updateStatus', $category->id) }}" class="form-group" style="display: -webkit-inline-box;" method="post">
	                {{method_field('Patch')}}{{csrf_field()}}
	                <button class="btn btn-success btn-success-sm">Update</button>
	              </form> |
                  <a href="{{'/admin/inventory-category/'.$category->id.'/edit'}}" class="btn btn-primary" >Edit</a>
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
@endsection 