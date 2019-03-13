@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>INVENTORY <a onclick="window.open('/admin/Inventorypdf')" class="btn btn-danger" style="float:right; margin-right: 50px;">Convert to PDF</a></h1>

  </div>
    @include('admin.partials.message')
  <div class="container-fluid">
    <hr>
     <a href="{{'/admin/inventory/create'}}"><button class="btn btn-success">Add Item +</button></a>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Inventory table </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Product No.</th>
                  <th>Stock Room</th>
                  <th>Item Code</th>
                  <th>Product Description</th>
                  <th>Item Category</th>
                  <th>Unit Price</th>
                  <th>Stock on hand</th>
                  <th>Date Added</th>
                  <th>Date Updated</th>
                  <th>Availability</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $var = 1;?>
                @foreach($inventories as $inventory)
                <tr class="gradeX">

              <td><?php echo $var;?></td>
              <td>{{$inventory->warehouse->name}}</td>	
  		        <td>{{ucfirst($inventory->item_code)}}</td>
			        <td>{{$inventory->item_name}}</td>
              <td>{{$inventory->category->category}}</td>
              <td>{{$inventory->price}}</td>
               <td>{{$inventory->stock_on_hand}}</td>
              <td>{{$inventory->created_at->diffForHumans()}}</td>
              <td>{{$inventory->updated_at->diffForHumans()}}</td>
              <td>{{$inventory->is_active == 1 ? 'Available' : 'Unavailable'}}</td>
              <td>
              <form action="{{ action('InventoryController@updateStatus', $inventory->id) }}" class="form-group" style="display: -webkit-inline-box;" method="post">
                {{method_field('Patch')}}{{csrf_field()}}
                <button class="btn btn-success btn-sm">Update</button>
              </form>  |

               <a href="{{'/admin/inventory/'.$inventory->id.'/edit'}}" class="btn btn-primary" >Edit</a>
           
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

    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Damaged Items</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Item Code</th>
                  <th>Product Description</th>
                  <th>Number of Damaged Items</th>            
                </tr>
              </thead>
              <tbody>
                @foreach($damages as $damage)
                <tr class="gradeX">
              <td>{{ucfirst($damage->item_code)}}</td>
              <td>{{$damage->item_name}}</td>
              <td>{{$damage->damage}}</td>
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
            <h5>Defect Items</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Item Code</th>
                  <th>Product Description</th>
                  <th>Number of Defect Items</th>            
                </tr>
              </thead>
              <tbody>
                @foreach($defects as $defect)
                <tr class="gradeX">
              <td>{{ucfirst($defect->item_code)}}</td>
              <td>{{$defect->item_name}}</td>
              <td>{{$defect->defect}}</td>
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