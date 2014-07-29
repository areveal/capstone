@extends('layouts.master')

@section('topscript')
	<title>Edit Skills</title>	

	<style>
		.deleteSkill {
			margin-left: 20px;
			margin-bottom: 10px;
		}
		.img-circle {
		    width:40px;
		    height: 40px;
		}
		.navbar{
		    background: #3498db;
		}

		.navbar a {
		    color: #E8E8E8;
		}

		.navbar a:hover {
		    color: #3498db;
		}
			</style>
@stop 

  
@section('content')
<div style="margin-top: 10px">
<div style="position:fixed;
top:0;
width:100%; z-index: 1002; background: #3498db; background-image: -webkit-linear-gradient(top, #3498db 0%,#1A4C6E 100%); padding-right: 20px;">
<table>
    <tr>
        <td style="padding-left: 180px; height: 70px;">   
            <h3 style="color: white">DiversityThread</h3></button>
        </td >
        <td style="padding-left: 28px; padding-top: 10px">
            <h6 style="color: white">Search</h6>
        </td>
        <td style="padding-left: 2px; padding-top: 10px">
            <h6 style="color: white"> Members</h6>
        </td>
        <td>
            <div class="col-md-18 col-lg-8" style="margin-top: 10px">
            <!--General Search Bar-->
            {{ Form::open(['action' => ['UsersController@index'],'method' => 'GET']) }}         
                <div class="input-group innerB">

                    <div class="col-md-12 col-lg-6">
                        <input type="text" style="border-radius: 5px" name="first_name" class="form-control " sytle="z-index: 1000" placeholder="First Name">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <input type="text" style="border-radius: 5px" name="last_name" class="form-control " sytle="z-index: 1000" placeholder="Last Name" required>
                    </div>
                    <div class="input-group-btn">
                        <button class="btn btn-default" sytle="z-index: 1000"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            {{ Form::close() }}   
            </div>
    </div>                
        </td> 
        @if(Auth::check())
            <div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs">
                <div class="dropdown username pull-left" style="padding-top: 14px">
                    <span class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 180px">
                    <span class="media margin-none">
                    <span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
                    <span style="color: white" class="media-body">{{ Auth::user()->first_name }}</span><span style="color: white" class="caret"></span>
                    </span>
                    </span>
                <ul class="dropdown-menu">
                    <li><a>Account Settings</a></li>
                    <li><a href="{{ action('UsersController@show', Auth::user()->slug)}} ">Profile</a></li>
                    <li><a href="{{ action('UsersController@edit', Auth::user()->slug)}} ">Edit Profile</a></li>
                    <li><a href="{{ action('HomeController@logout') }}">Sign Out</a></li>
                </ul>
                </div>
            </div>
        @endif
    </tr>  
</table>  
</div> 
<div style="margin-top: 68px;">  
<div class="navbar hidden-print box main" role="navigation" style="height:34px; background: #3f3f3f; background-image: linear-gradient(top, #696969 0%,#3f3f3f 100%);">
    <div  style="margin-top: 6px; margin-left: 180px">
        <table>
            <tr>

                <td style="padding-right: 40px">
                    <a  href="{{ action('UsersController@showLanding')}}">Home</a></a>
                </td>
                @if(Auth::check())
                <td style="padding-right: 40px; margin-top: -2px;" class="dropdown username pull-left">
                    <span class="dropdown-toggle" data-toggle="dropdown">
                    <span class="media margin-none">
                    <span class="media-body"><a style="font-size: 14px" href="{{ action('UsersController@show', Auth::user()->slug)}}">Profile</a></span><span></span>
                    </span>
                    </span>
                <ul class="dropdown-menu" style="background: #3f3f3f; margin-top: -16px;">
                    <li><a href="{{ action('UsersController@edit', Auth::user()->slug)}} ">Edit Profile</a></li>
                    <li><a href="{{ action('SkillsController@edit', Auth::user()->slug)}} ">Edit Skills</a></li> 
                    <li><a href="{{ action('SchoolsController@edit', Auth::user()->slug)}} ">Edit Education</a></li> 
                    <li><a href="{{ action('JobsController@edit', Auth::user()->slug)}} ">Edit Jobs</a></li> 
                    <li><a href="{{ action('AssociationsController@edit', Auth::user()->slug)}} ">Edit Associations</a></li>  
                </ul>
                </td>
                <td style="padding-right: 40px; margin-top: -2px;" class="dropdown username pull-left">
                    <span class="dropdown-toggle" data-toggle="dropdown">
                    <span class="media margin-none">
                    <span class="media-body"><a style="font-size: 14px" href="">Connections</a></span><span></span>
                    </span>
                    </span>
                <ul class="dropdown-menu" style="background: #3f3f3f; margin-top: -16px;">
                    <li><a href="{{ action('ConnectionsController@edit', Auth::user()->slug)}}">Your Connections</a></li> 
                </ul>
                </td>
                @endif
                <td style="padding-right: 40px">
                    <a href="/users">Network</a>
                </td>
                
    </tr>  
