@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Sales</a> </div>
  <h1>Sales Reports<a onclick="window.open('/admin/salespdf')" class="btn btn-danger" style="float:right; margin-right: 50px;">Convert to PDF</a></h1>
<div class="container-fluid" style="position: relative;">
    <hr>
  
    <!-- As Date -->
    <form action="{{action('SalesController@report')}}" method="post" id="paymentsales">
    {{csrf_field()}}

      <div class="form-group text-center" style="margin-top:100px;">
      <h2>Report Filter</h2>
      <h4 style="display:inline-block;">Category :</h3> 
      <select name="category" id="category" style="width:20%;">
        <option value=""></option>
        @foreach($eventCategories as $event)
        <option value="{{$event->name}}">{{$event->name}}</option>
        @endforeach
      </select>
      <h4 style="display:inline-block;">From :</h3> 
      <input type="date" name="from" id="salesfrom" >
      <h4 style="display:inline-block;">To :</h3> 
      <input type="date" name="to" id="salesto" >
      </div>
        <div class="form-group text-center">
        <input type="submit" value="View or Print" class="btn btn-success" id="submit">
        </div>
    </form>
      <!-- /As Date -->
      <hr>


 
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Sales Table</h5>

          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Customer</th>
                  <th>Event</th>
                  <th>Payment</th>          
                  <th>Balance</th>
                  <th>Invoice Date</th>


                </tr>
              </thead>
              <tbody id="tablebody">

                @foreach($payments as $payment)
                <tr class="gradeX">
              <td> {{ucfirst($payment->reservation->customer->fname)}} {{ucfirst($payment->reservation->customer->Lname)}}</td>
              <td>{{$payment->reservation->category->name}}</td>
              <td>{{$payment->amount_payment}}</td>
              <td>{{$payment->balance}}</td>
              <td>{{date('m-d-y',strtotime($payment->date_invoice)) }}</td>
 

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
    @include('admin.partials.message')

</div>

@endsection 