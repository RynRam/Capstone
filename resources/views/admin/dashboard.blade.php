@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
     <div id="breadcrumb"> 
        <a title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      </div>
  </div>
  <div  class="quick-actions_homepage">
  <div class="span12">
    <ul class="quick-actions">
      <ul class="site-stats">
                <a href=""><li class="bg_lh"><i class="icon-bookmark"></i> <strong>{{$reservationsIncoming}}</strong> <small>Incoming Reservations</small></li></a>
                <a href=""><li class="bg_ly"><i class="icon-flag"></i> <strong>{{$reservationsCount}}</strong> <small>Total Reservations </small></li></a>
                <a href=""><li class="bg_lo"><i class="icon-group"></i> <strong>{{$usersCount}}</strong> <small>Total Users</small></li></a>
                <a href=""><li class="bg_dg"><i class="icon-map-marker"></i> <strong>{{$venuesCount}}</strong> <small> Available Venues </small></li></a>
                <a href=""><li class="bg_db"><i class="icon-money"></i> <strong>{{$payments}}</strong> <small>Today Sales</small></li></a>
                <a href=""><li class="bg_lr"><i class="icon-pencil"></i> <strong>{{$post}}</strong> <small>Total Posts</small></li></a>
              </ul>

    </ul>
  </div>
  <div class="span1"></div>
  <div class="span12" style="position: relative;display: contents;margin-left: 15px;">
    <div class="row-fluid">
      <div class="span5">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Reservation Bar Graph</h5>
          </div>
          <div class="widget-content">
                  {!! $chart->html() !!}
          </div>
        </div>
      </div>
      <div class="span4">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
              <h5>Monthly Sales Graph</h5>
          </div>
          <div class="widget-content">
              {!! $chartpayment->html() !!}
          </div>
        </div>
      </div>
       <div class="span12" style="margin:0 auto;">
             {!! $calendar_details->calendar() !!}
        </div>
      </div>
    </div>
  </div>
  </div>
</div>


   {!! Charts::scripts() !!}
    {!! $chart->script() !!}
    {!! $chartpayment->script() !!}
    {!! $calendar_details->script() !!}
@endsection