@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/resevation" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Category</a> </div>
    <h1>EDIT RESERVATION</h1>
  </div>
  <div class="container-fluid">
    <hr>
		<form action="{{ action('EditReservationController@update', $reserveId->id) }}" method="POST">
			  	      {{csrf_field()}}	{{method_field('PUT')}}
      		@include('admin.partials.error')
        <div class="form-group" style="width: 250px;">
            <label for="package">Select Package:</label>
            <select class="form-control" name="package" id="package"> 
                <option value="{{$packageId->id}}">{{$packageId->name}} -- {{$packageId->price}} per head</option>
                @foreach($package as $package)
                <option value="{{$package->id}}">{{$package->name}} -- {{$package->price}} per head</option>
                @endforeach 
            </select> 
        </div>
        <div class="form-group" style="width: 250px;">
            <label for="category">Select Category:</label>
            <select class="form-control" name="category" id="category"> 
                <option value="{{$cateringId->id}}">{{$cateringId->name}}</option>
                @foreach($catering as $catering)
                <option value="{{$catering->id}}">{{$catering->name}}</option>
                @endforeach 
            </select> 
        </div>
        <div class="form-group" style="width: 250px;">
            <label for="select">Select Venue:</label>
            <select class="form-control" name="venuename" id="select" style="display:inline-block;"> 
                <option data-capacity="{{$venueId->capacity}}" value="{{$venueId->id}}">{{$venueId->name}}-({{$venueId->capacity}} max capacity)</option>
            @foreach($venue as $venue) 
                <option data-capacity="{{$venue->capacity}}" value="{{$venue->id}}">{{$venue->name}}-({{$venue->capacity}} max capacity)</option>
            @endforeach 
            </select> 
        </div>
        <label >Number of Pax :</label> 
        <input type="number" class="form-control" name="people" id="people" required="true" value="{{$reserveId->guest}}" /> 

		  <input type="submit" value="submit" class="btn btn-success">
		</form>

      </div>
    </div>
  </div>
</div>
@endsection

