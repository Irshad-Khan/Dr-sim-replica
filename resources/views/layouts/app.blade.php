<!DOCTYPE html>
<html lang="{{ session()->get('locale') }}">
<head>
    @include('layouts.app_partials.header')
    @yield('style')
</head>
<body>
    @include('layouts.app_partials.top_bar')
    @yield('content')
    @include('layouts.app_partials.footer')
    @include('layouts.app_partials.footer_script')

    @yield('script')
    <script>
        $(document).ready(function(){
            $('.selectpicker').selectpicker();

            var url = '{{ route('changeLang') }}';
            $('.languageSelector').change(function(){
                window.location.href = url + "?lang="+ $(this).val();
            });
        });
    </script>
</body>
</html>


