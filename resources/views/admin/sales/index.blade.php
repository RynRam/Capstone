@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Sales</a> </div>
    <h1>Sales Register</h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
      <div class="span3">
      @foreach($inventories as $inventory)
        <a href="" style="font-size: 17px;font-weight: 500; display: block;padding: 5px;border-bottom: solid;" class="btn btn-primary">{{$inventory->item_name}}</a>
      @endforeach
    </div>
      <div class="span9">
        <div class="widget-box">
          <div class="widget-content nopadding">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Item Code</th>
                  <th>Product Description</th>
                  <th>Item Category</th>
                  <th>Unit Price</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">

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