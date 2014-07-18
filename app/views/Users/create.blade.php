@extends('layouts.master')

@section('topscript')
	<title>Sign Up</title>	
@stop 
  
@section('content')
<body class=" loginWrapper">
	
	<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden ">

			<!-- <div class="layout-app">  -->
			<!-- row-app -->
<div class="row row-app">

	<!-- col -->
	

		<!-- col-separator.box -->
		<div class="col-separator col-unscrollable box">
			
			<!-- col-table -->
			<div class="col-table">
				
				<h4 class="innerAll margin-none border-bottom text-center bg-primary"><i class="fa fa-pencil"></i> Create a new Account</h4>

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
								  		{{Form::open(array('action' => 'UsersController@store', 'class' => 'form-signin', 'role' => 'form'))}}
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<div class="form-group">
									    		<label for="first_name">First Name</label>
									    		<input name="first_name" type="text" class="form-control" id="first_name" placeholder="Your first name" value="{{Input::old('first_name')}}">
									  		</div>
									  		<div class="form-group">
									    		<label for="last_name">Last Name</label>
									    		<input name="last_name" type="text" class="form-control" id="last_name" placeholder="Your last name" value="{{Input::old('last_name')}}">
									  		</div>
								  	  		<div class="form-group">
									    		<label for="email">Email address</label>
									    		<input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value="{{Input::old('email')}}">
									  		</div>
									  		<div class="form-group">
									    		<label for="password">Password</label>
									    		<input name="password" type="password" class="form-control" id="password" placeholder="Password" >
									  		</div>
								    		<div class="form-group">
									    		<label for="confirm_password">Confirm Password</label>
									    		<input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword2" placeholder="Retype Password">
									  		</div>
									  		<button type="submit" class="btn btn-primary btn-block">Create Account</button>
										{{ Form::close() }}
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
<!-- // END row-app -->

	

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