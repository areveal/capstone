@extends('layouts.master')

@section('topscript')
	<title>Sign Up</title>	
@stop 

@section('bodytag')
	<body class=" loginWrapper">
@stop
  
@section('content')

	
	<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden ">

						
		
		

<div id="menu-right">
	<div>
		<button class="btn btn-inverse btn-xs btn-close" data-toggle="sidr-close" data-menu="menu-right"><i class="fa fa-times"></i></button>

		<div class="tab-content">
			<div class="tab-pane" id="chat-conversation">
				<ul>
					<li>
						<div class="innerAll"><button class="btn btn-primary" data-toggle="tab" data-target="#chat-list"><i class="fa fa-fw fa-user"></i> friends</button></div>
					</li>
					<li class="conversation innerAll">
						<!-- Media item -->
						<div class="media">
							<small class="author"><a href="#" title="" class="strong">Jane Doe</a></small>
							<div class="media-object pull-left"><img src="../assets/images/people/50/1.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote>
									<small class="date"><cite>just now</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, sit?</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
						<!-- Media item -->
						<div class="media primary right">
							<small class="author"><a href="#" title="" class="strong">John Doe</a></small>
							<div class="media-object pull-right"><img src="../assets/images/people/50/2.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote class="pull-right">
									<small class="date"><cite>15 seconds ago</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, molestiae!</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
						<!-- Media item -->
						<div class="media">
							<small class="author"><a href="#" title="" class="strong">Ricky</a></small>
							<div class="media-object pull-left"><img src="../assets/images/people/50/1.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote>
									<small class="date"><cite>5 minutes ago</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, distinctio!</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
					</li>
				</ul>
			</div>
			
			<div class="tab-pane active" id="chat-list">
				<div class="mixitup" id="mixitup-chat" data-show-default="mixit-chat-1" data-layout-mode="list" data-target-selector=".mix" data-filter-selector=".filter-chat">
					<ul>
						<li class="category">Groups</li>
						<li class="reset">
							<div class="innerLR">
								<ul>
									<li class="filter-chat" data-filter="mixit-chat-1"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-success"></span> Work Related</a></li>
									<li class="filter-chat" data-filter="mixit-chat-2"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-primary"></span> Very Important</a></li>
									<li class="filter-chat" data-filter="mixit-chat-3"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-info"></span> Friends &amp; Family</a></li>
								</ul>
							</div>
						</li>
						<li class="category border-bottom">Online</li>
						<li>
							
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/1.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Perpetua Inger</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/2.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Zoticus Axel</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/3.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Yun Ragna</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/4.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Victor Tacitus</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/5.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Arden Catharine</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/6.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Mihovil Govinda</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/7.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Mariya Hadya</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/8.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Tahir Benedikt</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/9.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Olayinka Kristin</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/10.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Danko Nikodim</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/11.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Zoja Aileas</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/12.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Alphonsus Braidy</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/13.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Helene Liana</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/14.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Sebastian Niklas</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/15.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Elvire Maya</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class=" mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/16.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Kerman Otakar</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
							
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>







		
		<!-- Content START -->
		<div id="content">
			
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
			<!-- row-app -->
<div class="row row-app">

	<!-- col -->
	

		<!-- col-separator.box -->
		<div class="col-separator col-unscrollable box">
			
			<!-- col-table -->
			<div class="col-table">
				
				<h4 class="innerAll margin-none border-bottom text-center bg-primary"><i class="fa fa-pencil"></i> Build a Profile</h4>

				<!-- col-table-row -->
				<div class="col-table-row">

					<!-- col-app -->
					<div class="col-app col-unscrollable">

						<!-- col-app -->
						<div class="col-app">

							<div class="login">
								
								<div class="placeholder text-center"><i class="fa fa-pencil"></i></div>
								
								<div class="panel panel-default col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

								  	<div class="panel-body">
								  		{{Form::open(array('action' => 'AssociationsController@store', 'class' => 'form-signin', 'role' => 'form'))}}
								  		<!--<form role="form" action="index.html?lang=en"> -->
								  		
									  		<div class="form-group">
									    		<label for="employed">Which diversity groups do you associate with?</label>
									    		<div class="row">
												  <div class="col-lg-6">
												    <div class="input-group">
												      <p>
												      <span class="">
												        <input name="association_id" id="association_id" input type="checkbox">
												      </span>
												      Women</p><br>
												      <p>
												      	<span class="">
												        <input name="association_id" id="association_id" input type="checkbox">
												      </span>
												      African American</p><br>
												      <p>
												      	<span class="">
												        <input name="association_id" id="association_id" input type="checkbox">
												      </span>
												      Latino American</p><br>
												      <p><span class="">
												        <input name="association_id" id="association_id" input type="checkbox">
												      </span>
												      Veteran</p><br>
												      <p><span class="">
												        <input name="association_id" id="association_id" input type="checkbox">
												      </span>
												      Disabled</p><br>
												    </div><!-- /input-group -->
												    <button type="submit" class="btn btn-primary btn-block">Add associations</button>
												  </div><!-- /.col-lg-6 -->
												</div><!-- /.row -->
									  		</div>				  		
										{{Form::close()}}
							  		</div>
								
								</div>
								<div class="clearfix"></div>					

							</div>
							
						</div>
						<!-- // END col-app -->

					</div>
					<!-- // END col-app.col-unscrollable -->

				</div>
				<!-- // END col-table-row -->
			
			</div>
			<!-- // END col-table -->
			
		</div>
		<!-- // END col-separator.box -->


</div>

	

	<!-- Global -->
	<script data-id="App.Config">
	var App = {};	var basePath = '',
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

		</script>
	
	<script src="/assets/library/bootstrap/js/bootstrap.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
<script src="/assets/plugins/core_nicescroll/jquery.nicescroll.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
<script src="/assets/plugins/core_breakpoints/breakpoints.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
<script src="/assets/plugins/core_preload/pace.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
<script src="/assets/components/core_preload/preload.pace.init.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
<script src="/assets/plugins/menu_sidr/jquery.sidr.js?v=v2.0.0-rc8"></script>
<script src="/assets/components/menus/menus.sidebar.chat.init.js?v=v2.0.0-rc8"></script>
<script src="/assets/plugins/other_mixitup/jquery.mixitup.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
<script src="/assets/plugins/other_mixitup/mixitup.init.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>
<script src="/assets/components/core/core.init.js?v=v2.0.0-rc8"></script>	
@stop



@section('bottomscript')
@stop