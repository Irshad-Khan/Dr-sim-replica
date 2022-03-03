<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.app_partials.header')
</head>
<body>
    @include('layouts.app_partials.top_bar')
    @yield('content')
    @include('layouts.app_partials.footer')
    @include('layouts.app_partials.footer_script')
</body>
</html>


