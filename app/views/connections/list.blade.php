<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if !IE]><!--><html class="paceCounter paceSocial sidebar sidebar-social footer-sticky"><!-- <![endif]-->
<head>
	<title>Diversity Connect</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="../assets/less/admin/module.admin.stylesheet-complete.less" />
	-->

		<!--[if lt IE 9]><link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
	
		<link rel="stylesheet" href="../assets/css/admin/module.admin.stylesheet-complete.min.css" />
	
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<script src="../assets/plugins/core_ajaxify_loadscript/script.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>

<script>var App = {};</script>

<script data-id="App.Scripts">
App.Scripts = {

	/* CORE scripts always load first; */
	core: [
		'../assets/library/jquery/jquery.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/library/modernizr/modernizr.js?v=v2.0.0-rc8&sv=v0.0.1.2'
	],

	/* PLUGINS_DEPENDENCY always load after CORE but before PLUGINS; */
	plugins_dependency: [
		'../assets/library/bootstrap/js/bootstrap.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/library/jquery/jquery-migrate.min.js?v=v2.0.0-rc8&sv=v0.0.1.2'
	],

	/* PLUGINS always load after CORE and PLUGINS_DEPENDENCY, but before the BUNDLE / initialization scripts; */
	plugins: [
		'../assets/plugins/core_nicescroll/jquery.nicescroll.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_breakpoints/breakpoints.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_ajaxify_davis/davis.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_ajaxify_lazyjaxdavis/jquery.lazyjaxdavis.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_preload/pace.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/menu_sidr/jquery.sidr.js?v=v2.0.0-rc8', 
		'../assets/plugins/media_holder/holder.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/other_mixitup/jquery.mixitup.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_less-js/less.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/charts_flot/excanvas.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_browser/ie/ie.prototype.polyfill.js?v=v2.0.0-rc8&sv=v0.0.1.2'
	],

	/* The initialization scripts always load last and are automatically and dynamically loaded when AJAX navigation is enabled; */
	bundle: [
		'../assets/components/core_ajaxify/ajaxify.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/components/core_preload/preload.pace.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/components/widget_twitter/twitter.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/components/menus/sidebar.main.init.js?v=v2.0.0-rc8', 
		'../assets/components/menus/sidebar.collapse.init.js?v=v2.0.0-rc8', 
		'../assets/components/menus/menus.sidebar.chat.init.js?v=v2.0.0-rc8', 
		'../assets/plugins/other_mixitup/mixitup.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/components/core/core.init.js?v=v2.0.0-rc8'
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
	
</head>
<body class=" scripts-async menu-right-hidden">
	
		
		<!-- Content START -->
		<div id="content" style="margin-left: 0px">
			
<div class="navbar hidden-print navbar-default box main" role="navigation">

	<div class="user-action user-action-btn-navbar pull-right border-left">
		<a href="#menu-right" class="btn btn-sm btn-navbar btn-open-right"><i class="fa fa-comments fa-2x"></i></a>
	</div>
	<div class="user-action user-action-btn-navbar pull-left">
		<a href="#menu" class="btn btn-sm btn-navbar btn-open-left"><i class="fa fa-bars fa-2x"></i></a>
	</div>

	<ul class="notifications pull-left hidden-xs">
		<li class="dropdown notif">
			<a href="" class="dropdown-toggle"  data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
			<ul class="dropdown-menu chat media-list">
				<li class="media">
			        <a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/15.jpg" alt="50x50" width="50"/></a>
					<div class="media-body">
			        	<span class="label label-default pull-right">5 min</span>
			            <h5 class="media-heading">Adrian D.</h5>
			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			        </div>
				</li>
		      	<li class="media">
		          	<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/16.jpg" alt="50x50" width="50"/></a>
					<div class="media-body">
			          	<span class="label label-default pull-right">2 days</span>
			            <h5 class="media-heading">Jane B.</h5>
			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			        </div>
		        </li>
			    <li class="media">
		          	<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/17.jpg" alt="50x50" width="50"/></a>
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
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<span class="media margin-none">
					<span class="pull-left"><img src="../assets/images/people/35/16.jpg" alt="user" class="img-circle"></span>
					<span class="media-body">Bill <span class="caret"></span></span>
				</span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="about_1.html?lang=en" >About</a></li>
				<li><a href="messages.html?lang=en">Messages</a></li>
				<li><a href="timeline_3.html?lang=en">Profile</a></li>
				<li><a href="login.html?lang=en">Logout</a></li>
		    </ul>
		</div>
	</div>
	<div class="input-group hidden-xs pull-left">
	  	<span class="input-group-addon"><i class="icon-search"></i></span>
	  	<input type="text" class="form-control" placeholder="Search a friend"/>
	</div>
</div>
	


			<!-- <div class="layout-app">  -->
			<div class="innerAll">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			
			<div class="timeline-cover">
	<div class="widget border-bottom">

		<div class="widget-body border-bottom">
			<div class="media">
				<div class="pull-left innerAll">
					<img src="../assets/images/people/100/22.jpg" alt="" class="img-circle">
				</div>
				<div class="media-body">
					<h4><a href="">Adrian Demian</a> <a href="" class="text-muted"><i class="fa fa-envelope"></i></a></h4>
					<div class="clearfix"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, laudantium, itaque modi beatae vitae delectus sit officia nesciunt non esse.</p>
					
				</div>
			</div>
		</div>

		<div class="">
			<ul class="navigation">
				<li><a class="" href="timeline_3.html?lang=en"><i class="fa fa-fw fa-user"></i><span> Profile</span></a></li>
				<li class="active"><a href="contacts_3.html?lang=en"><i class="fa fa-fw icon-group"></i><span> Connections</span></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>

<!-- 		<nav class="navbar widget-head padding-none margin-none" role="navigation">
	      
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
	            <span>Choose menu </span>
	            <i class="fa fa-bars "></i>
	           
	          </button>
	        </div>
	        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-3" style="height: 1px;">
				<div class="padding-none">
					<ul class="display-block">
						<li><a class="" href="timeline_3.html?lang=en"><i class="fa fa-fw icon-road-sign"></i> <span>Timeline</span></a></li>
						<li><a href="media_3.html?lang=en"><i class="fa fa-fw icon-flip-camera"></i> <span>Photos</span></a></li>
						<li class="active"><a href="contacts_3.html?lang=en"><i class="fa fa-fw icon-group"></i> <span>Friends</span></a></li>
						<li><a href="messages.html?lang=en"><i class="fa fa-fw fa-envelope"></i> <span>Messages</span></a></li>
						<li class="pull-right"><a href="about_3.html?lang=en"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
					</ul>
				</div>
	        </div>
	      
	    </nav>
 -->

		
	
		

	</div>
	

</div>



			<div class="input-group innerB">
 	<input type="text" class="form-control " placeholder="Search contacts">
	<div class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
</div>

<div class="row row-merge">
		
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/1.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Perpetua Inger</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Florida, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/2.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Zoticus Axel</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Texas, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/3.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Yun Ragna</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Arizona, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/4.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Victor Tacitus</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Texas, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/5.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Arden Catharine</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Illinois, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/6.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Mihovil Govinda</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Texas, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/7.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Mariya Hadya</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Missouri, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/8.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Tahir Benedikt</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Tennessee, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/9.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Olayinka Kristin</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Arizona, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/10.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Danko Nikodim</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Virginia, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/11.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Zoja Aileas</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Tennessee, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/12.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Alphonsus Braidy</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Florida, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/13.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Helene Liana</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Florida, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/14.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Sebastian Niklas</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Illinois, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/15.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Elvire Maya</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Illinois, USA</p> 
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
		<div class="col-md-12 col-lg-6 bg-white border-bottom">
		<div class="row">

			<div class="col-sm-9">
				<div class="media">
					<a class="pull-left margin-none" href="#">
						<img class="img-clean" src="../assets//images/people/100/16.jpg" alt="...">
					</a>
					<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
						 <h4 class="media-heading"><a href="" class="text-inverse">Kerman Otakar</a></h4>
						 <p>
						 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
						 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in Tennessee, USA</p> 
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