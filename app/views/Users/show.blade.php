@extends('layouts.master')

@section('topscript')
<title>User Profile</title>
<style>
.img-circle {
width:40px;
height: 40px;
}
.navbar
  {
      background: #25ad9f;
  }
</style>

@stop

@section('bodytag')
<body class="scripts-async menu-right-hidden">
@stop

@section('content')
<!-- Content START -->
<div id="content">
    <div class="navbar hidden-print box main" role="navigation">
        <ul class="notifications pull-left hidden-xs">
            <li class="dropdown notif">
                <a href="" class="dropdown-toggle"  data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
                <ul class="dropdown-menu chat media-list">
                    <li class="media"><a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/15.jpg" alt="50x50" width="30"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-right">5 min</span>
                            <h5 class="media-heading">Adrian D.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/16.jpg" alt="50x50" width="50"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-right">2 days</span>
                            <h5 class="media-heading">Jane B.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>                   
                    <li class="media">
                        <a class="pull-left" href="#"><img class="media-object thumb" src="/assets/images/people/100/17.jpg" alt="50x50" width="50"/></a>
                        <div class="media-body">
                            <span class="label label-default pull-right">3 days</span>
                            <h5 class="media-heading">Andrew M.</h5>
                            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="user-action pull-left menu-right-hidden-xs menu-left-hidden-xs border-left">
            <div class="dropdown username pull-left">
                <span class="dropdown-toggle" data-toggle="dropdown">
                    <span class="media margin-none">
                    <span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
                    <span class="media-body">{{ Auth::user()->first_name }} <span class="caret"></span></span>
                </span>
                </span>
                <ul class="dropdown-menu">
                    <li><a href="">Messages</a></li>
                    <li><a href="">Edit Profile</a></li>
                    <li><a href="{{ action('HomeController@logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="input-group col-md-4">
            <span class="input-group-addon"><i class="icon-search"></i></span>
            <input type="text" class="form-control" placeholder="Search Inclusion Users"/>
        </div>
    </div>
    <div class="layout-app">  
        <div class="innerLR">
        <h2 class="margin-none">Profile &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>
            <div class="separator-h"></div>
                <div class="container margin: 50px">
                    <div class="row">
                        <div class="col-md-9 ">
                        <!-- Widget start -->
                        <div class="widget widget-body-white">
                            <div class="media widget-body innerAll">
                                <a href="" class="pull-left"><img src="/assets/images/people/100/16.jpg" width="60" alt=""></a>
                                <div class="media-body innerL half">
                                    <h4 class="margin-none"><a href="" class="text-primary">Adrian Demian</a></h4>
                                    <p class="strong">Senior UI Designer</p>
                                    <div class="bg-gray innerAll ">
                                    <h5 class="innerB half border-bottom text-muted margin-none"><i class="fa fa-fw icon-briefcase-2"></i> MOSAICPRO LLC</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //end Widget -->
                    <!-- Widget start-->
                    <div class="widget widget-body-white ">
                        <div class="widget-head">
                            <h4 class=" heading glyphicons list"><i></i>Skills</h4>
                        </div>
                        <div class="widget-body">
                            <div class="innerAll">
                                <a href="" class="btn btn-primary btn-xs">Edit</a>
                            </div>
                        </div>
                    </div>
                    <!-- //end Widget -->
                    <!-- Widget start -->
                    <div class="widget widget-body-white">
                        <div class="widget-head">
                            <h4 class=" heading glyphicon glyphicon-briefcase"><i> </i>Jobs</h4>
                        </div>
                    <div class="widget-body inner-2x">
                        @foreach($jobs as $job)
                            <ul class="fa-ul">  
                              <li> {{{ $job->title }}} {{{ $job->beginDate $job->endDate }}} </li>
                              <li> {{{ $job->companyName }}} </li>
                              <li> 
                                <p>
                                  {{{ $job->description }}}
                                </p>
                              </li>
                            </ul> 
                        @endforeach
                            <a href="" class="btn btn-primary btn-xs">Edit</a>
                    </div>
                </div>
                <!-- //end Widget -->
            </div>
            <!-- //Widget -->
        </div>
        <!-- //End Col -->
        <div class="col-md-9">
        <!-- Widget -->
        <!-- Widget  -->
        <div class="widget widget-body-white padding-none">
            <div class="widget-head height-auto">
                <div class="media innerAll">
                    <a href="" class="pull-right"><i class="fa icon-comment-fill-2"></i></a>
                    <a href="" class="pull-left"><img src="/assets/images/people/50/8.jpg" alt="" class="img-circle"></a>
                        <div class="media-body">
                            <h4>Education</h4>
                <!-- p class="margin-none">School</p> -->
                        </div>
                    </div>
                </div>
                <ul class="list-unstyled">
                    <li class="innerAll border-bottom">
                        <span class="badge badge-default pull-right">4</span>
                        <i class="fa fa-fw icon-user-1"></i> Team Members
                    </li>
                    <li class="innerAll border-bottom">
                        <span class="badge badge-default pull-right">4</span>
                        <i class="fa fa-fw fa-dashboard"></i> Active Projects
                    </li>
                    <li class="innerAll border-bottom">
                        <span class="badge badge-default bg-primary pull-right">59</span>
                        <i class="fa fa-fw icon-browser-check"></i> Completed Tasks
                    </li>
                    <li class="innerAll border-bottom">
                        <span class="badge badge-default pull-right">3</span>
                        <i class="fa fa-fw fa-file-text-o"></i> Files under review
                    </li>
                    <li class="innerAll bg-white text-center">
                        <a href="" class="btn btn-primary btn-sm">View Openings</a>
                        <a href="" class="btn btn-primary btn-xs pull-left">Edit</a>
                    </li>
                </ul>
            </div>
            <!-- //end Widget -->
        </div>
        <!-- //End Col -->
    </div>   
<!-- End Row -->
</div>

</div>
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
</div>
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