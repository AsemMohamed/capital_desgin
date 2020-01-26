@extends('sliders.parent')
<header class="main-header">
    <!-- Logo -->
    <a href="admin" class="logo">
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
@section('main')

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif

    <table class="table table-bordered bordered-bold table-striped">

        <thead>
         <tr>
            <th width="1" style="text-align: center;">Id</th>
            <th width="5" >Image</th>
            <th width="100" style="text-align: center">Title</th>
            <th width="100" style="text-align: center">Url</th>
            <th width="100" style="text-align: center">Description</th>
            <th width="0" class="inline-block" style="text-align: center">Action</th>

        </tr>
        </thead>
            @foreach( $sliders as $slider)
        <tr style="text-align: center;">
            <th width="1" style="text-align: center;">{{ $slider->id }}</th>
            <th width="2"><img src="{{url('/')}}/images/{{ $slider->image }}" class="img-thumbnail"></th>
            <th width="100" style="text-align: center;"> {{ $slider->title }} </th>
            <th width="100" style="text-align: center;">{{ $slider->url }}</th>
            <th width="100" style="text-align: center;">{{ $slider->description}}</th>
            <th width="1" style="" class="inline-block">

                <form style="text-align: center;"  action="{{route('sliders.destroy', $slider->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-warning">Edit</a>
                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                </form>
            </th>
        </tr>
        @endforeach
    </table>
    <div align="center">
        <a href="{{route('sliders.create')}}" class="btn btn-success btn-lg">add</a>
    </div>
    {!! $sliders->links() !!}
@endsection