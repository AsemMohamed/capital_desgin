@include('admin.layouts.header')
    <div class="container">
        <h1 align="center" class="jumbotron" algin="center">New Arrivals</h1>
        @yield('arrival')
        @yield('arrivalA')
        @yield('arrivalB')
        @yield('arrivalC')
    </div>
@include('admin.layouts.footer')