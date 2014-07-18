<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if !IE]><!--><html class="paceCounter paceSocial sidebar sidebar-social footer-sticky"><!-- <![endif]-->
<head>
	<title>Social Admin Template (v2.0.0-rc8)</title>
	
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
		'../assets/plugins/forms_editors_wysihtml5/js/wysihtml5-0.3.0_rc2.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/forms_editors_wysihtml5/js/bootstrap-wysihtml5-0.0.2.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/forms_wizards/jquery.bootstrap.wizard.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/other_mixitup/jquery.mixitup.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_less-js/less.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/charts_flot/excanvas.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_browser/ie/ie.prototype.polyfill.js?v=v2.0.0-rc8&sv=v0.0.1.2'
	],

	/* The initialization scripts always load last and are automatically and dynamically loaded when AJAX navigation is enabled; */
	bundle: [
		'../assets/components/core_ajaxify/ajaxify.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/components/core_preload/preload.pace.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/components/forms_editors_wysihtml5/wysihtml5.init.js?v=v2.0.0-rc8', 
		'../assets/components/forms_wizards/form-wizards.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
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

<div id="content" style="margin-left:0px">
			
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
			<h3>Build a Profile</h3>
<div class="innerLR">
	<!-- Form Wizard / Widget Tabs / Vertical -->
	<div class="wizard">
		<div class="widget widget-tabs widget-tabs-double widget-tabs-vertical row row-merge">
		</div> 
	</div>
</div>
	<!-- Form Wizard / Arrow navigation & Progress bar -->
<div id="rootwizard" class="wizard">

	<!-- Wizard heading -->
	<div class="wizard-head">
		<ul>
			<li><a href="#tab1" data-toggle="tab">Experience</a></li>
			<li><a href="#tab2" data-toggle="tab">Skills</a></li>
			<li><a href="#tab3" data-toggle="tab">Education</a></li>
			<li><a href="#tab4" data-toggle="tab">Languages</a></li>
			<li><a href="#tab5" data-toggle="tab">Photo</a></li>
			<li><a href="#tab6" data-toggle="tab">See your profile!</a></li>
		</ul>
	</div>
	<!-- // Wizard heading END -->
	
	<div class="widget">
	
		<!-- Wizard Progress bar -->
		<div class="widget-head progress progress-primary" id="bar">
			<div class="progress-bar">Step <strong class="step-current">1</strong> of <strong class="steps-total">3</strong> - <strong class="steps-percent">100%</strong></div>
		</div>
		<!-- // Wizard Progress bar END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Step 1 -->
				<div class="tab-pane active" id="tab1">
					<div class="row">
						<div class="col-md-3">
							<p class="muted">Welcome Justin</p>
							<p class="muted"><strong>When did you start your current position?</strong></p>
						</div>
						<div class="col-md-9">
							<p class="muted"><label for="inputTitle">I started working as CEO at Vela App</label></p>

							<input type="date" id="inputTitle" class="col-md-6 form-control" value=""/>
							<div class="separator"></div>
						</div>
					</div>
				</div>
				<!-- // Step 1 END -->
				
				<!-- Step 2 -->
				<div class="tab-pane" id="tab2">
					<div class="row">
						<div class="col-md-6">
							<strong>Add a few skills you have:</strong>
							<p>
							<input type="text" id="inputTitle" class="col-md-6 form-control" value="" placeholder="What are your areas of expertise?" />
							<button type="submit" class="btn btn-default">Add</button>
							</p>
						</div>
						<div class="col-md-9">
							<textarea class="form-control" rows="5"></textarea>
						</div>
					</div>
				</div>
				<!-- // Step 2 END -->
				
				<!-- Step 3 -->
				<div class="tab-pane" id="tab3">
					<h4>Where did you go to school (college, university, high school, etc.)?</h4>
					<div class="col-md-9">
						<textarea class="form-control" rows="1"></textarea placehoder="School Name">
					</div>
				</div>
				<!-- // Step 3 END -->
				
				<!-- Step 4 -->
				<div class="tab-pane" id="tab4">
					<h4>Do you know any other languages?</h4>
					<h6><a href="#">+ Add another language</a></h6>
					<button type="submit" class="btn btn-default">Yes</button>
					<button type="submit" class="btn btn-default">No</button>
					
				</div>
				<!-- // Step 4 END -->
				
				<!-- Step 5 -->
				<div class="tab-pane" id="tab5">
					<h4>Upload and image of yourself</h4>
					<button type="submit" class="btn btn-default">Upload</button>
					<button type="submit" class="btn btn-default">Skip</button>
					
				</div>
				<!-- // Step 5 END -->
				
				<!-- Step 6 -->
				<div class="tab-pane" id="tab6">
					<h4>Sixth tab</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
				</div>
				<!-- // Step 6 END -->
				
				<!-- Step 7 -->
				<div class="tab-pane" id="tab7">
					<h4>Seventh tab</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
				</div>
				<!-- // Step 7 END -->
				
			</div>
			
			<!-- Wizard pagination controls -->
			<ul class="pagination margin-bottom-none">
				<li class="last primary"><a href="#" class="no-ajaxify">Save</a></li>
			  	<li class="next primary"><a href="#" class="no-ajaxify">Skip</a></li>
			  	<li><a href="#">No more jobs</a></li>
				<li class="next finish primary" style="display:none;"><a href="#" class="no-ajaxify">Finish</a></li>
			</ul>
			<!-- // Wizard pagination controls END -->
			
		</div>
	</div>
</div>
<!-- // Form Wizard / Arrow navigation & Progress bar END -->


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