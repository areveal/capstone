@extends('layouts.master')

@section('topscript')
	<title>Edit Experience</title>	

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
<!-- <div class="layout-app">  -->
<!-- row-app -->
<div class="row row-app">





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
                    <li><a href="{{ action('UsersController@edit', Auth::user()->slug)}} ">Edit Profile</a></li>
                    <li><a href="{{ action('SkillsController@edit', Auth::user()->slug)}} ">Edit Skills</a></li>
                    <li><a href="{{ action('AssociationsController@edit', Auth::user()->slug)}} ">Edit Associations</a></li>
                    <li><a href="{{ action('JobsController@edit', Auth::user()->slug)}} ">Edit Experience</a></li>
                    <li><a href="{{ action('SchoolsController@edit', Auth::user()->slug)}} ">Edit Education</a></li>
                    <li><a href="{{ action('UsersController@show', Auth::user()->slug)}} ">Done Editing</a></li>
                </ul>
            </div>
        </div>
    </div>

	<!-- col -->


		<!-- col-separator.box -->
		<div class="col-separator col-unscrollable box">
			
			<!-- col-table -->
			<div class="col-table">
				

				<h2 class="text-center" style="margin-top: 40px"><i class="fa fa-pencil">Add Your experience</i></h2>

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
								  		

								  		{{Form::open(array('action' => array('JobsController@update',Auth::user()->id), 'method' => 'PUT', 'class' => 'form-signin', 'role' => 'form'))}}
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<div class="form-group">
									    		<label for="job_title">What is the title of the position?</label>
									    		<!-- below is for when a user has had more than one job
									    		<label for="jobs">Where else have you worked?</label> -->
									    		<input name="job_title" type="text" class="form-control" id="job_title" placeholder="Job title" value="{{{ Input::old('job_title') }}}">
									  		</div>
									  		<div class="form-group">
									    		<label for="company">Company</label>
									    		<input name="company" type="text" class="form-control" id="company" placeholder="Company name" value="{{{ Input::old('company') }}}">
									  		</div>
									  		<div class="form-group">
									  		<label for="start_date">When did you start?</label>
											<input name="start_date" type="date" id="start_date" class="col-md-6 form-control" value="{{{ Input::old('start_date') }}}"/>
											</div>
											<div class="form-group">
											<label for="end_date">When did you end working here?</label>
											<input name="end_date"input type="date" id="end_date" class="col-md-6 form-control" value="{{{ Input::old('end_date') }}}"/>
											</div>
											<div class="form-group">
									    		<label for="description">Job Description</label>
									    		<textarea name="description" class="form-control" id="description" rows="7" placeholder="Job description">{{{ Input::old('description') }}}</textarea>
									  		</div>
									  		<div class="form-group">	
									  		<button type="submit" class="btn btn-primary btn-block">Add Job</button>
											</div>
										{{Form::close()}}
										<p>
									  		{{ Form::open(array('action' => array('SchoolsController@edit', Auth::user()->slug), 'method' => 'GET')) }}
									  		<button type="submit" class="btn btn-default">Next</button>
									  		<a href="{{ action('UsersController@show', Auth::user()->slug)}} ">View in profile</a></span>

									  		
									  		</p>
										{{ Form::close() }}
							  		</div>
								</div>
							</div>
							<div style="margin-left: 20px" class="panel panel-default col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3">
									<div class="panel-body">
										<table class="table table-hover" align= "center">
								    		<h4>Your Positions</h4>
								    		
								    			@foreach($jobs as $job)
							    					<tr>
							    						<td style="vertical-align: middle">
							    						{{ Form::model($jobs, array('action' => array('JobsController@destroy', $job->id), 'method' => 'DELETE')) }}
							    							<strong>{{{$job->job_title}}}</strong><br>
							    							{{{$job->company }}}
							    						</td>
							    						<td style="vertical-align: middle">
							    							<button type="submit" class="btn btn-info glyphicon glyphicon-ban-circle">Remove</button>
							    						{{ Form::close() }}
							    						</td>
							    					</tr>
								    			@endforeach		
								    				<table>
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