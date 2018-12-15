@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>CUSTOMERS</h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>CUSTOMERS</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Contact</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                </tr>
              </thead>
              <tbody>
                @foreach($customers as $customer)
                    <tr>
                    <td>{{$customer->fname}}</td>
                  <td>{{$customer->lname}}</td>
                  <td>{{$customer->contact}}</td>
                  <td>{{$customer->address}}</td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->created_at}}</td>
                  <td>{{$customer->updated_at}}</td>
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