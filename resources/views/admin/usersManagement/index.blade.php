@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/user" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>ACCOUNT MANAGEMENT</h1>

  </div>
    @include('admin.partials.message')
<div class="container-fluid" style="position: relative;overflow: auto;overflow-x: visible;">
    <hr>
     <a href="{{action('UserController@create')}}"><button class="btn btn-success">Add User +</button></a>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" style="overflow-x:auto;">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>User Table</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>                  
                  <th>Date Added</th>
                  <th>Date Updated</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr class="gradeX">

              <td>{{$user->id}}</td>
	          <td>{{ucfirst($user->name)}}</td>
              <td>{{$user->email}}</td>
              <td>{{ucfirst($user->role_id)}}</td>
              <td>{{$user->is_active == 1 ? 'Available' : 'Expired'}}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
              <td>{{$user->updated_at->diffForHumans()}}</td>
              <td>
              <form action="{{ action('UserController@updateStatus', $user->id) }}" class="form-group" style="display: inline-flex;" method="post">
                {{method_field('Patch')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm">Update</button>
              </form>
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