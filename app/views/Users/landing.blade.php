<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MPM - Landing Page</title>
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
  <div class="container-fluid"> <a class="navbar-brand" style="font-family: Raleway" href="#"><strong>MINORITY PROFESIONALS MEET</a>
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
                    <br><h1 class="demo1"><br><!-- <button type="submit" class="btn btn-signup"><i >IN</strong></i> --></button> 
                    	 
                    <p>The professional network for women and minorities</p>
                    <span class="rotate">Connect, Share, Jobs </span> 

                    <p><strong>Get Started. Its free.<br>Registration takes less than 2 minutes</strong>
                    
                    <span>
                    <div class="home-copy">    
                       {{ Form::open(['action' => 'UsersController@create', 'class' => 'form-signin']) }}                  
                          <div>
                          <span class="input-group"></span>
                          <input name="first_name" id="first_name"type="text"  style="float:left" class="form-control" placeholder="First name">
                          <span class="input-group"></span>
                          <input name="last_name" id="last_name" type="text" style="float:left" class="form-control" placeholder="Last name">
                          </div>  
                          <span class="input-group"></span>
                          <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                          <span class="input-group"></span>
                          <input name="password" id="password" type="text" class="form-control" placeholder="Password">                 
                   	{{link_to_action('UsersController@create','Join Now', null, array('class' => 'btn btn-default btn-lg'))}}
                    {{ Form::close() }} 
                    </div>
                </span>
            </p>
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


