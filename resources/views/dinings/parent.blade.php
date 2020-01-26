@include('admin.layouts.header')
<div class="container">
    <h1 align="center" class="jumbotron">Dinnings</h1>
    @yield('dining')
    @yield('diningA')
    @yield('diningB')
    @yield('diningC')
</div>
@include('admin.layouts.footer')