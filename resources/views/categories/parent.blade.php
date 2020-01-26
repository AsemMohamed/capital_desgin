@include('admin.layouts.header')
    <div class="container">
        <h1 align="center" class="jumbotron" algin="center">Categories</h1>
        @yield('category')
        @yield('categoryA')
        @yield('categoryB')
        @yield('categoryC')

    </div>
@include('admin.layouts.footer')