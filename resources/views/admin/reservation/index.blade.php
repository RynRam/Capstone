@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/reservation" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>RESERVATIONS</h1>

  </div>
    @include('admin.partials.message')
    <div class="container-fluid" style="position: relative;">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" >
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Reservation Table</h5>

          </div>
          <div class="widget-content nopadding table-responsive" style="overflow-x:auto;">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Email</th>
                  <th>Venue name</th>
                  <th>Package name</th>
                  <th>Event Date</th>
                  <th>Category</th>
                  <th>Guests</th>
                  <th>Status</th>
                  <th>Total Amount</th>
                  <th></th>  
                </tr>
              </thead>
              <tbody>
                @foreach($reservations as $reservation)
                <tr class="gradeX">

                <td>{{ucfirst($reservation->customer->email)}}</td>	 
	              <td>{{ucfirst($reservation->venue->name)}}</td>
                <td>{{$reservation->package->name}}</td>  
                <td>{{$reservation->eventdate}}</td>
                <td>{{$reservation->category->name}}</td>
                <td>{{$reservation->guest}}</td>
                <td>{{$reservation->is_approved == 0 ? 'Cancelled' : 'Accepted'}}</td>
                <td>{{$reservation->total}}</td>
                <td>                
                @if($reservation->total_paid < $reservation->total && $reservation->is_approved == true )
                <a href="{{action('ReservationController@edit', $reservation->id)}}"><button class="btn btn-primary" data-toggle="modal" data-target="#reserve_edit{{$reservation->id}}" >Discount</button></a>
                <a href="{{action('EditReservationController@edit', $reservation->id)}}" class="btn btn-info">Edit</a> 
                 <a href="{{action('PaymentController@edit', $reservation->id)}}" class="btn btn-info">Payment</a> 
                 <form action="{{ action('ReservationController@updateStatus', $reservation->id) }}" class="form-group" style="display:-webkit-inline-box;" method="post"> 
                {{method_field('put')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm">Update</button>
              </form>
                @elseif($reservation->total_paid >= $reservation->total) 
                <button class="btn btn-danger disabled">Discount</button>
                <a  class="btn btn-danger disabled">Edit</a> 
                 <a class="btn btn-danger disabled" >Payment</a> 
                <button class="btn btn-danger btn-sm disabled" >Update</button>
                @elseif($reservation->is_approved == 0)
                <button class="btn btn-danger disabled">Discount</button>
                <a  class="btn btn-danger disabled">Edit</a> 
                 <a class="btn btn-danger disabled" >Payment</a> 
                 <form action="{{ action('ReservationController@updateStatus', $reservation->id) }}" class="form-group" style="display:-webkit-inline-box;" method="post"> 
                {{method_field('put')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm">Update</button>
              </form>
              @endif
                </td>
              </tr>    
                <!-- edit -->
                <div class="modal fade" id="reserve_edit{{$reservation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Any Discount? </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{action('ReservationController@update', $reservation->id)}}" method="POST">
                              {{method_field('patch')}}{{csrf_field()}}          
                          <div class="form-group">
                            <label for="dsc" class="col-form-label">Discount:</label>
                            <input type="number" class="form-control" id="dsc" name="discount" value="0" > 
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
            @endforeach
              </tbody>
            </table>
          </div>
                <!-- As Date -->
            <form action="{{action('ReservationController@store')}}" method="POST">
            {{csrf_field()}}

              <div class="form-group text-center" style="margin-top:100px;">
              <h2>Report As Date</h2>
              <h4 style="display:inline-block;">From :</h3> 
              <input type="date" name="from" id="salesfrom" value="<?php echo date('Y-m-d'); ?>" >
              <h4 style="display:inline-block;">To :</h3> 
              <input type="date" name="to" id="salesto" value="<?php echo date('Y-m-d'); ?>" >
              </div>
                <div class="form-group text-center">
                <input type="submit" value="View or Print" class="btn btn-success" id="sales">
                </div>
            </form>
              <!-- /As Date -->
              <hr>
              <!-- As Event Date -->
            <form action="{{action('ReservationController@eventdate')}}" method="POST">
            {{csrf_field()}}

              <div class="form-group text-center" style="margin-top:100px;">
              <h2>Report As Event Date</h2>
                <input type="date" name="eventdate" id="date" value="<?php echo date('Y-m-d'); ?>" >
              </div><br>
                <div class="form-group text-center">
                <input type="submit" value="View or Print" class="btn btn-success">
                </div>
            </form>
                <!-- /As Event Date -->
           <hr>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection 