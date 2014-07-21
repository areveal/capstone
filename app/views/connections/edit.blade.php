@extends('layouts.master')

@section('topscript')
	<title>Diversity Connect</title>
@stop


@section('content')
<body class=" scripts-async menu-right-hidden">

			<!-- <div class="layout-app">  -->
			<div class="innerAll">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			
			<div class="timeline-cover">
	<div class="widget border-bottom">

		<div class="widget-body border-bottom">
			<div class="media">
				<div class="pull-left innerAll">
					<img src="{{ $user->img_path }}" alt="" class="img-circle">
				</div>
				<div class="media-body">
					<h4><a href="">{{{ $user->first_name . ' ' . $user->last_name }}}</a> <a href="" class="text-muted"></a></h4>					
				</div>
			</div>
		</div>

		
		<div class="">
			<ul class="navigation">
				<li><a class="" href="{{ action('UsersController@show', $user->id) }}"><i class="fa fa-fw fa-user"></i><span> Profile</span></a></li>
				<li class="active"><a href="#"><i class="fa fa-fw icon-group"></i><span> Connections</span></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>		

	</div>
	

</div>



			<div class="input-group innerB">
 	<input type="text" class="form-control " placeholder="Search contacts">
	<div class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
</div>

<div class="row row-merge">
		
	@if(count($connections) == 0)
		<h4>The user has no connections to display.</h4>
	@endif

	@foreach($connections as $connection)

		<div class="col-md-12 col-lg-6 bg-white border-bottom">
			<div class="row">

				<div class="col-sm-9">
					<div class="media">
						<a class="pull-left margin-none" href="#">
							<img class="img-clean" src="{{{ $connection->img_path }}}" alt="...">
						</a>
						<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
							 <h4 class="media-heading"><a href="" class="text-inverse">{{{ $connection->first_name . ' ' . $connection->last_name }}}</a></h4>
							 <p>
							 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in {{{ $connection->city . ', ' . $connection->state }}}</p> 
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="innerAll text-right">
						<div class="btn-group-vertical btn-group-sm">
							<a href="" class="btn btn-primary"><i class="fa fa-fw fa-thumbs-up"></i> Connect</a>
							<a href="" class="btn btn-default" data-toggle="sidr-open" data-menu="menu-right"><i class="fa fa-fw fa-envelope-o"></i> Chat</a>
						</div>
					</div>
				</div>
			</div>
		
		</div>

	@endforeach
		
</div>



			



		
				<!-- Footer -->
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase Social Admin Template</a> - Current version: v2.0.0-rc8 / <a target="_blank" href="../assets/../../CHANGELOG.txt?v=v2.0.0-rc8">changelog</a></div>
			<!--  End Copyright Line -->
	
		</div>
		<!-- // Footer END -->
		
				
	</div>
	<!-- // Main Container Fluid END -->
	

	<!-- Global -->
	<script data-id="App.Config">
		var basePath = '',
		commonPath = '../assets/',
		rootPath = '../',
		DEV = false,
		componentsPath = '../assets/components/';
	
	var primaryColor = '#25ad9f',
		dangerColor = '#b55151',
		successColor = '#609450',
		infoColor = '#4a8bc2',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	
	var themerPrimaryColor = primaryColor;

		App.Config = {
		ajaxify_menu_selectors: ['#menu'],
		ajaxify_layout_app: false	};
		</script>
	
		
</body>
</html>