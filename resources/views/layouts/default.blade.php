<!DOCTYPE html>
<!-- Kolo - Premium Startup Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

	<head>
		@include('includes.head')
	</head>

	<body>

		<!-- PRELOADER
		============================================= -->
		<div class="animationload">
		    <div class="loader"></div>
		</div>

		<!-- HEADER
		============================================= -->
		<header id="header">
		    @include('includes.header')
		</header>

		<!-- PAGE CONTENT WRAPPER
		============================================= -->
		<div id="content_wrapper">

			@yield('content')

			<!-- FOOTER
			============================================= -->
			<footer id="footer">
				@include('includes.footer')
			</footer>

		</div>

		<!-- EXTERNAL SCRIPTS
		============================================= -->
		@include('includes.scripts')

	</body>

</html>
