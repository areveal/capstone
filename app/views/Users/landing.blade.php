<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Diversity Thread</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css1/bootstrap.min.css">
        <link rel="stylesheet" href="css1/main.css">

        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css1/ie9-and-down.css" />
        <![endif]-->
   <link href="/favicon1.ico" rel="icon" type="image/x-icon" />

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>

                    
    <div class="main">
        
      <section class="home"><nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid"> <a class="navbar-brand" style="text-blue innerB text-center" href="#"><strong>Diversity Thread</a>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="float: right">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
        {{ Form::open(['action' => 'HomeController@doLogin', 'class' => 'form-signin']) }}  
            <div style="float: right">
                <input  style="width: 180px" type="text" placeholder="Username" name="email">
                <input  style="width: 180px" type="password" placeholder="Enter Password" name="password">
                <button type="submit" class="btn btn-primary">Sign In<i class='fa fa-fw fa-unlock-alt'></i></button>
            </div>
        {{ Form::close() }} 
        <!-- <div style="float: right">   
            {{link_to_action('HomeController@showLogin', 'Login', null, array('class' => 'btn btn-default btn-sm'))}}
        </div>  -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <div class="container">
        
            <div class="home-phone hide hidden-xs col-xs-12 col-sm-5">
                <img src="img/iphone-3.png" class="iphone-3 " alt="">
            </div>
            <div class="row">

                <div class="home-copy  col-xs-12 col-sm-8 col-sm-offset-2 animated fadeInDown delay-2 ">
<<<<<<< HEAD
                    <br><h1 class="demo1"><br><!-- <button type="submit" class="btn btn-signup"><i >IN</strong></i> --></button> 
                    	 
                    <h3 class="text-white innerB text-center">The professional network for women and minorities.</h3>
                    <!-- <span class="rotate">Connect, Share, Jobs </span>  -->
<div id="menu-right">
    <div class="row row-app">
        <div class="col-md-12">
            <div class="col-separator col-separator-first box col-unscrollable col-fs">
                <div class="col-table">
                    <div class="col-table-row">
                        <div class="col-app col-unscrollable tab-content">
                            <div class="col-app lock-wrapper lock-bg-1 tab-pane active animated fadeIn" id="lock-1-1">
                                <h3 class="text-white innerB text-center">Get Started-Its free.</h3>
                                <div class="lock-container">
                                    <div class="innerAll text-center">
                                        <img src="../assets//images/people/100/6.jpg" class="img-circle"/><img src="../assets//images/people/100/1.jpg" class="img-circle"/><img src="../assets//images/people/100/10.jpg" class="img-circle"/><img src="../assets//images/people/100/23.jpg" class="img-circle"/>
                                        {{ Form::open(['action' => 'HomeController@doLogin', 'class' => 'form-signin']) }}  
                                            <div class="innerLR">

                                                <input class="form-control text-center bg-gray" type="text" placeholder="Email" name="email">
                                                <input class="form-control text-center bg-gray" type="password" placeholder="Enter Password" name="password">
                                            </div>
                                            <div class="innerT">
                                                <button type="submit" class="btn btn-primary">Join Now <i class='fa fa-fw fa-unlock-alt'></i></button>
                                            </div>
                                        {{ Form::close() }}
                                            <a href="{{ action('RemindersController@getRemind') }}" class="btn margin-none">Build a profile in under 2 minutes.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
=======
                    <br><h1 class="demo1">MPM<br><!-- <button type="submit" class="btn btn-signup"><i >IN</strong></i> --></button> 

                    	 <!-- <span class="rotate"> Meet, Connect, Share, Jobs,</span> </h1> -->
                    <p>Minority Professionals Meet</p>
                    <p><strong>Sign up. Its free.</strong> <br><br>
                    <span>    
                   	{{link_to_action('UsersController@create','Join Today', null, array('class' => 'btn btn-default btn-lg'))}}
                    <br></span>
                	</p>
                </div>
>>>>>>> master
            </div>
        </div>
    </div>

      </section>

      
      </section>
      <section class="contact full-color">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                <h2>Keep in touch</h2>
                <p> We're always keen to here what you think, send us a message from all the usual places. Don't forget to sign up for our newsletter.</p>

                <div class="newsletter clearfix">
                    <form role="form">
                        <div class="form-group">
                            <input type="text" id="emailSignup" name="signup" placeholder="Your Email">
                            <button type="submit" class="btn btn-signup"><i class="entypo-mail"></i></button>
                        </div>
                    </form>
                </div>

                <div class="social clearfix">
                    <a href="#" class="social-item facebook"><i class="entypo-facebook"></i></a>
                    <a href="#" class="social-item twitter"><i class="entypo-twitter"></i></a>
                </div>
            </div>
        </div>
      </section>

    </div> <!-- /main -->

    <div class="icon animated fadeInLeft delay-3">
        
    </div>

    <div class="settings animated fadeInLeft delay-4">
        <span class="settings-icon">
            <i class="entypo-cog"></i>
        </span>
        <h3 class="settings-title"> Settings </h3>

        <span class="settings-subtitle">Home</span>
        <span class="toggle-video hidden-xs">toggle video </span>
        <span class="toggle-phone hidden-xs">toggle phone</span>
        <span class="toggle-opacity-first">toggle opacity first</span>
        <span class="settings-subtitle">Global</span>
        <span class="toggle-opacity-all">toggle opacity all</span>
        <span class="toggle-slide-fade"> toggle color fade on slide</span>
    </div>
<!--
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
 -->
 <!--
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
 -->
        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery-ui-1.8.22.custom.min.js"></script>
        <script src="js/vendor/jquery.imagesloaded.min.js"></script>

        <script src="http://vjs.zencdn.net/4.0/video.js"></script>
        <script src="js/vendor/bigvideo.js"></script>

        <script src="js/vendor/jquery.simple-text-rotator.min.js"></script>
        <script src="js/vendor/jquery.onepage-scroll-custom-min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>


