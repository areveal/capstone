@extends('layouts.master')

@section('topscript')
<title>User Profile</title>
<style>
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
.small-pic {
    height: 15%;
    width: 15%;
}
.img-clean {
    margin: none;
}

.sidemenu
{
position: relative;
top: -83px;

}

.navbar a {
    color: #E8E8E8;
}

.navbar a:hover {
    color: #3498db;
}

.profile-pic {
    width:100%;
    height: 100%;
}



</style>

@stop

@section('bodytag')
<body class="scripts-async menu-right-hidden">
@stop

@section('content')

<!-- Content START -->

    <!--Navbar start-->

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
    </div>
</div>
<div style="padding-left: 180px">
    <h2 class="margin-left"><i></i></h2><br><br>       
            <div class="row">
                <div class="col-md-10">
                <!-- Widget start -->
                    <div class="widget widget-body-white">
                        <div class="media widget-body innerAll">
                            <img class="pull-left" src="{{{ $user->img_path }}}" alt="">
                            <div class="media-body innerL half">
                                @if(Auth::check() && (Auth::user()->slug != $user->slug))
                                    @if(in_array($user->id, $your_connections))
                                        <a class="btn btn-warning btn-xs pull-right"><i class="fa fa-fw fa-thumbs-up"></i> Connected</a>
                                    @else
                                        {{ Form::open(array('action' => array('ConnectionsController@update', $user->slug), 'class' => 'form-signin','method' => 'PUT')) }}
                                            <button type="submit" class="btn btn-primary btn-xs pull-right"><i class="fa fa-fw fa-thumbs-up"></i> Connect</button>
                                        {{ Form::close() }}
                                    @endif
                                @endif
                                <h3 class="margin-none"><strong>{{{ $user->first_name . ' ' . $user->last_name }}}</strong></h3>
                                <p class="strong"> </p>
                            </div>
                            @if(!empty($most_recent))
                                <div style="padding-left:25px">
                                    <h4 class="innerB half text-muted margin-none">{{{ $most_recent->job_title . ' - ' . $most_recent->company }}}</h4>
                                </div>
                            @endif
                            <div style="margin-left:25px">
                                <h5 class="innerB half text-muted margin-none"><strong >{{ $user->email }}</strong></h5>
                            </div>
                            <div style="padding-left:25px">
                                <h5 class="innerB half text-muted margin-none"><i class="fa fa-fw fa-map-marker text-muted"></i><strong >{{ $user->city . ', ' . $user->state_abbrev }}</strong></h5>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- //end Widget -->
            <!-- Widget start-->
            <div class="row">
                <div class="col-md-7 ">
            <div class="widget widget-body-white ">
                <div class="widget-head">
                    <h2 class="heading glyphicon glyphicon-list"><i> </i>Skills</h2>
                </div>
                <div class="widget-body inner-2x">
                    @foreach($user->skills as $skill)
                        <div style="padding-bottom: 2px; padding-right: 2px; float: left;"><button style="padding-bottom: 2px"  class="btn btn-default btn-sm">
                            {{{ $skill->skill }}}
                        </button></div>
                    @endforeach
                    <br><br><br><br>
                    @if(Auth::check())
                        @if(Auth::user()->slug == $user->slug)
                            <a href="{{ action('SkillsController@edit', Auth::user()->slug) }}" class="btn btn-primary btn-xs">Edit</a>
                        @endif
                    @endif
                </div> 
                <div>   
                    
                </div>
            </div>
            <!-- //end Widget -->
                <!-- Widget -->
                 <div class="widget widget-body-white">
                    <div class="widget-head">
                        <h4 class="heading list glyphicon glyphicon-book"><i> </i>Education</h4>
                    </div>
                    <div class="widget-body inner-2x">
                        @if(count($user->schools) >0)
                        @foreach($user->schools as $school)
                        <ul class="fa-ul">
                            <li><h4>
                                <strong> 
                                {{{ $school->college }}} 
                            </strong></h4>
                            </li>
                            <li>
                                {{{ $school->major }}} 
                                @if(!empty($school->gpa))
                                 | GPA: {{{ $school->gpa }}}
                                @endif
                            </li>
                            <li>
                                {{{ $school->date_began . ' ' . $school->date_complete }}}
                            </li>  
                        </ul>
                        <br>                       
                        @endforeach
                        @endif
                        @if(Auth::check())
                            @if(Auth::user()->slug == $user->slug)
                                <p class="clearfix"><a href="{{ action('SchoolsController@edit', Auth::user()->slug) }}" class="btn btn-primary btn-xs pull-left">Edit</a></p>                    
                            @endif
                        @endif
                    </div>
                </div>
                <!-- //end Widget -->
                    <!-- Widget start -->
                    <div class="widget widget-body-white">
                        <div class="widget-head">
                            <h4 class="heading glyphicon glyphicon-briefcase"><i> </i>Jobs</h4>
                        </div>
                        <div class="widget-body inner-2x">
                            @if(count($user->jobs) > 0)
                            @foreach($user->jobs as $job)
                                <ul class="fa-ul">  
                                    <li>
                                        <h4><strong> 
                                        {{{ $job->job_title }}} 
                                        </strong> </h4>
                                    </li>
                                    <li>
                                        <strong> 
                                        {{{ $job->company }}} 
                                        </strong>
                                    </li>
                                    <li>
                                    {{{ $job->start_date . ' - ' . $job->end_date }}}
                                    </li>
                                    <li> 
                                        <p>
                                          {{{ $job->description }}}
                                        </p>
                                    </li>
                                </ul> 
                                <br><br>
                            @endforeach
                            @endif
                            @if(Auth::check())
                                @if(Auth::user()->slug == $user->slug)
                                    <a href="{{ action('JobsController@edit', Auth::user()->slug) }}" class="btn btn-primary btn-xs">Edit</a>
                                @endif
                            @endif
                        </div>
                    </div>
                <!-- //end Widget -->
            

        <!-- //End Col -->
        <div class="row">
            <div class="col-md-9">
            </div>    
            <!-- //End Col -->
            </div><!-- /.col-md-9 -->    
        </div>  
        <div style=" margin-top: 83px; float: left;" class="col-md-3"> 
                <div class="widget sidemenu">
                    <div class="widget-body text-center">
                    <h5 class="strong margin-none">Connections</h5>
                        <div class="innerB"></div>
                            <div class="btn-group-vertical btn-block">
                                    <a href="{{ action('ConnectionsController@edit', $user->slug) }}" class="btn btn-primary btn-xs pull-right">View All</a>   
                            </div>   
                    </div>
                    
                </div><!-- /.widget -->
                <div class="widget sidemenu">
                    <h5 class="innerAll margin-none border-bottom bg-gray">Your Diversity Thread Network</h5>
                    <div class="widget-body padding-none">
                        @foreach($connections as $connection)
                            <div class="media border-bottom innerAll margin-none">
                                <a href="{{ action('UsersController@show', $connection->slug) }}"><img src="{{ $connection->img_path }}" class="pull-left media-object small-pic"/></a>
                                <div class="media-body">
                                    <a href="{{ action('UsersController@show', $connection->slug) }}"><h5 style="padding-left: 3px" class="margin-none">{{ $connection->first_name . ' ' . $connection->last_name }}</h5></a>
                                        <i style="padding-left: 3px">{{ $connection->status }}</i>                                
                                    <!-- <h5 class="margin-none"><a href="" class="text-inverse">Social Admin Released</a></h5>
                                    <small>on February 2nd, 2014 </small>  -->
                                </div>
                            </div> 
                        @endforeach          
                    </div>
                </div>
            </div>
        </div>        

