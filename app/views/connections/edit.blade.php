@extends('layouts.master')

@section('topscript')
	<title>{{ $user->first_name }}'s  Connections</title>
	<style>
.img-circle {
    width:40px;
    height: 40px;
}
.navbar{
    background: #3498db;

}
.search {
    margin-top:15px;
    margin-right: 50%;
}
.navsearch {
    margin-right: 50%;
}
</style>
@stop


@section('content')
<body class=" scripts-async menu-right-hidden">
	@if(Auth::check())
    <div class="navbar hidden-print box main" role="navigation">
        <ul class="notifications pull-left hidden-xs">
            <li class="dropdown notif">
                <a href="" class="dropdown-toggle"  data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
                <ul class="dropdown-menu chat media-list" role="menu">
                    <li class="media"><a class="pull-left" href="#"><img class="media-object thumb" src="{{ Auth::user()->img_path }}" alt="50x50" width="30"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-left">5 min</span>
                            <h5 class="media-heading">Adrian D.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/16.jpg" alt="50x50" width="50"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-left">2 days</span>
                            <h5 class="media-heading">Jane B.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>                   
                    <li class="media">
                        <a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/17.jpg" alt="50x50" width="50"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-left">3 days</span>
                            <h5 class="media-heading">Andrew M.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs border-right">
            <div class="dropdown username pull-left">
                <span class="dropdown-toggle" data-toggle="dropdown">
                    <span class="media margin-none">
                    <span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
                    <span class="media-body">{{ Auth::user()->first_name }} <span class="caret"></span></span>
                </span>
                </span>
                <ul class="dropdown-menu">
                    <li><a href="">Messages</a></li>
                    <li><a href="{{ action('UsersController@show', Auth::user()->id)}} ">Profile</a></li>
                    <li><a href="{{ action('UsersController@edit', Auth::user()->id)}} ">Edit Profile</a></li>
                    <li><a href="{{ action('HomeController@logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
            <div class="container">
                {{ Form::open(['action' => ['UsersController@index'],'method' => 'GET']) }}
                <div class="col-md-6" style="margin-left:400px">
                    <div class="input-append search">
                        <input id="appendedInputButton" style="border-radius:5px" class="form-inline" type="text" placeholder="Search...">
                        <!-- search function will be going to index blade -->
                        <a class="glyphicon glyphicon-search btn btn-primary btn-xs" pull-right>Search</a>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>        
    </div>
    @endif

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