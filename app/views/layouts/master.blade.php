<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceCounter paceSocial footer-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 paceCounter paceSocial footer-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 paceCounter paceSocial footer-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceCounter paceSocial footer-sticky"> <![endif]-->
<!--[if !IE]><!--><html class="paceCounter paceSocial footer-sticky"><!-- <![endif]-->
<head>

	
	<!-- Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="/assets/less/admin/module.admin.stylesheet-complete.layout_fixed.true.less" />
	-->

		<!--[if lt IE 9]><link rel="stylesheet" href="/assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
	
		<link rel="stylesheet" href="/assets/css/admin/module.admin.stylesheet-complete.layout_fixed.true.min.css" />
	<!-- Latest compiled and minified CSS -->

	<!-- Below is Bootstrap CDN -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


 @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
 @endif
 @if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
 @endif	

	<script src="/assets/library/jquery/jquery.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>

	<script src="/assets/library/jquery/jquery-migrate.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
	<script src="/assets/library/modernizr/modernizr.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
	<script src="/assets/plugins/core_less-js/less.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
	<script src="/assets/plugins/charts_flot/excanvas.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
	<script src="/assets/plugins/core_browser/ie/ie.prototype.polyfill.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>	<script>if (/*@cc_on!@*/false && document.documentMode === 10) { document.documentElement.className+=' ie ie10'; }</script>

	@yield('topscript')
	
</head>


	

<body>
@yield('content')
</body>
</html>
@yield('bottomscript')
