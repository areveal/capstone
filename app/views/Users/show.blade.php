@extends('layouts.master')

@section('topscript')
	<title>User Profile</title>

	<script src="/assets/plugins/core_ajaxify_loadscript/script.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>

	<script>var App = {};</script>

	<script data-id="App.Scripts">
	App.Scripts = {

		/* CORE scripts always load first; */
		core: [
			'/assets/library/jquery/jquery.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/library/modernizr/modernizr.js?v=v2.0.0-rc8&sv=v0.0.1.2'
		],

		/* PLUGINS_DEPENDENCY always load after CORE but before PLUGINS; */
		plugins_dependency: [
			'/assets/library/bootstrap/js/bootstrap.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/library/jquery/jquery-migrate.min.js?v=v2.0.0-rc8&sv=v0.0.1.2'
		],

		/* PLUGINS always load after CORE and PLUGINS_DEPENDENCY, but before the BUNDLE / initialization scripts; */
		plugins: [
			'/assets/plugins/core_nicescroll/jquery.nicescroll.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/plugins/core_breakpoints/breakpoints.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/plugins/core_ajaxify_davis/davis.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/plugins/core_ajaxify_lazyjaxdavis/jquery.lazyjaxdavis.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/plugins/core_preload/pace.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/plugins/menu_sidr/jquery.sidr.js?v=v2.0.0-rc8', 
			'/assets/plugins/other_mixitup/jquery.mixitup.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/plugins/core_less-js/less.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/plugins/charts_flot/excanvas.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/plugins/core_browser/ie/ie.prototype.polyfill.js?v=v2.0.0-rc8&sv=v0.0.1.2'
		],

		/* The initialization scripts always load last and are automatically and dynamically loaded when AJAX navigation is enabled; */
		bundle: [
			'/assets/components/core_ajaxify/ajaxify.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/components/core_preload/preload.pace.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/components/menus/sidebar.main.init.js?v=v2.0.0-rc8', 
			'/assets/components/menus/sidebar.collapse.init.js?v=v2.0.0-rc8', 
			'/assets/components/menus/menus.sidebar.chat.init.js?v=v2.0.0-rc8', 
			'/assets/plugins/other_mixitup/mixitup.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
			'/assets/components/core/core.init.js?v=v2.0.0-rc8'
		]

	};
	</script>

	<script>
		$script(App.Scripts.core, 'core');

		$script.ready(['core'], function(){
			$script(App.Scripts.plugins_dependency, 'plugins_dependency');
		});
		$script.ready(['core', 'plugins_dependency'], function(){
			$script(App.Scripts.plugins, 'plugins');
		});
		$script.ready(['core', 'plugins_dependency', 'plugins'], function(){
			$script(App.Scripts.bundle, 'bundle');
		});
	</script>
	<script>if (/*@cc_on!@*/false && document.documentMode === 10) { document.documentElement.className+=' ie ie10'; }</script>

	<style>
		.img-circle {
			width:40px;
			height: 40px;
		}
	</style>
@stop

@section('bodytag')
<body class=" scripts-async menu-right-hidden">
@stop

@section('content')		
<!-- Content START -->
<div id="content">
			
<div class="navbar hidden-print navbar-default box main" role="navigation">

	<ul class="notifications pull-left hidden-xs">
		<li class="dropdown notif">
			<a href="" class="dropdown-toggle"  data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
			<ul class="dropdown-menu chat media-list">
				<li class="media">
			        <a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/15.jpg" alt="50x50" width="50"/></a>
					<div class="media-body">
			        	<span class="label label-default pull-right">5 min</span>
			            <h5 class="media-heading">Adrian D.</h5>
			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			        </div>
				</li>
		      	<li class="media">
		          	<a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/16.jpg" alt="50x50" width="50"/></a>
					<div class="media-body">
			          	<span class="label label-default pull-right">2 days</span>
			            <h5 class="media-heading">Jane B.</h5>
			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			        </div>
		        </li>
			    <li class="media">
		          	<a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/17.jpg" alt="50x50" width="50"/></a>
			      	<div class="media-body">
						<span class="label label-default pull-right">3 days</span>
			            <h5 class="media-heading">Andrew M.</h5>
			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			        </div>
		        </li>
	      	</ul>
		</li>
	</ul>

	<div class="user-action pull-left menu-right-hidden-xs menu-left-hidden-xs border-left">
		<div class="dropdown username pull-left">
			<span class="dropdown-toggle" data-toggle="dropdown">
				<span class="media margin-none">
					<span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
					<span class="media-body">{{ Auth::user()->first_name }} <span class="caret"></span></span>
				</span>
			</span>
			<ul class="dropdown-menu">
				<li><a href="">Messages</a></li>
				<li><a href="">Edit Profile</a></li>
				<li><a href="{{ action('HomeController@logout') }}">Logout</a></li>
		    </ul>
		</div>
	</div>
	<div class="input-group hidden-xs pull-left">
	  	<span class="input-group-addon"><i class="icon-search"></i></span>
	  	<input type="text" class="form-control" placeholder="Search Inclusion Users"/>
	</div>
