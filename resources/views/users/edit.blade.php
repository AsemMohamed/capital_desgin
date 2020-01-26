@extends('users.parent')
<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Capital Design</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->

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

            </ul>
        </div>
    </nav>
</header>
@section('userC')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('users.update', $users->id) }}" class="form-horizontal" enctype="multipart/form-data">
        {{--@csrf--}} {{ csrf_field() }}
        {{-- @method('PATCH')--}}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="Name">Name</label>
            <input input type="text" name="name" value="{{ $users->name }}" class="form-control input-lg" />
        </div>
        <div class="form-group">
            <label for="Email1">Email</label>
            <input input type="text" name="email" value="{{ $users->email }}" class="form-control input-lg" />
        </div>
        <div class="form-group">
            <label for="Password1">Password</label>
            <input type="password"  name="password" value="{{ $users->password }}" class="form-control" id="Password1">
        </div>
        </div>
        <div class="form-group text-center">
            <input type="submit" name="edit" class="btn btn-primary btn-lg" value="Edit" />
            <a href="{{route('users.index') }}" type="button" class="btn btn-danger btn-lg">back</a>
        </div>
    </form>


@endsection
