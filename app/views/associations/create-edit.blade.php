@extends('layouts.master')

@section('topscript')
	<title>Edit Associations</title>	

	<style>
		.deleteassociation {
			margin-left: 20px;
			margin-bottom: 10px;
		}
		.img-circle {
			width:40px;
			height: 40px;
		}
		.navbar {
		    background: #25ad9f;
		}
	</style>
@stop 
  
@section('content')
<body class=" loginWrapper">

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
				
				<h4 class="innerAll margin-none border-bottom text-center bg-primary"><i class="fa fa-pencil"></i> Add Your associations</h4>

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
								  		{{ Form::model($associations, array('action' => array('AssociationsController@update', Auth::user()->id), 'method' => 'PUT')) }}
									  		<div class="form-group">
									    		<label for="existing_associations">Choose From Existing Associations</label>
									    		<select name="existing_associations" class="form-control" id="existing_associations">
									    			@foreach($associations as $association)
									    				<option value="{{{ $association->id }}}">{{{ $association->association }}}</option>
									    			@endforeach
									    		</select>
									  		</div>
									  		<div>
									  		<button type="submit" class="btn btn-primary btn-block">Add association</button>
											{{ Form::close() }}
										</div>
										<center><p>*This form is for informational purposes only. It will not be displayed on your profile or given to potential employers.</p></center>
									  		<p>
									  		{{ Form::open(array('action' => array('JobsController@edit', Auth::user()->id), 'method' => 'GET')) }}
									  		<button type="submit" class="btn btn-default">Next</button>
									  		<a href="{{ action('UsersController@show', Auth::user()->id)}} ">View in profile</a></span>
									  		
									  		</p>
											{{ Form::close() }}
										{{ Form::close() }}
							  		</div>

							  		
								
								</div>


								<div style="margin-left: 20px" class="panel panel-default col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3">

								  	<div class="panel-body">
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<table class="table table-hover">
									    		<h4>Your Associations</h4><center>
									    		
									    			@foreach($associations_owned as $association_owned)
									    				<tr>
									    					<td>
									    						{{ Form::model($associations, array('action' => array('AssociationsController@destroy', $association_owned->id), 'method' => 'DELETE')) }}
									    							{{{ $association_owned->association }}}
									    					</td>
									    					<td>
									    							<button type="submit" class="glyphicon glyphicon-ban-circle">Remove</button>
									    						{{ Form::close() }}
									    					</td>
									    			@endforeach		
									    		</table>
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