</div>
	


			<!-- <div class="layout-app">  -->
			<div class="innerLR">

	<h2 class="margin-none">Users &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>
	<div class="separator-h"></div>

	<div class="row">
		<div class="col-md-4">
			<!-- Widget -->
			<div class="widget widget-body-white">
				<div class="media widget-body innerAll">
					<a href="" class="pull-left"><img src="/assets/images/people/100/16.jpg" width="60" alt=""></a>
					<div class="media-body innerL half">
						<h4 class="margin-none"><a href="" class="text-primary">Adrian Demian</a></h4>
						<p class="strong">Senior UI Designer</p>
						<div class="bg-gray innerAll ">
							<h5 class="innerB half border-bottom text-muted margin-none"><i class="fa fa-fw icon-briefcase-2"></i> MOSAICPRO LLC</h5>
							<p class="margin-none "><a href="">4 members</a> <i class="fa fa-fw fa-code-fork fa-rotate-90"></i> <a href="">13 products</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- //Widget -->
			<!-- Widget -->
			<div class="widget widget-body-white ">
				<div class="widget-head">
					<h4 class=" heading glyphicons list"><i></i>Skills</h4>
				</div>
				<div class="widget-body">
					<div class="innerAll">
						<div class="progress bg-white progress-mini progress-primary count-outside add-outside"><div class="count">100%</div><div class="progress-bar progress-bar-primary" style="width: 100%;"></div><div class="add">HTML</div></div>
						<div class="progress bg-white progress-mini progress-primary count-outside add-outside"><div class="count">90%</div><div class="progress-bar progress-bar-primary" style="width: 90%;"></div><div class="add">CSS</div></div>
						<div class="progress bg-white progress-mini progress-primary count-outside add-outside"><div class="count">93%</div><div class="progress-bar progress-bar-primary" style="width: 93%;"></div><div class="add">jQuery</div></div>
						<div class="progress bg-white progress-mini progress-primary count-outside add-outside"><div class="count">79%</div><div class="progress-bar progress-bar-primary" style="width: 79%;"></div><div class="add">PHP</div></div>
					</div>
				</div>
			</div>
			<!-- //Widget -->
			<!-- Widget -->
			<div class="widget widget-body-white">
				<div class="widget-head">
					<h4 class=" heading glyphicons check"><i></i>Experience</h4>
				</div>
				<div class="widget-body inner-2x">
					<ul class="fa-ul">
						<li class="text-info"><span class="pull-right text-faded text-small">just now</span><i class="fa fa-li fa-check"></i> QUICK Admin  - App &amp; Website</li>
						<li><span class="pull-right text-faded text-small">14 days ago</span><i class="fa fa-li fa-check"></i> FLAT PLUS</li>
						<li><span class="pull-right text-faded text-small">2 months ago</span><i class="fa fa-li fa-check"></i> FLAT KIT</li>
						<li><span class="pull-right text-faded text-small">3 months ago</span><i class="fa fa-li fa-check"></i> CORAL<li>
					</ul>
				</div>
			</div>
			<!-- //Widget -->
		</div>
		<!-- //End Col -->
		
		<div class="col-md-4">
			<!-- Widget -->
			<div class="widget widget-body-white padding-none">
				<div class="widget-head">
					<h4 class="heading "><i class="fa fa-fw fa-user"></i> Account Overview</h4>
				</div>
				<div class="widget-body padding-none">
					<div class="bg-gray innerAll">	
						<i class="fa fa-5x icon-documents-line text-primary pull-right"></i>
						<div class="strong">
							<p>Status: Active</p>
							<p>Due: &euro;29.50 (1 month)</p>
							<p>Referrals: 10</p>
						</div>
					</div>
					<div class="innerAll half text-center">
						<a href="" class="text-underline">Go to account</a>
					</div>
				</div>
			</div>
			<!-- //Widget -->
			<!-- Widget -->
			<div class="widget widget-body-white overflow-hidden">
				<div class="widget-head height-auto ">
					<div class="innerAll">
						<div class="btn-group pull-right">
							<button class="btn btn-default"><i class="fa fa-caret-left"></i></button>
							<button class="btn btn-default"><i class="fa fa-caret-right"></i></button>
						</div>
						<i class="fa fa-calendar fa-3x text-primary pull-left"></i>
						<h4 class="text-uppercase text-primary margin-none">Wednesday</h4>
						<p class="text-medium margin-none text-condensed">25.12.2013</p>
					</div>
				</div>
				<div class="widget-body">
					<div class="">
							<ul class="list-unstyled strong innerAll">
								<li class="border-bottom innerTB half"><i class="fa fa-fw fa-times"></i> Lunch with Dana</li>
								<li class="border-bottom innerTB half"><i class="fa fa-fw fa-times"></i> Email Adrian</li>
								<li class="border-bottom innerTB half"><i class="fa fa-fw fa-times"></i> Call Daniel <span class="badge bg-danger pull-right">!</span></li>
								<li class="border-bottom innerTB half"><i class="fa fa-fw fa-times"></i> Some other important stuff</li>
							</ul>
					</div>
					<a href="" class="btn btn-sm btn-default"><i class="fa fa-plus fa-fw"></i> Add note</a>
					<a href="" class="btn btn-sm text-muted"><i class="fa fa-envelope fa-fw"></i></a>
				</div>
			</div>
			<!-- //Widget -->
		</div>
		<!-- //End Col -->
		
		<div class="col-md-4">
			<!-- Widget -->
			<div class="widget">
				<div class="innerAll border-bottom">
					<div class="media innerAll half">
						<a href="" class="pull-left"><img src="/assets/images/people/50/3.jpg" alt=""></a>
						<div class="media-body ">
							<h5 class="margin-none strong">Lisa Alda</h5>
							<p class="text-small"><a href="" class="text-underline">Complete my profile now</a></p>
							<p class="text-small margin-none innerB half">50% complete</p>
							<div class="progress bg-gray progress-mini margin-none"><div class="progress-bar progress-bar-primary" style="width: 50%;"></div></div>
						</div>
					</div>
				</div>
				<div class="innerAll bg-gray">
					<div class="media innerAll half">
						<a href="" class="pull-left innerAll bg-lightred"><i class="fa  fa-2x text-white icon-briefcase-1"></i></a>
						<div class="media-body">
							<h5 class="margin-none strong">MosaicPro LLC</h5>
							<p class="text-small"><a href="" class="text-underline">Complete my company's profile now</a></p>
							<p class="text-small margin-none innerB half">40% complete</p>
							<div class="progress white progress-mini margin-none"><div class="progress-bar progress-bar-success" style="width: 40%;"></div></div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Widget -->
			<!-- Widget	 -->
			<div class="widget widget-body-white padding-none ">
				<div class="widget-head height-auto">
					<div class="media innerAll">
						<a href="" class="pull-right"><i class="fa icon-comment-fill-2"></i></a>
						<a href="" class="pull-left"><img src="/assets/images/people/50/8.jpg" alt="" class="img-circle"></a>
						<div class="media-body">
							<h4>Emanuel L.</h4>
							<p class="margin-none">Project Manager</p>
						</div>
					</div>
				</div>
				<ul class="list-unstyled">
					<li class="innerAll border-bottom">
						<span class="badge badge-default pull-right">4</span>
						<i class="fa fa-fw icon-user-1"></i> Team Members
					</li>
					<li class="innerAll border-bottom">
						<span class="badge badge-default pull-right">4</span>
						<i class="fa fa-fw fa-dashboard"></i> Active Projects
					</li>
					<li class="innerAll border-bottom">
						<span class="badge badge-default bg-primary pull-right">59</span>
						<i class="fa fa-fw icon-browser-check"></i> Completed Tasks
					</li>
					<li class="innerAll border-bottom">
						<span class="badge badge-default pull-right">3</span>
						<i class="fa fa-fw fa-file-text-o"></i> Files under review
					</li>
					<li class="innerAll bg-white text-center">
						<a href="" class="btn btn-primary btn-sm">View Profile</a>
					</li>
				</ul>
			</div>
			<!-- //Widget -->

		</div>
		<!-- //End Col -->
	</div>   
	<!-- End Row -->
</div>				
				



	
		
				
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
				<!-- Footer -->
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase Social Admin Template</a> - Current version: v2.0.0-rc8 / <a target="_blank" href="/assets///CHANGELOG.txt?v=v2.0.0-rc8">changelog</a></div>
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
		commonPath = '/assets/',
		rootPath = '/',
		DEV = false,
		componentsPath = '/assets/components/';
	
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