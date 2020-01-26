<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{url('')}}//design/admin/dist/img/logo-light.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Capital Design</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{url('')}}//design/admin/dist/img/logo-light.jpg" class="img-circle" alt="User Image">

                    <p>
                       Capital Design
                        <small>Member since Nov. 2012</small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-right btn btn-default btn-flat">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();

                                                     ">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
    </ul>
</div>