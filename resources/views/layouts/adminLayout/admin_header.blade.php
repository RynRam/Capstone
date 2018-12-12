<!--Header-part-->
<div id="header"> <!-- Change logo -->
    <h1><!-- <a href="dashboard.html">Lynagails</a> --></h1>
</div>
<!--close-Header-part--> 
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>{{ Auth::user()->name }}</a>

    </li>

    <li class=""><a title="" href="{{url('/admin/settings')}}"><i class="icon icon-cog"></i> <span class="text">Change Password</span></a></li>
    <li class=""><a title="" href="{{url('/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
