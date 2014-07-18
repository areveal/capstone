@extends('layouts.master')

@section('topscript')
	<title>Edit Skills</title>	

	<style>
		.deleteSkill {
			margin-left: 20px;
			margin-bottom: 10px;
		}
	</style>
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
				
				<h4 class="innerAll margin-none border-bottom text-center bg-primary"><i class="fa fa-pencil"></i> Add Your Skills</h4>

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
								  		{{ Form::model($skills, array('action' => array('SkillsController@update', Auth::user()->id), 'method' => 'PUT')) }}
									  		<div class="form-group">
									    		<label for="existing_skills">Choose From Existing Skills</label>
									    		<select name="existing_skills" class="form-control" id="existing_skills">
									    			@foreach($skills as $skill)
									    				<option value="{{{ $skill->id }}}">{{{ $skill->skill }}}</option>
									    			@endforeach
									    		</select>
									  		</div>
									  		<button type="submit" class="btn btn-primary btn-block">Add Skill</button>
										{{ Form::close() }}

										{{ Form::model($skills, array('action' => array('SkillsController@update', Auth::user()->id), 'method' => 'PUT')) }}
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<div class="form-group">
									    		<label for="new_skills">Add New</label>
									    		<input name="new_skills" type="text" class="form-control" id="new_skills" placeholder="New Skill Here" value="{{Input::old('first_name')}}">
									  		</div>
									  		<button type="submit" class="btn btn-primary btn-block">Add Skill</button>
										{{ Form::close() }}
							  		</div>
								
								</div>


								<div class="panel panel-default col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">

								  	<div class="panel-body">
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<div class="form-group">
									    		<center><h4>Your Skills</h4></center>
									    		<ul class="list-unstyled">
									    			@foreach($skills_owned as $skill_owned)
									    				<center>
									    					<li>
									    						{{ Form::model($skills, array('action' => array('SkillsController@destroy', $skill_owned->id), 'method' => 'DELETE')) }}
									    							{{{ $skill_owned->skill }}}

									    							<button type="submit" class="btn btn-danger">Remove</button>
									    						{{ Form::close() }}
									    					</li>
									    				</center>
									    			@endforeach
									    		</ul>
									  		</div>
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