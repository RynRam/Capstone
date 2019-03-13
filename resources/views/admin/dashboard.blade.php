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
              
          </div>
        </div>
      </div>
      <div class="span4">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
              <h5>Monthly Sales Graph</h5>
          </div>
          <div class="widget-content">
  
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



    {!! $calendar_details->script() !!}
@endsection