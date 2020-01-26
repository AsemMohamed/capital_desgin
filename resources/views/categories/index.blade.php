@extends('categories.parent')
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

@section('category')
    @if($message = Session::get('success'))
        <div class="alert alert-success" align="center">
            {{$message}}
        </div>
    @endif

        <table class="table table-bordered bordered-bold table-striped text-center">
            <thead>
            <tr class="text-center">
                <th>id</th>
                <th>name</th>
                <th>Image</th>
                {{--<th>Url</th>--}}
                <th>Type</th>
                <th>Price</th>
                <th>SEO</th>
                <th>Height</th>
                <th>Length</th>
                <th>Width</th>
                <th>Updated_at</th>
                <th>Created_at</th>
                <th class="inline-block">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <th width="2"><img src="{{url('/')}}/images/{{ $category->image }}" class="img-thumbnail"></th>
                    {{--<td width="2">{{$category->url}}</td>--}}
                    <td>{{$category->type}}</td>
                    <td>{{$category->price}}</td>
                    <td>{{$category->seo}}</td>
                    <td>{{$category->height}}</td>
                    <td>{{$category->length}}</td>
                    <td>{{$category->width}}</td>
                    <td width="2">{{$category->created_at->diffForHumans()}}</td>
                    <td width="2">{{$category->updated_at->diffForHumans()}}</td>
                    <th class="inline-block">
                        <form style="text-align: center;" action="{{route('categories.destroy', $category->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">Edit</a>
                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    {{--{!! $users->links() !!}--}}
    <div align="center">
        <a href="{{route('categories.create')}}" class="btn btn-success btn-lg">add</a>
    </div>
    <br>
@endsection