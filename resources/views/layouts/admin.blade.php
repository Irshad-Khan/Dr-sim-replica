<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.dashboard_partials.header')
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-red box-layout" style="max-width: 1500px !important">

        @include('layouts.dashboard_partials.top_bar')

		@include('layouts.dashboard_partials.left_sidebar')

         <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
                @yield('content')
			</div>
        @include('layouts.dashboard_partials.footer')
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    @include('layouts.dashboard_partials.footer_script')

    @yield('script')

    <script>
        $(document).ready(function(){
            var success = '{{ Session::get('success') }}';
            if(success){
                $.toast({
                    heading: 'Success!',
                    text: success,
                    position: 'top-right',
                    loaderBg:'#fec107',
                    icon: 'success',
                    hideAfter: 3500,
                    stack: 6
		        });
            }


             //Warning Message
            $('.sa-warning').on('click',function(e){
                swal({
                    title: "Are you sure?",
                    text: "You want to change status!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#fec107",
                    confirmButtonText: "Yes, Change it!",
                    closeOnConfirm: false
                }, function(){
                    {{--  return true;  --}}
                });
                return false;
            });
        });
    </script>

</body>

</html>
