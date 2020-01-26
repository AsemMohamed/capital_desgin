
<header class="main-header">

    <!-- Logo -->
    <a href="admin" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Capital design</span>
    </a>


    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        @include('admin.layouts.menu')

    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('')}}//design/admin/dist/img/avatar2.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Capital Design</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
      {{--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>--}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Sliders</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('sliders.create')}}"><i class="fa fa-circle-o"></i> Add Slider</a></li>
                    <li><a href="{{route('sliders.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-building"></i>
                    <span>Departments</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('departments.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-clipboard"></i>
                    <span>New Arrival</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('arrivals.create')}}"><i class="fa fa-circle-o"></i> Add Arrival</a></li>
                    <li><a href="{{route('arrivals.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span>Categories</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                    <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">

                    <i class="fa fa-bars"></i>
                    <span> 3D Design</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('designs.create')}}"><i class="fa fa-circle-o"></i> Add design</a></li>
                    <li><a href="{{route('designs.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-yelp"></i>
                    <span>Chairs</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('chairs.create')}}"><i class="fa fa-circle-o"></i> Add Chairs</a></li>
                    <li><a href="{{route('chairs.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Sofa</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('sofas.create')}}"><i class="fa fa-circle-o"></i> Add Sofa</a></li>
                    <li><a href="{{route('sofas.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bed"></i>
                    <span>Beds</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('beds.create')}}"><i class="fa fa-circle-o"></i> Add Beds</a></li>
                    <li><a href="{{route('beds.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cube"></i>
                    <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('tables.create')}}"><i class="fa fa-circle-o"></i> Add Tables</a></li>
                    <li><a href="{{route('tables.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cutlery"></i>
                    <span>Dining</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('dinings.create')}}"><i class="fa fa-circle-o"></i> Add Dining</a></li>
                    <li><a href="{{route('dinings.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-magic"></i>
                    <span>Stainless Chairs</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('st_chairs.create')}}"><i class="fa fa-circle-o"></i> Add Stainless Chairs</a></li>
                    <li><a href="{{route('st_chairs.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>

            <li class="treeview" style="{{ app('request')->user()->name  === 'asem' ? '': 'display: none;'}}">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('users.create')}}"><i class="fa fa-circle-o"></i> Add Users</a></li>
                    <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>
            <li class="treeview" style="{{ app('request')->user()->name  === 'asem' ? '': 'display: none;'}}">
                <a href="#">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    <span>Album</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('albums.create')}}"><i class="fa fa-circle-o"></i> Add Images</a></li>
                    <li><a href="{{route('albums.index')}}"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>
        </ul>
    </section>

    <!-- /.sidebar -->
</aside>
@yield('body')
