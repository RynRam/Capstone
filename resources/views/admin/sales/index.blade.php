@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Sales</a> </div>
  <h1>Sales</h1>
    <div class="container-fluid">
    <hr>
    <form action="{{action('SalesController@store')}}" method="POST">
    {{csrf_field()}}

      <div class="form-group text-center" style="margin-top:100px;">
      <h4 style="display:inline-block;">From</h3> 
  
      <input type="date" name="from" id="salesfrom">
      <h4 style="display:inline-block;">To</h3> 
      <input type="date" name="to" id="salesto">
      </div>
        <div class="form-group text-center">
        <input type="submit" value="submit" class="btn btn-success">
        </div>
    </form>
    </div>

  </div>
    @include('admin.partials.message')

</div>

@endsection 