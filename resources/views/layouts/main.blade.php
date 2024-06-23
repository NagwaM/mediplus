<!doctype html>
<html class="no-js" lang="zxx">
    <head>
		@include('includes.head')
		
    </head>
    <body>
	
		<!-- Preloader -->
		@include('includes.PreLoader')
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		@include('includes.ProButton')
		<!-- Header Area -->

		<header class="header" >
			<!-- Topbar -->
			@include('includes.TopBar')
			<!-- End Topbar -->
			<!-- Header Inner -->
			@include('includes.HeaderInner')
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
        @yield('content')
		
		<!-- Footer Area -->
		@include('includes.footer')
		<!--/ End Footer Area -->

		@include('includes.footerJS')

    </body>
</html>