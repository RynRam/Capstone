@extends('layouts.frontLayout.front_custom')

@section('content')
<style>
  #call-to-action {
  background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url(../../images/backend_images/Blog3.jpg) fixed center center;
  background-size: cover;
      padding: 14% 0%;
  }
  #call-to-action h3{
      color: #fff;
      font-size: 400%;
      font-weight: 100;
  }
  .section-header h3{
        color:#fff;
      }
</style>

   <section id="call-to-action" >
      <div class="container text-center">
        <h3>Debut Caterings</h3>
          <p>we package each event to come up with an above satisfying, worry free party with a budget you can afford.</p>
      </div>
    </section><!-- #call-to-action -->

@include('front.partials.form')
<!-- 
@include('front.partials.debutApartials')
@include('front.partials.debutBpartials')
@include('front.partials.debutCpartials') -->

 @endsection