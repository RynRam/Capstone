@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Post</a> </div>
    <h1>ADD NEW POST</h1>
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
          <form action="/admin/post/" method="post" enctype="multipart/form-data">
		  	      {{csrf_field()}}
            <div class="controls">
              <input type="text" class="span12 block" name="title" placeholder="Enter Title ..." required>
              <input type="text" class="span12 block" name="author" placeholder="Enter Author Name ..." required>
              <textarea class="textarea_editor span12" rows="6"  name="info" placeholder="Enter Text ..." required></textarea>
            <div class="form-group">
              <label for="file">Upload Image:</label>
              <input type="file" class="form-control" name="file" id="file" required>
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