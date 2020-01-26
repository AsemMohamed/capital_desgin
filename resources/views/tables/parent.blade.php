@include('admin.layouts.header')
    <div class="container">
<h1 align="center" class="jumbotron">Tables</h1>
@yield('table')
@yield('tableA')
@yield('tableB')
@yield('tableC')
    </div>
@include('admin.layouts.footer')