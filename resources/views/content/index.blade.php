@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>POST</h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
    <!-- Basic Catering -->
     <a href="{{action('CMSController@create')}}"><button class="btn btn-success">Add Post +</button></a>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>POST</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Post</th>
                  <th>Post Date</th>
                 <th>File Uploaded</th>
                  <th>Availability</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
           			@foreach($posts as $post)
                		<tr>
                    	<td>{{$post->title}}</td>
                      <td>{{$post->author}}</td>
                    	<td>{{$post->info}}</td>
                      <td>{{$post->created_at}}</td>
                      <td style='text-align:center !important;'><a href="{{asset('storage/upload/'.$post->file)}}" data-lightbox="venue" class="link-preview " title="Preview"><i class="ion ion-eye" style="font-size:23px;color:#18d26e;"></i></a></td>                  	<td>{{$post->is_active == 1 ? 'Available' : 'Unavailable'}}</td>
                    	<td>
                         <a href="{{'/admin/post/'.$post->id.'/edit'}}" class="btn btn-primary">Edit</a>|
                    <form action="{{'/admin/post/'.$post->id}}" class="form-group" style="display: -webkit-inline-box;" method="post">
                      {{method_field('DELETE')}}{{csrf_field()}}
                      <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                      </td>
                  </tr>
       				 @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Debut Catering -->



  </div>

</div>
@endsection 