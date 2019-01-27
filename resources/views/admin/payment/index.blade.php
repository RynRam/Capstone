@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>PAYMENTS</h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
 
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Payment Table</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Payment</th>
                  <th>Percentage</th>
                  <th>Amount Due</th>
                  <th>Balance</th>
                  <th>Method of Payment</th>
                  <th>Invoice Date</th>
                  <th>Print Receipt</th>

                </tr>
              </thead>
              <tbody>

                @foreach($payments as $payment)
                <tr class="gradeX">
              <td> {{ucfirst($payment->reservation->customer->fname)}} {{ucfirst($payment->reservation->customer->lname)}}</td>
              <td>{{$payment->amount_payment}}</td>
              <td>{{$payment->percentage}}</td>
              <td>{{$payment->change}}</td>
              <td>{{$payment->balance}}</td>
              <td>CASH</td> 
              <td>{{date('m-d-y',strtotime($payment->date_invoice)) }}</td>
              <td> <a href="{{action('PaymentController@show',$payment->id)}}"><button class="btn btn-success">Receipt</button></a></td>

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