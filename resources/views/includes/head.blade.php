<!-- Basic -->
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="description" content="Jacobs group properties">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Libs CSS -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{asset('css/flexslider.css')}}" rel="stylesheet">

<!-- Template CSS -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">

<!-- Responsive CSS -->
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

<!-- Favicons -->
<link rel="shortcut icon" href="{{asset('img/icons/favicon.ico')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/icons/apple-touch-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/icons/apple-touch-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/icons/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" href="{{asset('img/icons/apple-touch-icon.png')}}">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1988087694750080');
fbq('track', "PageView");
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1988087694750080&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->

@if (isset($featuredImage['url']))
<style type="text/css">
	#intro {
		background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url({{url($featuredImage['url'])}});
		background-position: center;
	}
</style>
@endif
