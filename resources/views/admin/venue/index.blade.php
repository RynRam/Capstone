@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/venue" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Venues<a onclick="window.open('/admin/Venuepdf')" class="btn btn-danger" style="float:right; margin-right: 50px;">Convert to PDF</a></h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
     <a href="{{action('VenueController@create')}}"><button class="btn btn-success">Add Venue +</button></a>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Venue Table</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>

                  <th>Venue Name</th>
                  <th>Address</th>
                  <th>Contact Person</th>
                  <th>Contact</th>
                  <th>Price</th>
                  <th>File Uploaded</th>
                  <th>Availability</th>
                  <th>Capacity</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($files as $file)
                <tr class="gradeX">

	          <td>{{ucfirst($file->name)}}</td>
              <td>{{$file->address}}</td>
              <td>{{$file->contact_person}}</td>
              <td>{{$file->contact}}</td>
              <td>{{$file->price}}</td>
              <td style='text-align:center !important;'><a href="../../images/{{$file->file}}" data-lightbox="venue" class="link-preview " title="Preview"><i class="ion ion-eye" style="font-size:23px;color:#18d26e;"></i></a></td>
               <td>{{$file->is_active == 1 ? 'Available' : 'Unavailable'}}</td>
               <td>{{$file->capacity}}</</td>
                <td><form action="{{ action('VenueController@updateStatus', $file->id) }}" class="form-group" style="display:-webkit-inline-box;" method="post">
                {{method_field('Patch')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm">Update</button>
              </form> |
               <a href="{{'/admin/venue/'.$file->id.'/edit'}}" class="btn btn-primary" >Edit</a>
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
