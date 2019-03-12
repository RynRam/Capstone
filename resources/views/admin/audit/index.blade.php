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
          <h4>Event  Categories</h4>
          <ul>
            @foreach($category as $category){
              <li><b>ID:</b>{{$category->id}} </li>
              <li><b>USER:</b>{{$category->user}} </li>
              <li><b>EVENT:</b>{{$category->event}} </li>
              <li><b>CATEGORY:</b>{{$category->audit_type}}</li>
              <li><b>OLD VALUE:</b>{{$category->old_values}}</li>
              <li><b>NEW VALUE:</b>{{$category->new_values}}</li>
              <li><b>NEW VALUE:</b>{{$category->created_at->diffForHumans()}}</li>
              <li><b>NEW VALUE:</b>{{$category->updated_at->diffForHumans()}}</li>
            }
            @endforeach
          </ul>
        </div>
      </div>
    </div>


  </div>

</div>
@endsection 