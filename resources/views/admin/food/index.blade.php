@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin/food" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>PACKAGES<a onclick="window.open('/admin/Packagepdf')"  class="btn btn-danger" style="float:right; margin-right: 50px;">Convert to PDF</a></h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
     <a href="{{action('FoodController@create')}}"><button class="btn btn-success">Add Package +</button></a>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Food Table</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Package</th>
                  <th>Inclusion</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                 <th>File Uploaded</th>
                 <th>Availability</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach($food as $food)
                <tr class="gradeX">
			        <td> {{ucfirst($food->name)}}</td>
              <td>{{ucfirst($food->inclusion)}}</td>
			        <td>{{$food->price}}</td>
              <td>{{$food->category->name}}</td>
              <td>{{$food->created_at->diffForHumans()}}</td>
              <td>{{$food->updated_at->diffForHumans()}}</td>
              <td style='text-align:center !important;'><a href="../../images/{{$food->file}}" data-lightbox="food" class="link-preview " title="Preview"><i class="ion ion-eye" style="font-size:23px;color:#18d26e;"></i></a></td>
               <td>{{$food->is_active == 1 ? 'Available' : 'Unavailable'}}</td>
              <td>
                <form action="{{ action('FoodController@updateStatus', $food->id) }}" class="form-group" style="display: -webkit-inline-box;" method="post">
                {{method_field('Patch')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm" name="updateFood">Update</button>
              </form> |
               <a href="{{action('FoodController@edit', $food->id)}}" class="btn btn-primary">Edit</a>
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