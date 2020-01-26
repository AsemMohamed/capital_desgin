@extends('sofas.parent')
<div class="container">
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
</div>

@section('sofaA')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('sofas.update', $sofas->id) }}" class="form-horizontal" enctype="multipart/form-data">
        {{--@csrf--}} {{ csrf_field() }}
        {{-- @method('PATCH')--}}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label class="col-md-4 text-right">Name</label>
            <div class="col-md-4">
                <input type="text" name="name" value="{{ $sofas->name }}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Price</label>
            <div class="col-md-4">
                <input type="text" name="price" value="{{ $sofas->price }}" class="form-control input-lg" />
            </div>
        </div>
        {{--<div class="form-group">
            <label class="col-md-4 text-right">Url</label>
            <div class="col-md-8">
                <input type="text" name="url" value="{{ $sofas->price }}" class="form-control input-lg" />
            </div>
        </div>--}}
        <div class="form-group">
            <label class="col-md-4 text-right">Type</label>
            <div class="col-md-4">
                <input type="text" name="type" value="{{ $sofas->type }}" class="form-control input-lg" />
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
                <input type="text" name="seo" value="{{ $sofas->seo }}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Height</label>
            <div class="col-md-4">
                <input type="text" name="height" value="{{ $sofas->height }}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Length</label>
            <div class="col-md-4">
                <input type="text" name="length" value="{{ $sofas->length }}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Width</label>
            <div class="col-md-4">
                <input type="text" name="width" value="{{ $sofas->width }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right"></label>
            <div class="col-md-8">
                <input type="file" name="image" />
                <img src="{{ URL::to('/') }}/images/{{ $sofas->image }}" class="img-thumbnail" width="100" />
                <input type="hidden" name="hidden_image" value="{{ $sofas->image }}" />
            </div>
        </div>
        <br /><br /><br />
        <div class="form-group text-center">
            <input type="submit" name="edit" class="btn btn-primary btn-lg" value="Edit" />
            <a href="{{route('sofas.index') }}" type="button" class="btn btn-danger btn-lg">back</a>
        </div>
    </form>


@endsection
