@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/user" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>ACCOUNT MANAGEMENT</h1>

  </div>
    @include('admin.partials.message')
<div class="container-fluid" style="position: relative">
    <hr>
     <a href="{{action('UserController@create')}}"><button class="btn btn-success">Add User +</button></a>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" >
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>User Table</h5>

          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
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
              <a href="{{action('EditUserController@edit', $user->id)}}"><button class="btn btn-primary" data-toggle="modal" data-target="#reserve_edit{{$user->id}}" >Role</button></a>
            </td>
                </tr>
                        <!-- edit -->
              <div class="modal fade" id="reserve_edit{{$user->id}}"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Role? </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{action('EditUserController@update', $user->id)}}" method="POST">
                            {{method_field('patch')}}{{csrf_field()}}          
                            <div class="form-group" style="width: 250px;">
                              <label for="role">Select Role:</label>
                              <select name="role" class="form-control d-block" id="select2-sample" >
                                    <option value="{{$user->role_id}}">{{$user->role_id}}</option>
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>                      
              <script>
                $(document).ready(function() {

                $('#reserve_edit{{$users->id}}').on('show.bs.modal', function() {
                  $('#select2-sample').select2();
                })

                $('#reserve_edit{{$users->id}}').on('hidden.bs.modal', function() {
                  $('#select2-sample').select2('destroy');
                })
                });
              </script>
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

