@include('admin.layouts.header')
<div class="container">
    <h1 align="center" class="jumbotron">Products Album</h1>
    @yield('album')
    @yield('albumA')
    @yield('albumB')
    @yield('albumC')
</div>
@include('admin.layouts.footer')