@extends('layouts.master')

@section('topscript')
	<title>Users</title>
	<style>
		.buttons {
			padding-left: 0px;
		}
		.connected {
			padding-left: 6px;
			padding-right: 6px;
		}
		.img-circle {
		    width:40px;
		    height: 40px;
		}
		.navbar{
		    background: #3498db;

		}
		.search {
		    margin-top:15px;
		    margin-right: 50%;
		}
		.navsearch {
		    margin-right: 50%;
		}
	</style>
@stop

@section('bodytag')
<body class=" scripts-async">		
@stop	


@section('content')
<!-- Content START -->
<div id="content">
	<!--Navbar start-->
@if(Auth::check())
<divclass="col-md-18 col-lg-6" style="margin-top: 10px; margin-left: 2px;">
<div style="position:fixed;
top:0;
width:100%; z-index: 1002; background: #3498db;">
<table >
    <tr>
        <td style="padding-left: 168px">   
            <div class"btn-group"><button class="btn btn-primary btn-sm"><h3>DiversityThread</h3></button></div>
        </td>
        <td style="padding-left: 12px; padding-top: 10px">
            <h6>Search</h6>
        </td>
        <td style="padding-left: 2px; padding-top: 10px">
            <h6> Members</h6>
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
            <div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs border-right">
                <div class="dropdown username pull-left" style="padding-top: 14px">
                    <span class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 180px">
                    <span class="media margin-none">
                    <span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
                    <span class="media-body">{{ Auth::user()->first_name }}</span><span class="caret"></span>
                    </span>
                    </span>
                <ul class="dropdown-menu" style="padding-right: 10px">
                    <li><a href="">Messages</a></li>
                    <li><a href="{{ action('UsersController@show', Auth::user()->slug)}} ">Profile</a></li>
                    <li><a href="{{ action('UsersController@edit', Auth::user()->slug)}} ">Edit Profile</a></li>
                    <li><a href="{{ action('HomeController@logout') }}">Logout</a></li>
                </ul>
                </div>
            </div>
    </tr>  
</table>  
</div> 
<div style="margin-top: 48px">  
<div class="navbar hidden-print box main" role="navigation" style="height:34px;background: #3f3f3f; background-image: linear-gradient(top, #696969 0%,#3f3f3f 100%);">
    <div  style="margin-top: 6px; margin-left: 180px">
        <table>
            <tr>

                <td style="padding-right: 40px">
                    <a  href="">Home</a></a>
                </td>
                <td style="padding-right: 40px">
                    <a  href="">Profile</a></a>
                </td>
                <td style="padding-right: 40px">
                    <a href="">Connections</a>
                </td>
                <td style="padding-right: 40px">
                    <a href="/users">Members</a>
                </td>
            </tr>
        </table>
    </div>
</div> 
@endif
	<!--NavBar Close-->

	<!--Container for Search Bar and user list-->
	<div class="col-md-18 col-lg-9">
		<!--General Search Bar-->
		{{ Form::open(['action' => ['UsersController@index'],'method' => 'GET']) }}			
			<div class="input-group innerB">
				<div class="col-md-12 col-lg-6">
			 		<input type="text" style="border-radius: 5px" name="first_name" class="form-control " placeholder="First Name">
			 	</div>
			 	<div class="col-md-12 col-lg-6">
				 	<input type="text" style="border-radius: 5px" name="last_name" class="form-control " placeholder="Last Name" required>
				 </div>
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>
		{{ Form::close() }}			
		<!--Here is the list of all the contacts!!!-->
		<div class="row row-merge">
			@if(count($users)>0)		
				@foreach($users as $user)
					<div class="col-md-12 col-lg-6 bg-white border-bottom">
						<div class="row">
							<div class="col-sm-9">
								<div class="media">
									<a class="pull-left margin-none" href="{{ action('UsersController@show', $user->slug) }}">
										<img class="img-clean" src="{{ $user->img_path }}" alt="">
									</a>
									<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
										<h4 class="media-heading"><a href="{{ action('UsersController@show', $user->slug) }}" class="text-inverse">{{ $user->first_name . ' ' . $user->last_name }}</a></h4>
										<p>
									 	<!-- <span class="text-success strong"><i class="fa fa-check"></i> Friend</span> &nbsp;  -->
									 	<i class="fa fa-fw fa-map-marker text-muted"></i>{{ $user->city . ', ' . $user->state_abbrev  }}</p> 
									</div>
								</div>
							</div>
							@if(Auth::check())
								<div class="col-sm-3">
									<div class="innerAll text-right buttons">
										<div class="btn-group-vertical btn-group-sm">
											@if(in_array($user->id, $connections))
												{{ Form::open(array('action' => array('ConnectionsController@edit', Auth::user()->slug),'method' => 'GET', 'class' => 'form-signin'))}}
												<button type="submit" class="btn btn-warning connected"><i class="fa fa-fw fa-thumbs-up"></i> Connected</button>
												{{ Form::close() }}
											@else
												{{ Form::open(array('action' => array('ConnectionsController@update', $user->slug), 'class' => 'form-signin','method' => 'PUT')) }}
												<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-thumbs-up"></i> Connect</button>
												{{ Form::close() }}
											@endif
											<a href="" class="btn btn-default" data-toggle="sidr-open" data-menu="menu-right"><i class="fa fa-fw fa-envelope-o"></i> Chat</a>
										</div>
									</div>
								</div>
							@endif
						</div>
					</div>
				@endforeach
			@else
				<h3>The search returned no results.</h3>
			@endif
		</div>

		@if((count($users)>0)) 
			{{ $users->links() }}
		@endif
	</div>
	

	<!--Div for side of page Search bar??-->
	<div class="col-md-4 col-lg-3">
		<div class="widget">
			<h5 class="innerAll margin-none bg-primary">Advanced</h5>
			<div class="widget-body padding-none">
				<ul class="list-group list-group-1 borders-none margin-none">
					<li class="list-group-item">
						<div class="input-group innerB">
					  		{{ Form::open(array('action' => 'UsersController@index', 'method' => 'GET')) }}
						  		<div class="col-md-18 col-lg-10">
						    		<label for="skill">Search by Skill</label>
						    		<select name="skill" class="form-control" id="skill">
						    			@foreach($skills as $skill)
						    				<option value="{{{ $skill->id }}}">{{{ $skill->skill }}}</option>
						    			@endforeach
						    		</select>
						  		</div>
						  		<div class="input-group-btn">
						  			<button style="margin-left:13px" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
						  		</div>
							{{ Form::close() }}
						</div>
					</li>
					<li class="list-group-item">
						<div class="input-group innerB">
					  		{{ Form::open(array('action' => 'UsersController@index', 'method' => 'GET')) }}
								<div class="col-md-18 col-lg-6">
								 	<label for="zip">Search by Zip</label>
								 	<input type="text" name ="zip" class="form-control " placeholder="Zipcode" required>
								</div>
								<div class="col-md-18 col-lg-4">
								 	<label for="displacement">Within:</label>
								 	<select name="displacement" class="form-control" style="margin-top:5px" required>
								 		<option value="10">10 miles</option>
								 		<option value="20">20 miles</option>
								 		<option value="30">30 miles</option>
								 		<option value="40">40 miles</option>
								 		<option value="50">50 miles</option>
								 	</select>
								</div>					
								<div class="input-group-btn">
									<button style="margin-left:12px" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</div>
							{{ Form::close() }}
						</div>
					</li>
				</ul>
			</div>
		</div>
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

@stop
	


@section('bottomscript')
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
	
@stop