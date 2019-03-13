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

                @foreach($audits as $audits)
                <tr class="gradeX">
              <td>{{$audits->id}} </td>
              <td>{{$audits->user}} </td>
              <td>{{$audits->event}} </td>
              <td>{{$audits->audit_type}}</td>
              <td>{{json_encode($audits->old_values)}}</td>
              <td>{{json_encode($audits->new_values)}}</td>
              <td>{{$audits->created_at->diffForHumans()}}</td>
              <td>{{$audits->updated_at->diffForHumans()}}</td>
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