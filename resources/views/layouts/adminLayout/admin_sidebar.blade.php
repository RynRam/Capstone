<!--sidebar-menu-->

<div id="sidebar">
  <ul>
    <li ><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="{{url('/admin/venue')}}"><i class="icon icon-map-marker"></i> <span>Venues</span><span class="label label-important"></span></a> </li>
     <li> <a href="{{url('/admin/post')}}"><i class="icon icon-pencil "></i> <span>Posts</span><span class="label label-important"></span></a> </li>
    <!-- <li><a href="{{url('/admin/sales')}}"><i class="icon icon-th"></i> <span>Sales</span></a></li> -->
    <li><a href="{{url('/admin/food')}}"><i class="icon icon-th"></i> <span>Package</span></a></li>
    <li><a href="{{url('/admin/category')}}"><i class="icon icon-tint"></i> <span>Category</span></a></li>
    <li><a href="{{url('/admin/reservation')}}"><i class="icon icon-flag"></i> <span>Reservations</span></a></li>
    <li> <a href="{{url('/admin/payment')}}"><i class="icon icon-money"></i> <span>Payments</span><span class="label label-important"></span></a> </li>
    <li class="submenu"><a href="{{url('/admin/inventory')}}"><i class="icon icon-inbox"></i> <span>Inventory</span></a>
       <ul>
        <li><a href="{{url('/admin/inventory')}}"><i class="icon icon-inbox"></i> <span>Inventory Module</span></a></li>
        <li class="submenu"><a href="{{url('/admin/inventory')}}">Reports</a>
          <ul>
            <li ><a onclick="window.open('/admin/InventoryDamage')" ><i class="icon icon-file"></i> <span>Damage Report</span></a></li>
            <li ><a onclick="window.open('/admin/InventoryDefect')" ><i class="icon icon-file"></i> <span>Defect Report</span></a></li>
          </ul>
        </li>
        <li><a href="{{url('/admin/inventory-category')}}"><i class="icon icon-inbox"></i> <span>Inventory Category</span></a></li>
        <li><a href="{{url('/admin/warehouse')}}"><i class="icon icon-map-marker"></i> <span>Stock Room Module</span></a></li>
      </ul>
    </li>
    <li class="submenu"><a href="{{url('/admin/manpower')}}"><i class="icon icon-sitemap"></i> <span>Manpower</span></a>
      <ul>
        <li ><a href="{{url('/admin/manpower')}}"><i class="icon icon-th"></i> <span>Manpower</span></a></li>
        <li ><a onclick="window.open('/admin/manpowerReserve1pdf')" ><i class="icon icon-file"></i> <span>Assign 1 Report</span></a></li>
        <li ><a onclick="window.open('/admin/manpowerReserve2pdf')" ><i class="icon icon-file"></i> <span>Assign 2 Report</span></a></li>
      </ul>
    </li>
    <li> <a href="{{url('/admin/user')}}"><i class="icon icon-group"></i> <span>User Management</span> <span class="label label-important"></span></a>
     </li>
     <li> <a href="{{url('/admin/audit')}}"><i class="icon icon-book"></i> <span>Audit Trail</span> <span class="label label-important"></span></a>
     </li>
      <li> <a href="{{url('/admin/discount')}}"><i class="icon icon-info-sign"></i> <span>Discounts</span> <span class="label label-important"></span></a>
     </li>
  </ul>
</div>