<!-- End Row -->
<!-- // Content END -->
<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->
<!-- Footer -->
<div id="footer" class="hidden-print">
<!--  Copyright Line -->
<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase Social Admin Template</a> - Current version: v2.0.0-rc8 / <a target="_blank" href="/assets///CHANGELOG.txt?v=v2.0.0-rc8">changelog</a></div>
<!--  End Copyright Line -->
</div>
</div>
</div>
<!-- // Footer END -->
<!-- // Main Container Fluid END -->
@stop

@section('bottomscript')
    <script src="/assets/plugins/core_ajaxify_loadscript/script.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>

    <script>var App = {};</script>

    <script data-id="App.Scripts">
        App.Scripts = {

            /* CORE scripts always load first; */
            core: [
                '/assets/library/jquery/jquery.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/library/modernizr/modernizr.js?v=v2.0.0-rc8&sv=v0.0.1.2'
            ],

            /* PLUGINS_DEPENDENCY always load after CORE but before PLUGINS; *
            plugins_dependency: [
            '/assets/library/bootstrap/js/bootstrap.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
            '/assets/library/jquery/jquery-migrate.min.js?v=v2.0.0-rc8&sv=v0.0.1.2'
            ],

            /* PLUGINS always load after CORE and PLUGINS_DEPENDENCY, but before the BUNDLE / initialization scripts; */
            plugins: [
                '/assets/plugins/core_nicescroll/jquery.nicescroll.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/plugins/core_breakpoints/breakpoints.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/plugins/core_ajaxify_davis/davis.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/plugins/core_ajaxify_lazyjaxdavis/jquery.lazyjaxdavis.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/plugins/core_preload/pace.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/plugins/menu_sidr/jquery.sidr.js?v=v2.0.0-rc8', 
                '/assets/plugins/other_mixitup/jquery.mixitup.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/plugins/core_less-js/less.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/plugins/charts_flot/excanvas.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/plugins/core_browser/ie/ie.prototype.polyfill.js?v=v2.0.0-rc8&sv=v0.0.1.2'
            ],

            /* The initialization scripts always load last and are automatically and dynamically loaded when AJAX navigation is enabled; */
            bundle: [
                '/assets/components/core_ajaxify/ajaxify.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/components/core_preload/preload.pace.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/components/menus/sidebar.main.init.js?v=v2.0.0-rc8', 
                '/assets/components/menus/sidebar.collapse.init.js?v=v2.0.0-rc8', 
                '/assets/components/menus/menus.sidebar.chat.init.js?v=v2.0.0-rc8', 
                '/assets/plugins/other_mixitup/mixitup.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
                '/assets/components/core/core.init.js?v=v2.0.0-rc8'
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

    <!-- Global -->
    <script data-id="App.Config">
        var basePath = '',
        commonPath = '/assets/',
        rootPath = '/',
        DEV = false,
        componentsPath = '/assets/components/';
        var primaryColor = '#25ad9f',
        dangerColor = '#b55151',
        successColor = '#609450',
        infoColor = '#4a8bc2',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
        var themerPrimaryColor = primaryColor;

        App.Config = {
        ajaxify_menu_selectors: ['#menu'],
        ajaxify_layout_app: false   };
    </script>

@stop