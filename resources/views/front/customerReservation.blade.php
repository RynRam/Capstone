@extends('layouts.frontLayout.front_custom1')
@section('content')
@include('front.partials.accountStyle')
<main id="main">
  	  <section id="form">
        <div class="container">
          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3 style="color:#fff;">My Reservations</h3>
            
          </header>         
            <form id="msform" role="form" >

                <fieldset style="overflow-x: auto;scroll-behavior: smooth;">

                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Package</th>
                    <th scope="col">Event Date</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Receipt</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                    <td>{{$customer->category->name}} </td>
                    <td>{{$customer->venue->name}}</td>
                    <td>{{$customer->package->name}}</td>
                    <td>{{$customer->eventdate}} </td> 
                    <td>{{$customer->guest}} </td>
                    <td>{{$customer->total}} PHP</td>
                    <td> <a href="{{action('FrontController@reportlist',$customer->id)}}" class="btn btn-success">View</a> </td>
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