@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/audit" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Audits Trail</h1>

  </div>
  <div class="container-fluid" style="position: relative;overflow: auto;overflow-x: visible;">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" style="overflow-x:auto;">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>USER</th>
                  <th>EVENT</th>
                  <th>AUDIT  TYPE</th>
                  <th>OLD VALUES</th>
                  <th>NEW VALUES</th>
                  <th>CREATED AT</th>
                  <th>UPDATED AT</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach($audits as $audits)
                <tr class="">
                <td class="  ">{{$audits->id}}</td>
                  <td class=" ">{{$audits->user}}</td>
                  <td class=" ">{{$audits->event}}</td>
                  <td class=" ">{{$audits->audit_type}}</td>
                  <td class=" ">{{json_encode($audits->old_values)}}</td>
                  <td class=" ">{{json_encode($audits->new_values)}}</td>
                  <td class="  ">{{$audits->created_at->diffForHumans()}}</td>
                  <td class=" ">{{$audits->updated_at->diffForHumans()}}</td>
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