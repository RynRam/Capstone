@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>CATEGORIES</h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
    <!-- Basic Catering -->
     <a href="{{action('CategoryController@create')}}"><button class="btn btn-success">Add Category +</button></a>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Basic Catering Table</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $var = 1;?>
                @foreach($caterings as $catering)
                <tr class="gradeX">
              <td><?php echo $var;?></td>
     	        <td>{{ucfirst($catering->name)}}</td>
              @if($catering->event_categories_id == '1')
              <td>Basic Catering</td>
              @elseif($catering->event_categories_id == '2')
              <td> Debut Catering </td>  
              @elseif($catering->event_categories_id == '3')
              <td>Wedding Catering</td>  
              @endif
              <td>{{$catering->created_at->diffForHumans()}}</td>
              <td>{{$catering->updated_at->diffForHumans()}}</td>
              <td>
              <a href="{{'/admin/category/'.$catering->id.'/edit'}}" class="btn btn-primary">Edit</a>
            </td>
                </tr>
                <?php $var++; ?>
                @endforeach

                </tr>
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