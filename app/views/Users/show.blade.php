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
    height: 20%;
    width: 20%;
}

.sidemenu
{
position: relative;
top: -102px;

}
</style>

@stop

@section('bodytag')
<body class="scripts-async menu-right-hidden">
@stop

@section('content')
<!-- Content START -->
<div id="content">
        @if(Auth::check())
    <div class="navbar hidden-print box main" role="navigation">
        <ul class="notifications pull-left hidden-xs">
            <li class="dropdown notif">
                <a href="" class="dropdown-toggle"  data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
                <ul class="dropdown-menu chat media-list" role="menu">
                    <li class="media"><a class="pull-left" href="#"><img class="media-object thumb" src="{{ Auth::user()->img_path }}" alt="50x50" width="30"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-left">5 min</span>
                            <h5 class="media-heading">Adrian D.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/16.jpg" alt="50x50" width="50"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-left">2 days</span>
                            <h5 class="media-heading">Jane B.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>                   
                    <li class="media">
                        <a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/17.jpg" alt="50x50" width="50"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-left">3 days</span>
                            <h5 class="media-heading">Andrew M.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs border-right">
            <div class="dropdown username pull-left">
                <span class="dropdown-toggle" data-toggle="dropdown">
                    <span class="media margin-none">
                    <span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
                    <span class="media-body">{{ Auth::user()->first_name }} <span class="caret"></span></span>
                </span>
                </span>
                <ul class="dropdown-menu">
                    <li><a href="">Messages</a></li>
                    <li><a href="{{ action('UsersController@show', Auth::user()->id)}} ">Profile</a></li>
                    <li><a href="{{ action('UsersController@edit', Auth::user()->id)}} ">Edit Profile</a></li>
                    <li><a href="{{ action('HomeController@logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
            <div class="container">
                {{ Form::open(['action' => ['UsersController@index'],'method' => 'GET']) }}
                <div class="col-md-6" style="margin-left:400px">
                    <div class="input-append search">

                        <input id="appendedInputButton" style="border-radius: 5px" class="span6" type="text" placeholder="Search...">

                        <!-- search function will be going to index blade -->
                        <a class="glyphicon glyphicon-search btn btn-primary btn-xs" pull-right>Search</a>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>        
    </div>
    @endif
    <h2 class="margin-left">Profile &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>       
            <div class="row">
                <div class="col-md-9 ">
                <!-- Widget start -->
                    <div class="widget widget-body-white">
                        <div class="media widget-body innerAll">
                            <a href="" class="pull-left"><img src="{{{ $user->img_path }}}" width="60" alt=""></a>
                            <div class="media-body innerL half">
                                <h4 class="margin-none"><strong>{{{ $user->first_name . ' ' . $user->last_name }}}</strong></h4>
                                <p class="strong"> </p>
                            </div>
                            <div class="bg-gray innerAll ">
                                @if(!empty($most_recent))
                                    <h5 class="innerB half border-bottom text-muted margin-none"></i><strong>{{ $most_recent->job_title }}</strong></h5>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //end Widget -->
            <!-- Widget start-->
            <div class="row">
                <div class="col-md-9 ">
            <div class="widget widget-body-white ">
                <div class="widget-head">
                    <h4 class="heading glyphicon glyphicon-list"><i> </i>Skills</h4>
                </div>
                <div class="widget-body inner-2x">
                    @foreach($user->skills as $skill)
                        <button class="btn btn-default btn-sm">
                            {{{ $skill->skill }}}
                        </button>

                    @endforeach
                    <br>
                    <br>
                    @if(Auth::check())
                        @if(Auth::user()->id == $user->id)
                            <a href="{{ action('SkillsController@edit', Auth::user()->id) }}" class="btn btn-primary btn-xs">Edit</a>
                        @endif
                    @endif
                </div> 
                <div>   
                    
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
                                <br><br><br>
                            @endforeach
                            @endif
                            @if(Auth::check())
                                @if(Auth::user()->id == $user->id)
                                    <a href="{{ action('JobsController@edit', Auth::user()->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                @endif
                            @endif
                        </div>
                    </div>
                <!-- //end Widget -->
            </div>
            <div style="float: left" class="col-md-3"> 
                <div class="widget sidemenu">
                    <div class="widget-body text-center">
                    <h2 class="strong margin-none">Connections</h2>
                        <div class="innerB"></div>
                            <div class="btn-group-vertical btn-block">
                            @if(Auth::check())
                                @if(Auth::user()->id == $user->id)
                                    <a href="{{ action('ConnectionsController@edit', Auth::user()->id) }}" class="btn btn-primary btn-xs pull-right">View All</a>
                                @endif
                            @endif    
                            </div>   
                    </div>

                </div><!-- /.widget -->
                <div class="widget sidemenu">
                    <h5 class="innerAll margin-none border-bottom bg-gray">Your Network</h5>
                    <div class="widget-body padding-none">
                        @foreach($connections as $connection)
                            <div class="media border-bottom innerAll margin-none">
                                <img src="{{ $connection->img_path }}" class="pull-left media-object small-pic"/>
                                <div class="media-body">
                                    <h5 class="margin-none">{{ $connection->first_name . ' ' . $connection->last_name }}</h5>
                                        <i>{{ $connection->status }}</i>                                
                                    <!-- <h5 class="margin-none"><a href="" class="text-inverse">Social Admin Released</a></h5>
                                    <small>on February 2nd, 2014 </small>  -->
                                </div>
                            </div> 
                        @endforeach          
                    </div>
                </div>
            </div>
                
        <!-- //End Col -->
        <div class="row">
            <div class="col-md-9">
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
                            </li>
                            <li>
                                {{{ $school->date_began . ' ' . $school->date_complete }}}
                            </li>
                            
                        </ul>
                        <br>                       
                        @endforeach
                        @endif
                        @if(Auth::check())
                            @if(Auth::user()->id == $user->id)
                                <p class="clearfix"><a href="{{ action('SchoolsController@edit', Auth::user()->id) }}" class="btn btn-primary btn-xs pull-left">Edit</a></p>                    
                            @endif
                        @endif
                    </div>
                </div>
                <!-- //end Widget -->
            </div>    
            <!-- //End Col -->
            </div><!-- /.col-md-9 -->    
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