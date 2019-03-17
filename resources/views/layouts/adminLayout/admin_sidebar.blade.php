<!--sidebar-menu-->

<div id="sidebar">
  <ul>
    @if(Auth::check())
        @if(Auth::user()->role_id=="admin")
  <li ><a href="https://lynagailscaters.herokuapp.com/admin/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
  <li ><a href="https://lynagailscaters.herokuapp.com/admin/sales"><i class="icon icon-money"></i> <span>Sales</span></a> </li>
  <li class="submenu"><a><i class="icon icon-bookmark-empty"></i> <span>Catering Essentials</span></a>
        <ul>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/venue"><i class="icon icon-map-marker"></i> <span>Venues</span><span class="label label-important"></span></a> </li>
        <li><a href="https://lynagailscaters.herokuapp.com/admin/food"><i class="icon icon-th"></i> <span>Package</span></a></li>
        <li><a href="https://lynagailscaters.herokuapp.com/admin/category"><i class="icon icon-tint"></i> <span>Category</span></a></li>
        </ul>
  </li>
  <li class="submenu"><a><i class="icon  icon-edit"></i> <span>Posts</span></a>
        <ul>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/post"><i class="icon icon-pencil "></i> <span>Blogs</span><span class="label label-important"></span></a> </li>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/discount"><i class="icon icon-info-sign"></i> <span>Discounts</span> <span class="label label-important"></span></a></li>
        </ul>
  </li>
  <li><a href="https://lynagailscaters.herokuapp.com/admin/reservation"><i class="icon icon-flag"></i> <span>Reservations</span></a></li>
  <li> <a href="https://lynagailscaters.herokuapp.com/admin/payment"><i class="icon icon-money"></i> <span>Payments</span><span class="label label-important"></span></a> </li>
  <li class="submenu"><a href="https://lynagailscaters.herokuapp.com/admin/inventory"><i class="icon icon-inbox"></i> <span>Inventory</span></a>
      <ul>
      <li><a href="https://lynagailscaters.herokuapp.com/admin/inventory"><i class="icon icon-inbox"></i> <span>Inventory Module</span><span class="label label-important">{{$alert}}</span></a></li>
      <li class="submenu"><a href="https://lynagailscaters.herokuapp.com/admin/inventory">Reports</a>
        <ul>
          <li ><a onclick="window.open('https://lynagailscaters.herokuapp.com/admin/InventoryDamage')" ><i class="icon icon-file"></i> <span>Damage Report</span></a></li>
          <li ><a onclick="window.open('https://lynagailscaters.herokuapp.com/admin/InventoryDefect')" ><i class="icon icon-file"></i> <span>Defect Report</span></a></li>
        </ul>
      </li>
      <li><a href="https://lynagailscaters.herokuapp.com/admin/inventory-critical"><i class="icon icon-map-marker"></i> <span>Critical Stocks Module</span> <span class="label label-important">{{$alert}}</span></a></li>
      <li><a href="https://lynagailscaters.herokuapp.com/admin/inventory-category"><i class="icon icon-inbox"></i> <span>Inventory Category Module</span></a></li>
      <li><a href="https://lynagailscaters.herokuapp.com/admin/warehouse"><i class="icon icon-map-marker"></i> <span>Stock Room Module</span></a></li>
    </ul>
  </li>
  <li class="submenu"><a href="https://lynagailscaters.herokuapp.com/admin/manpower"><i class="icon icon-sitemap"></i> <span>Manpower</span></a>
    <ul>
      <li ><a href="https://lynagailscaters.herokuapp.com/admin/manpower"><i class="icon icon-th"></i> <span>Manpower</span></a></li>
      <li ><a href="https://lynagailscaters.herokuapp.com/admin/manpowerroles"><i class="icon icon-th"></i> <span>Manpower Roles</span></a></li>
      <li ><a onclick="window.open('https://lynagailscaters.herokuapp.com/admin/manpowerReserve1pdf')" ><i class="icon icon-file"></i> <span>Assign 1 Report</span></a></li>
      <li ><a onclick="window.open('https://lynagailscaters.herokuapp.com/admin/manpowerReserve2pdf')" ><i class="icon icon-file"></i> <span>Assign 2 Report</span></a></li>
    </ul>
  </li>
  <li> <a href="https://lynagailscaters.herokuapp.com/admin/user"><i class="icon icon-group"></i> <span>User Management</span> <span class="label label-important"></span></a></li>
  <li> <a href="https://lynagailscaters.herokuapp.com/admin/customers"><i class="icon icon-group"></i> <span>Customers</span> <span class="label label-important"></span></a></li>
  <li> <a href="https://lynagailscaters.herokuapp.com/admin/audit"><i class="icon icon-book"></i> <span>Audit Trail</span> <span class="label label-important"></span></a></li>

         @endif

        @if(Auth::user()->role_id=="inventory")
  <li ><a href="https://lynagailscaters.herokuapp.com/admin/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
  <li class="submenu"><a><i class="icon  icon-edit"></i> <span>Posts</span></a>
        <ul>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/post"><i class="icon icon-pencil "></i> <span>Blogs</span><span class="label label-important"></span></a> </li>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/discount"><i class="icon icon-info-sign"></i> <span>Discounts</span> <span class="label label-important"></span></a></li>
        </ul>
  </li>
  <li class="submenu"><a href="https://lynagailscaters.herokuapp.com/admin/inventory"><i class="icon icon-inbox"></i> <span>Inventory</span></a>
      <ul>
      <li><a href="https://lynagailscaters.herokuapp.com/admin/inventory"><i class="icon icon-inbox"></i> <span>Inventory Module</span></a></li>
      <li class="submenu"><a href="https://lynagailscaters.herokuapp.com/admin/inventory">Reports</a>
        <ul>
          <li ><a onclick="window.open('https://lynagailscaters.herokuapp.com/admin/InventoryDamage')" ><i class="icon icon-file"></i> <span>Damage Report</span></a></li>
          <li ><a onclick="window.open('https://lynagailscaters.herokuapp.com/admin/InventoryDefect')" ><i class="icon icon-file"></i> <span>Defect Report</span></a></li>
        </ul>
      </li>
      <li><a href="https://lynagailscaters.herokuapp.com/admin/inventory-category"><i class="icon icon-inbox"></i> <span>Inventory Category</span></a></li>
      <li><a href="https://lynagailscaters.herokuapp.com/admin/warehouse"><i class="icon icon-map-marker"></i> <span>Stock Room Module</span></a></li>
    </ul>
  </li>
 
         @endif
      

        @if(Auth::user()->role_id=="reservation")
  <li ><a href="https://lynagailscaters.herokuapp.com/admin/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
  <li class="submenu"><a><i class="icon  icon-edit"></i> <span>Posts</span></a>
        <ul>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/post"><i class="icon icon-pencil "></i> <span>Blogs</span><span class="label label-important"></span></a> </li>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/discount"><i class="icon icon-info-sign"></i> <span>Discounts</span> <span class="label label-important"></span></a></li>
        </ul>
  </li>
  <li><a href="https://lynagailscaters.herokuapp.com/admin/reservation"><i class="icon icon-flag"></i> <span>Reservations</span></a></li>
  <li> <a href="https://lynagailscaters.herokuapp.com/admin/payment"><i class="icon icon-money"></i> <span>Payments</span><span class="label label-important"></span></a> </li>
    @endif


        @if(Auth::user()->role_id=="manpower")
  <li ><a href="https://lynagailscaters.herokuapp.com/admin/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
  <li class="submenu"><a><i class="icon  icon-edit"></i> <span>Posts</span></a>
        <ul>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/post"><i class="icon icon-pencil "></i> <span>Blogs</span><span class="label label-important"></span></a> </li>
        <li> <a href="https://lynagailscaters.herokuapp.com/admin/discount"><i class="icon icon-info-sign"></i> <span>Discounts</span> <span class="label label-important"></span></a></li>
        </ul>
  </li>
  <li class="submenu"><a href="https://lynagailscaters.herokuapp.com/admin/manpower"><i class="icon icon-sitemap"></i> <span>Manpower</span></a>
    <ul>
      <li ><a href="https://lynagailscaters.herokuapp.com/admin/manpower"><i class="icon icon-th"></i> <span>Manpower</span></a></li>
      <li ><a onclick="window.open('https://lynagailscaters.herokuapp.com/admin/manpowerReserve1pdf')" ><i class="icon icon-file"></i> <span>Assign 1 Report</span></a></li>
      <li ><a onclick="window.open('https://lynagailscaters.herokuapp.com/admin/manpowerReserve2pdf')" ><i class="icon icon-file"></i> <span>Assign 2 Report</span></a></li>
    </ul>
  </li>
      @endif
     @endif
  </ul>
</div>