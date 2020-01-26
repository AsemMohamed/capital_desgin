@include('admin.layouts.header')
    <div class="container">
        <h1 align="center" class="jumbotron">3D Designs</h1>
        @yield('design')
        @yield('designA')
        @yield('designB')
        @yield('designC')
    </div>
@include('admin.layouts.footer')