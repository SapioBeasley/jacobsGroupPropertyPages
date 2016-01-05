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

<style type="text/css">
	#intro {
		background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/uploads/{{$property['slug'] }}.jpg);
		background-position: center;
	}
</style>
