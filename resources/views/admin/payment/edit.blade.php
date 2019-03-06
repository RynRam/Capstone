@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">


  </div>
   <div class="container-fluid">
       <h1>PAYMENT</h1>
       <div class="container">
          <div class="span1">
               <h5><p>Customer:</p></h5>
          </div>
          <div class="span5" style="margin-left: 10px;">
           <h5><p> <input type="text" name="fname" disabled="true" value="{{ucfirst($reservations->fname)}} {{ucfirst($reservations->lname)}}"></p></h5>
           <h5><p><input type="text" name="email" disabled="true" value="{{ucfirst($reservations->email)}}"></p></h5>
           <h5><p><input type="text" name="contact" disabled="true" value="{{ucfirst($reservations->contact)}}"> </p></h5>
           <h5><p><input type="text" name="address" disabled="true" value="{{ucfirst($reservations->address)}}"></p></h5>
         </div>
           <div class="span5">
           <h5><p>Invoice Date: <u><input type="text" name="address" disabled="true" value="<?php echo date('F j, Y'); ?>"></u></p></h5>
         </div>
       </div>
        <div class="container">
          <div class="span2">
               <h5><p>Method of Payment:</p></h5>
          </div>
          <div class="span5" style="margin-left: -10px;">
           <input type="text" name="mpay" disabled="true" value="CASH">
         </div>
       </div>
        <div class="container">
             <h4>INVOICE:</h4>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            </span>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th>Package Name</th>
                  <th>Package Price</th>
                  <th>No. of Pax</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <form>
                <tr>
                  <td>{{$package->package->name}}</td>
                  <td>{{$package->package->price}}</td>
                  <td>{{$package->guest}}</td>
                   <td><input type="number"  name="total" class="form-control" disabled="true" value="{{$total}}" /></td>
                  <td>     <a href="{{action('PaymentController@create')}}"><button class="btn btn-success" data-toggle="modal" data-target="#payment" >Payment</button></a></td>

                </tr>
                
                </form>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
       </div>
   </div>
</div>
<!-- create -->
<div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Save Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{action('PaymentController@store')}}" method="POST">
              {{csrf_field()}}
              <input type="hidden" name="reserveid" value="{{ucfirst($package->id)}}">
              <input type="hidden" name="category" value="{{$category}}">
          
          <div class="form-group">
            <input type="hidden" name="totalhidden" id="totalhidden" value="{{$total}}">
            <label for="price" class="col-form-label">Amount Tender:</label>
            <input type="number" class="form-control" id="price" name="tender" > 
          </div>
          <div class="form-group">
            <label for="terms" class="col-form-label">Terms of Payment:</label>

            <label><input type="radio" id="terms" name="terms"  value=".20"> Reservation Payment</label>
            <label><input type="radio"  id="terms" name="terms"  value=".60"> Preparation Payment</label>
            <label><input type="radio"  id="terms" name="terms"  value=".20"> Final Payment</label>
          </div>
          <div class="form-group">
            <label for="balance" class="col-form-label">Balance:</label>
            <input type="number" class="form-control" id="balance" name="balance" readonly> 
          </div>
          <div class="form-group">
            <label for="change" class="col-form-label">Change:</label>
            <input type="number" class="form-control" id="change" name="change"  readonly> 
            </div>
          <div class="form-group">
            <input type="submit" value="SUBMIT" class="btn btn-success" style="padding: 5px;"  >
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


      