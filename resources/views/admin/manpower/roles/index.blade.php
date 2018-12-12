@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Manpower</h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
       <a href="{{action('ManpowerRolesController@create')}}"><button class="btn btn-success">Add Manpower Roles +</button></a>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Staffs Table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Role</th>
                  <th>Date Created</th>            
                  <th>Date Updated</th>                  
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($roles as $role)
                <tr class="gradeX">    
              <td>{{ucfirst($role->name)}}</td>
              <td>{{$role->created_at}}</td>
              <td>{{$role->updated_at}}</td>
              <td>

              </td>
                </tr>
                @endforeach
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 