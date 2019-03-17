@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Post</a> </div>
    <h1>EDIT POST</h1>
  </div>
  <div class="container-fluid">
    <hr>

      <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Post</h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
          <form action="{{action('CMSController@update', $posts->id)}}" method="post" enctype="multipart/form-data">
		  	      {{csrf_field()}}{{method_field('PUT')}}
              <div class="controls">
              <input type="text" class="span12 block" name="title" placeholder="Enter Title ..." value="{{$posts->title}}">
              <input type="text" class="span12 block" name="author" placeholder="Enter Author Name ..." value="{{$posts->author}}" required>
              <textarea class="textarea_editor span12" rows="6"  name="info" placeholder="Enter Text ...">{{$posts->info}}</textarea>
             <div class="form-group">
              <label for="file">Upload Image:</label>
              <input type="file" class="form-control" name="file" id="file" value="{{$posts->file}}">
              </div>
            	<div class="form-group ">
	            <label for="role" class="col-md-4 control-label">Availability</label>
	                <select name="active" class="form-control" style="width: 17%" >
	                    <option value="1">Available</option>
	                    <option value="0">Unavailable</option>
	                </select> 
		        </div>
              <input type="submit" class="btn btn-success" value="Post" style="margin-top: 17px;">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
</div>
@endsection