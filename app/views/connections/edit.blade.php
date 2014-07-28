@extends('layouts.master')

@section('topscript')
	<title>{{ $user->first_name }}'s  Connections</title>

	<style>
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
	    color: #171717;
	}
</style>
@stop

@section('bodytag')
<body class="loginWrapper">
@stop

@section('content')	
@if(Auth::check())
<divclass="col-md-18 col-lg-6" style="margin-top: 10px; margin-left: 2px;">
<div style="position:fixed;
top:0;
width:100%; z-index: 1002; background: #3498db; background-image: -webkit-linear-gradient(top, #3498db 0%,#1A4C6E 100%);">
<table >
    <tr>
        <td style="padding-left: 180px; height: 70px;">   
            <h3 style="color: white">DiversityThread</h3></button>
        </td >
        <td style="padding-left: 12px; padding-top: 10px">
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
            <div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs border-right">
                <div class="dropdown username pull-left" style="padding-top: 14px">
                    <span class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 180px">
                    <span class="media margin-none">
                    <span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
                    <span class="media-body">{{ Auth::user()->first_name }}</span><span class="caret"></span>
                    </span>
                    </span>
                <ul class="dropdown-menu" style="padding-right: 10px">
                    <li><a>Account Settings</a></li>
                    <li><a href="{{ action('UsersController@show', Auth::user()->slug)}} ">Profile</a></li>
                    <li><a href="{{ action('UsersController@edit', Auth::user()->slug)}} ">Edit Profile</a></li>
                    <li><a href="{{ action('HomeController@logout') }}">Sign Out</a></li>
                </ul>
                </div>
            </div>
    </tr>  
</table>  
</div> 
<div style="margin-top: 48px">  
<div class="navbar hidden-print box main" role="navigation" style="height:34px; background: #3f3f3f">
    <div  style="margin-top: 6px; margin-left: 180px">
        <table>
            <tr>

                <td style="padding-right: 40px">
                    <a  href="{{ action('UsersController@show', Auth::user()->slug)}}">Home</a></a>
                </td>
                <td style="padding-right: 40px; margin-top: -2px;" class="dropdown username pull-left">
                    <span class="dropdown-toggle" data-toggle="dropdown">
                    <span class="media margin-none">
                    <span class="media-body"><a style="font-size: 14px" href="">Profile</a></span><span></span>
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
                <td style="padding-right: 40px">
                    <a href="/users">Network</a>
                </td>
                
    </tr>  
</table>
            </tr>
        </table>
    </div>
</div> 
@endif

			<!-- <div class="layout-app">  -->
<div class="col-separator col-unscrollable box">
			
			<!-- col-table -->
			<div class="col-table">
							

				<!-- col-table-row -->
				<div class="col-table-row">

					<!-- col-app -->
					<div class="col-app col-unscrollable">	
					<div class="col-app">

							<div class="login" style="padding-left:180px">
								

								<div class="placeholder text-center"></div>
		
<div class="innerAll">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			<div class="timeline-cover">
				<div class="widget border-bottom">
					<div class="widget-body border-bottom">
						<div class="media">
							<div class="pull-left innerAll">
								<img src="{{ $user->img_path }}" alt="" class="img-circle">
							</div>
							<div class="media-body">
								<h4><a href="{{ action('UsersController@show', $user->slug) }}">{{{ $user->first_name . ' ' . $user->last_name }}}</a> <a href="" class="text-muted"></a></h4>					
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="">
				<ul class="navigation">
					<li><a class="" href="{{ action('UsersController@show', $user->slug) }}"><i class="fa fa-fw fa-user"></i><span> Profile</span></a></li>
					<li class="active"><a href="#"><i class="fa fa-fw icon-group"></i><span> Connections</span></a></li>
				</ul>
			</div>	
		<div class="clearfix"></div>
		</div>		
	</div>
</div>
</div>		
	</div>
</div>
</div>		
</div>
</div>
</div>	

{{ Form::open(['action' => ['ConnectionsController@edit', $user->slug],'method' => 'GET']) }}			
	<div class="input-group innerB">
		<div class="col-md-12 col-lg-6">
	 		<input type="text" name="first_name" class="form-control " placeholder="First Name">
	 	</div>
	 	<div class="col-md-12 col-lg-6">
		 	<input type="text" name="last_name" class="form-control " placeholder="Last Name" required>
		 </div>
		<div class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></div>
	</div>
{{ Form::close() }}

<div class="row row-merge">
		
	@if(count($connections) == 0)
		<h4>The user has no connections to display.</h4>
	@endif

	@foreach($connections as $connection)

		<div class="col-md-12 col-lg-6 bg-white border-bottom">
			<div class="row">

				<div class="col-sm-9">
					<div class="media">
						<a class="pull-left margin-none" href="#">
							<img class="img-clean" src="{{{ $connection->img_path }}}" alt="...">
						</a>
						<div class="media-body innerAll inner-2x padding-right-none padding-bottom-none">
							 <h4 class="media-heading"><a href="" class="text-inverse">{{{ $connection->first_name . ' ' . $connection->last_name }}}</a></h4>
							 <p>
							 	<i class="fa fa-fw fa-map-marker text-muted"></i> Living in {{{ $connection->city . ', ' . $connection->state }}}</p> 
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="innerAll text-right">
						<div class="btn-group-vertical btn-group-sm">
	                        @if(Auth::guest())
	                        @elseif(Auth::user()->slug != $user->slug)
	                            @if(in_array($connection->id, $your_connections))
	                                {{ Form::open(array('action' => null, 'class' => 'form-signin')) }}
	                                    <button class="btn btn-warning btn-sm connected pull-right"><i class="fa fa-fw fa-thumbs-up"></i> Connected</button>
	                                    <a href="" class="btn btn-default" data-toggle="sidr-open" data-menu="menu-right"><i class="fa fa-fw fa-envelope-o"></i> Chat</a>
	                                {{ Form::close() }}	                            
	                            @else
	                                {{ Form::open(array('action' => array('ConnectionsController@update', $connection->id), 'class' => 'form-signin','method' => 'PUT')) }}
	                                    <button type="submit" class="btn btn-primary btn-sm connect pull-right"><i class="fa fa-fw fa-thumbs-up"></i> Connect</button>
	                                    <a href="" class="btn btn-default" data-toggle="sidr-open" data-menu="menu-right"><i class="fa fa-fw fa-envelope-o"></i> Chat</a>
	                                {{ Form::close() }}
	                            @endif
	                        @else
                                {{ Form::open(array('action' => array('ConnectionsController@destroy', $connection->id), 'class' => 'form-signin','method' => 'DELETE')) }}
                                    <button type="submit" class="btn btn-danger pull-right"> Remove</button>
                                    <a href="" class="btn btn-default" data-toggle="sidr-open" data-menu="menu-right"><i class="fa fa-fw fa-envelope-o"></i> Chat</a>
                                {{ Form::close() }}	                        	
	                        @endif
						</div>
					</div>
				</div>
			</div>
		
		</div>

	@endforeach
		
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
@stop	
		
