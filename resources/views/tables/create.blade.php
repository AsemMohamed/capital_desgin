@extends('tables.parent')
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
<br>
@section('tableB')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal" method="post" action="{{route('tables.store') }}" enctype="multipart/form-data">
        {{--@csrf--}} {{ csrf_field() }}
        <div class="form-group">
            <label class="col-md-4 text-right">Name</label>
            <div class="col-md-4">
                <input type="text" name="name" class="form-control input-lg">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Price</label>
            <div class="col-md-4">
                <input type="text" name="price" class="form-control input-lg">
            </div>
        </div>
        {{--<div class="form-group">
            <label class="col-md-4 text-right">Url</label>
            <div class="col-md-8">
                <input type="text" name="url" class="form-control input-lg">
            </div>
        </div>--}}
        <div class="form-group">
            <label class="col-md-4 text-right">Type</label>
            <div class="col-md-4">
                <input type="text" name="type" class="form-control input-lg">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Category</label>
            <div class="col-md-4">
                <select class="form-control" name="category">
                    <option value="chairs">Chairs</option>
                    <option value="sofas">Sofas</option>
                    <option value="tables">Tables</option>
                    <option value="dinings">Dinings</option>
                    <option value="beds">Beds</option>
                    <option value="st_chairs">Stainless Chairs</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">SEO</label>
            <div class="col-md-4">
                <input type="text" name="seo" class="form-control input-lg">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Height</label>
            <div class="col-md-4">
                <input type="text" name="height" class="form-control input-lg">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Length</label>
            <div class="col-md-4">
                <input type="text" name="length" class="form-control input-lg">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">width</label>
            <div class="col-md-4">
                <input type="text" name="width" class="form-control input-lg">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile" class="col-md-4 text-right">File input</label>
            <input type="file" name="image" id="exampleInputFile" class="col-md-8">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary btn-lg" class="col-md-8" href="{{route('tables.index') }}">Save</button>
            <a href="{{route('tables.index') }}" class="btn btn-danger btn-lg">back</a>
        </div>

    </form>
    <br>
    <br>
    <br>
@endsection