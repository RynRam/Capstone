@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>RESERVATIONS</h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Reservation Table</h5>

          </div>
          <div class="widget-content nopadding table-responsive">
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
                <td>{{$reservation->is_approved == 0 ? 'Pending' : 'Accepted'}}</td>
                <td>{{$reservation->total}}</td>
                <td>
                  <a href="{{action('ReservationController@edit', $reservation->id)}}"><button class="btn btn-primary" data-toggle="modal" data-target="#reserve_edit{{$reservation->id}}" >Discount</button></a>
                @if($reservation->total_paid < $reservation->total)
                 <a href="{{action('PaymentController@edit', $reservation->id)}}" class="btn btn-info">Payment</a> 
                @elseif($reservation->total_paid >= $reservation->total) 
                 <a class="btn btn-info disabled" >Payment</a> 
                @endif
                <form action="{{ action('ReservationController@updateStatus', $reservation->id) }}" class="form-group" style="display:-webkit-inline-box;" method="post"> 
                {{method_field('put')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm">Update</button>
              </form>
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
        </div>
      </div>
    </div>
  </div>
</div>


@endsection 