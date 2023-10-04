<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{{route('dashboard')}}" class="brand-link">
<img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{asset('storage/'.auth()->user()->photo)}}"  class="img-circle elevation-2" alt="User Image">
</div>
<span class="text-light">

    {{auth()->user()->name}}
</span>
<div class="info">
<a href="{{route('dashboard')}}" class="d-block">
</a>
</div>
</div>

<!-- SidebarSearch Form -->
<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->

<li class="nav-item">
<a href="{{route('dashboard')}}" class="nav-link {{request()->is('admin/dashboard')?'active':''}}">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
</p>
</a>
</li>
<!-- If user is admin-->
@if(auth()->user()->isAdmin())
<li class="nav-item">
<a href="{{route('user')}}" class="nav-link {{request()->is('admin/user')?'active':''}}">
<i class="nav-icon fas fa-users" aria-hidden="true"></i>              
<p>
Users
</p>
</a>
</li>
@endif
<li class="nav-item">
<a href="{{route('appointment')}}" class="nav-link {{request()->is('admin/appointment')?'active':''}}">
<i class="nav-icon fas fa-calendar-alt"></i>
<p>
Appointments
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-user-cog"></i>
<p>
Setting
</p>
</a>
</li>

<li class="nav-item">
<form action="{{route('logout')}}" method="POST">
@csrf 
<a onclick="event.preventDefault(); this.closest('form').submit();" href="{{route('logout')}}" class="nav-link">
<i class="nav-icon fas fa-sign-out-alt"></i>
<p>
Sign Out
</p>
</a>
</form>
</li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>