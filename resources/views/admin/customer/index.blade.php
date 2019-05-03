@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/customers" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>CUSTOMERS</h1>

  </div>
    @include('admin.partials.message')
    <div class="container-fluid" style="position: relative;">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>CUSTOMERS</h5>

          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Contact</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Verification Status</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                </tr>
              </thead>
              <tbody>
                @foreach($customers as $customer)
                    <tr>
                    <td>Customer ID no. {{$customer->id}}</td>
                    <td>{{$customer->fname}}</td>
                  <td>{{$customer->lname}}</td>
                  <td>{{$customer->contact}}</td>
                  <td>{{$customer->address}}</td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->is_verified ? 'Verified' : 'Needs Email Verification'}}</td>
                  <td>{{$customer->created_at}}</td>
                  <td>{{$customer->updated_at}}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
              <!-- As Date -->
    <form action="{{action('AdminCustomerController@store')}}" method="POST">
    {{csrf_field()}}

      <div class="form-group text-center" style="margin-top:100px;">
      <h2>Report as Date</h2>
      <h4 style="display:inline-block;">From :</h3> 
      <input type="date" name="from" id="salesfrom" value="<?php echo date('Y-m-d'); ?>">
      <h4 style="display:inline-block;">To :</h3> 
      <input type="date" name="to" id="salesto" value="<?php echo date('Y-m-d'); ?>">
      </div>
        <div class="form-group text-center">
        <input type="submit" value="View or Print" class="btn btn-success">
        </div>
    </form>
      <!-- /As Date -->
        </div>
      </div>
    </div>
    <!-- Debut Catering -->



  </div>

</div>
@endsection 