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
       <a href="{{'/admin/manpower/create'}}"><button class="btn btn-success">Add Staff +</button></a>
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
                  <th>User ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Roles</th>
                  <th>Assign</th>            
                  <th>Availability</th>                  

                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($staffs as $staff)
                <tr class="gradeX">
              <td>{{ucfirst($staff->id)}}</td>    
              <td>{{ucfirst($staff->firstname)}}</td>
              <td>{{$staff->lastname}}</td>
              <td>{{$staff->roles}}</td>
              <td>{{$staff->is_assign == 'Assign 1'? 'Assigned' : $staff->is_assign == 'Assign 2'? 'Assigned'  : 'Unassigned'}}</td>
              <td>{{$staff->is_active == 1 ? 'Available' : 'Unavailable'}}</td>
              <td>
              <form action="{{ action('ManpowerController@updateStatus', $staff->id) }}" class="form-group" style="display: inline-flex;" method="post">
                {{method_field('Patch')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm">Update</button>
              </form>
                </form> |
                  <a href="{{'/admin/manpower/'.$staff->id.'/edit'}}" class="btn btn-primary" >Edit</a>
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


    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>{{$reservationsIncoming->eventdate ?? ''}} | {{$reservationsIncoming->lname ?? ''}} | {{$reservationsIncoming->category->name ?? ''}} | <b>Guest:</b>{{$reservationsIncoming->guest ?? ''}} | @ {{$reservationsIncoming->venue->name ?? ''}}</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Roles</th>
                  <th>Assign</th>            
                  <th>Status</th>                  
                  <th>Date Added</th>
                  <th>Date Updated</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($assign1 as $assign1)
                <tr class="gradeX">
              <td>{{ucfirst($assign1->firstname)}}</td>
              <td>{{$assign1->lastname}}</td>
              <td>{{$assign1->roles}}</td>
              <td>{{$assign1->is_assign == 'Assign 1' ? 'Assigned' : 'Unassigned'}}</td>
              <td>{{$assign1->is_active == 1 ? 'Active' : 'Inactive'}}</td>
              <td>{{$assign1->created_at->diffForHumans()}}</td>
              <td>{{$assign1->updated_at->diffForHumans()}}</td>
              <td>
                  <a href="{{'/admin/manpower/'.$assign1->id.'/edit'}}" class="btn btn-primary" >Edit</a>
              </td>
                </tr>
                @endforeach
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>{{$reservationsIncoming2->eventdate ?? ''}} | {{$reservationsIncoming2->lname ?? ''}} | {{$reservationsIncoming2->category->name ?? ''}} | <b>Guest:</b>{{$reservationsIncoming2->guest ?? ''}} | @ {{$reservationsIncoming2->venue->name ?? ''}}</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Roles</th>
                  <th>Assign</th>            
                  <th>Status</th>                  
                  <th>Date Added</th>
                  <th>Date Updated</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($assign2 as $assign2)
                <tr class="gradeX">
              <td>{{ucfirst($assign2->firstname)}}</td>
              <td>{{$assign2->lastname}}</td>
              <td>{{$assign2->roles}}</td>
              <td>{{$assign2->is_assign == 'Assign 2'? 'Assigned' : 'Unassigned'}}</td>
              <td>{{$assign2->is_active == 1 ? 'Active' : 'Inactive'}}</td>
              <td>{{$assign2->created_at->diffForHumans()}}</td>
              <td>{{$assign2->updated_at->diffForHumans()}}</td>
              <td>
                  <a href="{{'/admin/manpower/'.$assign2->id.'/edit'}}" class="btn btn-primary" >Edit</a>
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