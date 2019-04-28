@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/feedback" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>CUSTOMERS FEEDBACKS<a onclick="window.open('/admin/Feedbackpdf')"  class="btn btn-danger" style="float:right; margin-right: 50px;">Convert to PDF</a></h1>

  </div>
    @include('admin.partials.message')
<div class="container-fluid" style="position: relative;">
    <hr>
    
  
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" >
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Feedbacks Table</h5>

          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Customer Name</th>
                  <th>Feedback</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach($feedback as $feedback)
             <tr class="gradeX">
              <td> {{$feedback->id}}</td>
              <td>{{ucfirst($feedback->name)}}</td>
              <td>{{$feedback->feedback}}</td>
              <td>{{$feedback->created_at->diffForHumans()}}</td>
              <td>{{$feedback->updated_at->diffForHumans()}}</td>
            <td>{{$feedback->is_active == 1 ? 'Published' : 'Unpublished'}}</td>
              <td>
                <form action="{{ action('FeedbackController@updateStatus', $feedback->id) }}" class="form-group" style="display: -webkit-inline-box;" method="post">
                {{method_field('Patch')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm" name="updateFood">Update</button>
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