</table>
            </tr>
        </table>
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
				

					<!-- col-table-row -->
					<div class="col-table-row">

					<!-- col-app -->
					<div class="col-app col-unscrollable">

						<!-- col-app -->
						<div class="col-app">

							<div class="login" style="padding-left:180px">
								
								<div class="placeholder text-center"></div>
								
								<div class="widget-head">
									<br>
                    				<h4 class="heading glyphicon glyphicon-list"><i> </i>Skills</h4>
                    				<h5><i> </i>Add & Remove</h5>
                				</div>
                			<div class="col-md-7">
								<div class="panel panel-default">

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
									  		<button type="submit" class="btn btn-primary">Add</button>
										{{ Form::close() }}

										{{ Form::model($skills, array('action' => array('SkillsController@update', Auth::user()->id), 'method' => 'PUT')) }}
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<div class="form-group">
									    		<label for="new_skills">Add New</label>
									    		<input name="new_skills" type="text" class="form-control" id="new_skills" placeholder="New Skill Here" value="{{Input::old('first_name')}}">
									  		</div>
									  		<div class="form-group">
									  		<button type="submit" class="btn btn-primary">Add</button>
									  		</div>
									  		{{ Form::close() }}

									 </div>
								
								</div>
								<div class="panel panel-default">

								  	<div  class="panel-body">
								  		<!--<form role="form" action="index.html?lang=en"> -->
								  		<table class="table table-hover">
								    			<h4>Your Skills</h4></center>
								    			@foreach($skills_owned as $skill_owned)
								    				<tr>
							    						<div style="padding-bottom: 2px; padding-right: 2px; float: left;" class="btn-group">
								    						{{ Form::model($skills, array('action' => array('SkillsController@destroy', $skill_owned->id), 'method' => 'DELETE')) }}

									    						<button class="btn btn-default btn-sm">{{{ $skill_owned->skill  . '  '}}}</button>
									    						<button type="submit" class="btn btn-default btn-sm">
										    						<span class="glyphicon glyphicon-remove"></span>
									    						</button>
								    						{{ Form::close() }}
							    						</div>	
								    				</tr>	
								    			@endforeach		
								    	</table><br>
								    	<p>
									  		{{ Form::open(array('action' => array('UsersController@show', Auth::user()->slug), 'method' => 'GET')) }}
									  		<button type="submit" class="btn btn-default">Done</button>
									  		<a href="{{ action('SchoolsController@edit', Auth::user()->slug) }} ">Go to Education</a></span>
									  		
									  	</p>
											{{ Form::close() }}

							  		</div>	
								</div>	
						</div>

							<div style="margin-left: 40px" class="col-md-3">

							  	<div>
							  		<!--<form role="form" action="index.html?lang=en"> -->
							  		
							  		<table>
							  				<tr style=" height: 14px; padding-bottom: 10px;"><strong>Lets build your profile!</strong></tr>

							  				<tr><a style=" padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('UsersController@edit', Auth::user()->slug)}}"><strong><h4>1.Personal</h4></a></strong></tr>
							  				<tr><a style=" padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('SkillsController@edit', Auth::user()->slug)}}"><strong><h4 style="color: #3498db">2. Skills</h4></a></strong></tr>
							    			<tr><a style="padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('SchoolsController@edit', Auth::user()->slug)}}"><strong><h4>3. Education</h4></a></strong></tr>
							    			<tr><a style="padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('JobsController@edit', Auth::user()->slug)}}"><strong><h4>4. Experience</h4></a></strong></tr>
							    			<tr><a style="padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('AssociationsController@edit', Auth::user()->slug)}}"><strong><h4>5. Associations</h4></a></strong></tr>
							    			<tr><a style="padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('UsersController@show', Auth::user()->slug)}}"><strong><h4>See your Profile</h4></a></strong></tr>	
							    			<tr style="padding-bottom: 10px;"><strong><a href="{{ action('UsersController@show', Auth::user()->slug)}}">Finish later ></a></strong></tr>
							    	</table>


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