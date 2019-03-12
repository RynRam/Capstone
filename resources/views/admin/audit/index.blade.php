@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Audits Trail</h1>

  </div>

  <div class="container-fluid">
    <hr>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Audit Trail</h5>
          </div>
          <h4>Warehouse Audits</h4>
          <ul>
          @foreach($warehouse as $warehouse)
              <li><b>ID:</b>{{$warehouse->id}} </li>
              <li><b>USER:</b>{{$warehouse->user}} </li>
              <li><b>EVENT:</b>{{$warehouse->event}} </li>
              <li><b>CATEGORY:</b>{{$warehouse->audit_type}}</li>
              <li><b>OLD VALUE:</b>{{in_array($warehouse->old_values)}}</li>
              <li><b>NEW VALUE:</b>{{in_array($warehouse->new_values)}}</li>
              <li><b>Date Created:</b>{{$warehouse->created_at->diffForHumans()}}</li>
              <li><b>Date Updated:</b>{{$warehouse->updated_at->diffForHumans()}}</li>
          
            @endforeach
          </ul>
        </div>
      </div>
    </div>


  </div>

</div>
@endsection 