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
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Audit Table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>USER</th>
                  <th>EVENT</th>
                  <th>CATEGORY</th>
                  <th>OLD VALUE</th>
                  <th>NEW VALUE</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                </tr>
              </thead>
              <tbody>

                @foreach($warehouse as $warehouse)
                <tr class="gradeX">
              <td>{{$warehouse->id}} </td>
              <td>{{$warehouse->user}} </td>
              <td>{{$warehouse->event}} </td>
              <td>{{$warehouse->audit_type}}</td>
              <td>{{json_encode($warehouse->old_values)}}</td>
              <td>{{json_encode($warehouse->new_values)}}</td>
              <td>{{$warehouse->created_at->diffForHumans()}}</td>
              <td>{{$warehouse->updated_at->diffForHumans()}}</td>
                </tr>
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