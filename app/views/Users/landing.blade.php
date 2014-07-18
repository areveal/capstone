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
        
      <section class="home">
        <div class="container">
        
        <div style="float: right">   
            {{link_to_action('HomeController@showLogin', 'Login', null, array('class' => 'btn btn-default btn-sm'))}}
        </div>
            <div class="home-phone hide hidden-xs col-xs-12 col-sm-5">
                <img src="img/iphone-3.png" class="iphone-3 " alt="">
            </div>
            <div class="row">

                <div class="home-copy  col-xs-18 col-sm-8 col-sm-offset-2 animated fadeInDown delay-2 ">
                    <br><h1 class="demo1">MPM<br><!-- <button type="submit" class="btn btn-signup"><i >IN</strong></i> --></button> 
                    	<!-- <span class="rotate">Meet, Connect, Share, Jobs,</span> -->
                    </h1>
                    <p>The women and minorities professional network.</p>
                    <p><strong>Sign up. Its free.</strong> 
                    <span>    
                   	{{link_to_action('UsersController@create', 'Join',  array('class' => 'btn btn-default btn-lg'))}}
                    <br></span>
                	</p>
                </div>
            </div>

        </div>

      </section>

      <section class="slide-1 slide full-color">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 iphone-container ">
                    
                </div>

                <div class="col-xs-12 col-sm-9 copy">
                    <h2 class=" hide slide-1-title slide-titles">  Sign Up. Its Free.</h2>
                    <p class="slide-1-1 hide">
                    </p>
      
                    <i class="hide entypo-down-open slide-1-scroll scroll-down"></i>
                    {{Form::open(array('action' => 'UsersController@store', 'class' => 'form-signin', 'role' => 'form'))}}
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<div class="form-group">
									    		<label for="first_name">First Name</label>
									    		<input name="first_name" type="text" class="form-control" id="first_name" placeholder="Your first name" value="{{Input::old('first_name')}}">
									  		</div>
									  		<div class="form-group">
									    		<label for="last_name">Last Name</label>
									    		<input name="last_name" type="text" class="form-control" id="last_name" placeholder="Your last name" value="{{Input::old('last_name')}}">
									  		</div>
								  	  		<div class="form-group">
									    		<label for="email">Email address</label>
									    		<input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value="{{Input::old('email')}}">
									  		</div>
									  		<div class="form-group">
									    		<label for="password">Password</label>
									    		<input name="password" type="password" class="form-control" id="password" placeholder="Password" >
									  		</div>
								    		<div class="form-group">
									    		<label for="confirm_password">Confirm Password</label>
									    		<input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword2" placeholder="Retype Password">
									  		</div>
									  		<button type="submit" class="btn btn-primary btn-block">Create Account</button>
										{{ Form::close() }}
                </div>
            </div>
        </div>

      </section>

      <section class="slide-2 slide full-color">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-4 copy">
                    <h2 class=" hide slide-2-title slide-titles">  Simple is effective  </h2>

                    <p class="slide-2-1 hide">
                    Use the three example layouts to take your users on a journey through your app. Use bootsraps grid system to control copy/phone size.
                    </p>

                    <p class="slide-2-2 hide hidden-xs">
                    Simply slide between slides just likes Apple's latest series of promotion sites.
                    </p>

                    <p class="slide-2-3 hide hidden-xs">
                    Remember simplicty will keep your work looking its best. Keep it simple.
                    </p>
                </div>

                <div class="col-xs-12 col-sm-4 iphone-container">
                    <img src="img/iphone-2.png" class="hide iphone-2" alt="">
                </div>

                <div class="col-xs-12 col-sm-4 copy">

                    <p class="slide-2-4 hide hidden-xs">
                    Use the settings cog to see what options you have avalible. Perhaps have a big video of your team hard at work in the office.
                    </p>

                    <p class="slide-2-5 hide hidden-xs">
                    Adding animations is easy, simply follow the examples in the code.
                    </p>

                    <p class="slide-2-6 hide hidden-xs">
                    Changing slide colors, images and video is all really easy.
                    </p>
                    <i class="hide entypo-down-open slide-2-scroll scroll-down hidden-xs"></i>
                </div>
            </div>
        </div>
      </section>
      <section class="slide-3 slide full-color">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 copy">
                    <h2 class=" hide slide-3-title slide-titles">  Obvisouly its Responsive </h2>
                    <p class="slide-3-1 hide">
                    Works great all all screen sizes. Use bootstraps default classes hidden-xs hidden-sm to control what you see.
                    </p>

                    <p class="slide-3-2 hide hidden-xs">
                    Show only the top half of the phone or hide it all together on mobile.
                    </p>

                    <p class="slide-3-3 hide hidden-xs">
                    PSD files are added for your screenshots, drop them right in and be up and running quickly.
                    </p>
                    <i class="hide entypo-down-open slide-3-scroll scroll-down hidden-xs"></i>
                </div>

                <div class="col-xs-12 col-sm-6 iphone-container ">
                    <img src="img/iphone-3.png" class="hide iphone-3" alt="">
                </div>
            </div>

        </div>
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
        <span> Showcase </span>
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


