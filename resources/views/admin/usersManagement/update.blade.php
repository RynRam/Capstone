@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/user" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">User</a> </div>
    <h1>EDIT USER</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <form action="{{action('EditUserController@update', $user->id)}}" method="POST">
    {{method_field('patch')}}{{csrf_field()}}          
        <div class="form-group" style="width: 250px;">
            <label for="role">Select Role:</label>
            <select name="role" class="form-control d-block">
            <option value="{{$user->role_id}}">{{ucfirst($user->role_id)}}</option>
            <option value="admin">Admin</option>
            <option value="reservation">Reservation</option>
            <option value="inventory">Inventory</option>
            <option value="manpower">Manpower</option>
            </select> 
            </div>
            <div class="form-group">
            <input type="submit" value="SUBMIT" class="btn btn-success" style="padding: 5px;"  >
        </div>
    </form>
      </div>
    </div>
  </div>
</div>
@endsection
