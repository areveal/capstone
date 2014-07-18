@extends('layouts.master')

@section('topscript')
	<title>Users</title>
@stop

@section('bodytag')
<body class=" scripts-async">		
@stop	


@section('content')
<!-- Content START -->
<div id="content">
	


			<!-- <div class="layout-app">  -->
			<div class="innerAll">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			

@if(Auth::check())
<div class="timeline-cover">
	<div class="widget border-bottom">

		<div class="widget-body border-bottom">
			<div class="media">
				<div class="pull-left innerAll">
					<img src="{{ Auth::user()->img_path }}" alt="" class="img-circle">
				</div>
				
				<div class="media-body">
					<h4>{{ Auth::user()->id }} {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</a> <a href="" class="text-muted"></h4>
					<div class="clearfix"></div>
					<a href="{{ action('UsersController@show', Auth::user()->id) }}" class="btn btn-info btn-sm">
						<i class="icon-turn-right"></i> Home
					</a>
				</div>
			</div>
		</div>
	</div>
	

</div>
@endif



<!--General Search Bar-->
{{ Form::open(['action' => ['UsersController@index'],'method' => 'GET']) }}			
<div class="input-group innerB">
	<div class="col-md-12 col-lg-6">
 		<input type="text" name="first_name" class="form-control " placeholder="First Name">
 	</div>
 	<div class="col-md-12 col-lg-6">
	 	<input type="text" name="last_name" class="form-control " placeholder="Last Name" required>
	 </div>
	<div class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></div>
</div>
{{ Form::close() }}

<!--Here is the list of all the contacts!!!-->
<div class="row row-merge">

@if(count($users)>0)		
	@foreach($users as $user)
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
			<div class="row">
					<div class="col-sm-9">
						<div class="media">
							<a class="pull-left margin-none" href="{{ action('UsersController@show', $user->id) }}">
								<img class="img-clean" src="{{ $user->img_path }}" alt="">
							</a>
							<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
								 <h4 class="media-heading"><a href="{{ action('UsersController@show', $user->id) }}" class="text-inverse">{{ $user->first_name . ' ' . $user->last_name }}</a></h4>
								 <p>
								 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
								 	<i class="fa fa-fw fa-map-marker text-muted"></i>{{ $user->city . ', ' . $user->state }}</p> 
							</div>
						</div>
					</div>
					@if(Auth::check())
					<div class="col-sm-3">
						<div class="innerAll text-right">
							<div class="btn-group-vertical btn-group-sm">
								<a href="{{ action('UsersController@show', $user->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-thumbs-up"></i> Connect</a>
								<a href="" class="btn btn-default" data-toggle="sidr-open" data-menu="menu-right"><i class="fa fa-fw fa-envelope-o"></i> Chat</a>
							</div>
						</div>
					</div>
					@endif
			</div>
		</div>
	@endforeach
@else
	<h3>The search returned no results.</h3>
@endif

		
</div>

@if(!empty($_GET['search']))
	{{ $users->appends(['search' => $_GET['search']])->links() }}
@else 
	{{ $users->links() }}
@endif



			
		</div>

<!--Div for side of page Search bar??-->
<div class="col-md-4 col-lg-3">

	@if(Auth::check())
	<center><a href="{{ action('HomeController@logout') }}" class="btn btn-danger">Log Out</a></center>
	@else
	<center><a href="{{ action('HomeController@showLogin') }}" class="btn btn-primary">Log In</a></center>	
	@endif




			<div class="widget">
	<h5 class="innerAll margin-none bg-primary">Advanced</h5>
	<div class="widget-body padding-none">
		<ul class="list-group list-group-1 borders-none margin-none">
			<li class="list-group-item"><div class="input-group innerB">
			 	<input type="text" class="form-control " placeholder="Search by Skills">
				<div class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
				</div>
			</li>
			<li class="list-group-item"><div class="input-group innerB">
			 	<input type="text" class="form-control " placeholder="Search by Association">
				<div class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
				</div>
			</li>
			<li class="list-group-item"><div class="input-group innerB">
				<div class="col-md-18 col-lg-9">
				 	<input type="text" name ="city" class="form-control " placeholder="City" required>
				</div>
				<div class="col-md-6 col-lg-3">
				 	<input type="text" name="state" class="form-control " placeholder="St" required>
				</div>				
				<div class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
				</div>
			</li>
		</ul>
	</div>
</div>


	
		
				
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
				<!-- Footer -->
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase Social Admin Template</a> - Current version: v2.0.0-rc8 / <a target="_blank" href="../assets/../../CHANGELOG.txt?v=v2.0.0-rc8">changelog</a></div>
			<!--  End Copyright Line -->
	
		</div>
		<!-- // Footer END -->
		
				
	</div>
	<!-- // Main Container Fluid END -->

@stop
	


@section('bottomscript')
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
	
@stop