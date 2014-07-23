@extends('layouts.master')

@section('topscript')
	<title>Edit Education</title>

	<style>
	.img-circle {
	    width:40px;
	    height: 40px;
	}
	.navbar{
	    background: #3498db;
	}
	</style>

@stop 

@section('bodytag')
	<body class=" loginWrapper">
@stop
  
@section('content')

	
	<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden ">

						
		
		

	<div class="navbar hidden-print box main" role="navigation">
        <div class="user-action pull-left menu-right-hidden-xs menu-left-hidden-xs border-left">
            <div class="dropdown username pull-left">
                <span class="dropdown-toggle" data-toggle="dropdown">
                    <span class="media margin-none">
                    <span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
                    <span class="media-body">{{ Auth::user()->first_name }} <span class="caret"></span></span>
                </span>
                </span>
                <ul class="dropdown-menu">
                    <li><a href="{{ action('UsersController@edit', Auth::user()->id)}} ">Edit Profile</a></li>
                    <li><a href="{{ action('SkillsController@edit', Auth::user()->id)}} ">Edit Skills</a></li>
                    <li><a href="{{ action('AssociationsController@edit', Auth::user()->id)}} ">Edit Associations</a></li>
                    <li><a href="{{ action('JobsController@edit', Auth::user()->id)}} ">Edit Experience</a></li>
                    <li><a href="{{ action('SchoolsController@edit', Auth::user()->id)}} ">Edit Education</a></li>
                    <li><a href="{{ action('UsersController@show', Auth::user()->id)}} ">Done Editing</a></li>
                </ul>
            </div>
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
				
				<h2 class="text-center" style="margin-top: 40px"><i class="fa fa-pencil"></i>Add Your Education</h2>

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
								  		{{Form::open(array('action' => array('SchoolsController@update', Auth::user()->id),'class' => 'form-signin', 'role' => 'form','method' => 'PUT'))}}
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<div class="form-group">
									    		<p class="muted"><strong>Where did you go to school (college, university, high school, etc.)?</strong></p>
									    		{{ $errors->first('college', '<span style="color:red" class="help-block">:message</span>') }}
									    		<input name="college" type="text" class="form-control" id="college" placeholder="School Name">
									  		</div>
									  		
									  		<div class="form-group">
									  			<p class="muted"><strong>When did you start?</strong></p>
									  			<div class="col-md-9">
									  				{{ $errors->first('date_began', '<span style="color:red" class="help-block">:message</span>') }}
													<input name="date_began" input type="date" id="date_began" class="col-md-6 form-control" value=""/>
												</div>
											</div><br><br><br>
											
									  		<div class="form-group">
									  			<p class="muted"><strong>When did you graduate?</strong></p>
									  			<div class="col-md-9">
									  				{{ $errors->first('date_complete', '<span style="color:red" class="help-block">:message</span>') }}
													<input name="date_complete"input type="date" id="date_complete" class="col-md-6 form-control" value=""/>
												</div>
											</div><br><br><br>
								
											<div class="form-group">
									  			<p class="muted"><strong>What type of degree?</strong></p>
									  			<div class="col-md-9">
									  				{{ $errors->first('major', '<span style="color:red" class="help-block">:message</span>') }}
													<input name="major" type="text" class="form-control" id="major" placeholder="Ex: B.S. Psychology">
												</div>
											</div><br><br><br>

											<div class="form-group">
									  			<p class="muted"><strong>What was your GPA?</strong></p>
									  			<div class="col-md-9">
									  				{{ $errors->first('gpa', '<span style="color:red" class="help-block">:message</span>') }}
													<input name="gpa" type="float" class="form-control" id="gpa" placeholder="GPA">
												</div>
											</div><br><br><br>

											<div class="form-group">
									  		<button type="submit" class="btn btn-primary btn-block">Add School</button>
									  		</div>
										{{Form::close()}}
										<p>
									  	{{ Form::open(array('action' => array('UsersController@show', Auth::user()->id), 'method' => 'GET')) }}
									  		<button type="submit" class="btn btn-default">Done</button>
									  		<a href="{{ action('UsersController@show', Auth::user()->id)}} ">View in profile</a></span>
									  	</p>
										{{ Form::close() }}
							  		</div>
								
								</div>
								<div style="margin-left: 20px" class="panel panel-default col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3">
									<div class="panel-body">
										<table class="table table-hover" align= "center">
									    		<h4>Your Schools</h4>
									    			@foreach($schools as $school)
									    					<tr>
									    						<td style="vertical-align: middle">
									    						{{ Form::model($schools, array('action' => array('SchoolsController@destroy', $school->id), 'method' => 'DELETE')) }}
									    							{{{$school->college }}}
									    						</td>
									    						<td style="vertical-align: middle">
									    							<button type="submit" class="btn btn-info glyphicon glyphicon-ban-circle">Remove</button>
									    						{{ Form::close() }}
									    						</td>
									    					</tr>
									    			@endforeach		
									    				<table>
									  		</div>
									  	</div>						

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
<!-- // END first sign up screen-->


	

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