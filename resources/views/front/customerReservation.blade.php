@extends('layouts.frontLayout.front_custom_account')
@section('content')
@include('front.partials.accountStyle')
<main id="main">
  	  <section id="form">
        <div class="container">
          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3 style="color:#fff;">My Reservations</h3>
            
          </header>         
            <form id="msform" role="form" >

                <fieldset>

                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Package</th>
                    <th scope="col">Event Date</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Total Amount</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->category->name}} </td>
                    <td>{{$customer->venue->name}}</td>
                    <td>{{$customer->package->name}}</td>
                    <td>{{$customer->eventdate}} </td> 
                    <td>{{$customer->guest}} </td>
                    <td>{{$customer->total}}</td>
                    <td></td>
                    </tr>
                @endforeach
                </tbody>
                </table>

              </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>





@endsection