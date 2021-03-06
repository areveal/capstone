@extends('layouts.master')

@section('topscript')
	@if(Auth::check())
		<title>Edit Info</title>	
	@else
		<title>Sign Up</title>	
	@endif
	<style>
	.img-circle {
	    width:40px;
	    height: 40px;
	}
	.navbar{
	    background: #3498db;
	}
	.hidden {
		display: none;
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
									@if(Auth::check())
									<div class="widget-head">
										<br>
                        				<h4 class="heading list glyphicon glyphicon-user"><i> </i>Profile</h4>
                        				<h5><i> </i>Add & Remove</h5>
                    				</div>
									@else
									<div class="widget-head">
										<br>
                        				<h4 class="heading list glyphicon glyphicon-user"><i> </i>Profile</h4>
                    				</div>
                    				@endif
								<div class="panel panel-default col-md-7">

								  	<div class="panel-body">

								  		@if(isset($user))
								  			{{ Form::model($user, array('action' => array('UsersController@update', $user->slug), 'method' => 'PUT','files' => true)) }}
								  		@else
									  		{{Form::open(array('action' => 'UsersController@store', 'class' => 'form-signin','files' => true))}}
								  		@endif
								  		<!--<form role="form" action="index.html?lang=en"> -->
								  			@if(Auth::check())
									  		<h4> Hi {{ Auth::user()->first_name }}. Update your profile.</h4>
									  		@else

									  		<h4> Welcome. Please create your profile.</h4> 

									  		@endif
									  		<div class="form-group">
									    		{{ Form::label('first_name','First Name') }}
									    		{{ $errors->first('first_name', '<span style="color:red" class="help-block">:message</span>') }}
									    		{{ Form::text('first_name', Input::old('first_name') , ['class' => 'form-control', 'placeholder' => 'Your first name'])  }}
									  		</div>
									  		<div class="form-group">
									  			{{ Form::label('last_name','Last Name') }}
									    		{{ $errors->first('last_name', '<span style="color:red" class="help-block">:message</span>') }}
									    		{{ Form::text('last_name', Input::old('last_name') , ['class' => 'form-control', 'placeholder' => 'Your last name'])  }}
									  		</div>
								  	  		<div class="form-group">
									    		{{ Form::label('email','Email Address') }}
									    		{{ $errors->first('email', '<span style="color:red" class="help-block">:message</span>') }}
									    		{{ Form::email('email', Input::old('email') , ['class' => 'form-control', 'placeholder' => 'Enter Email'])  }}
									  		</div>
									  		@if(Auth::guest())
										  		<div class="form-group">
										    		<label for="password">Password</label>
										    		{{ $errors->first('password', '<span style="color:red" class="help-block">:message</span>') }}
										    		<input name="password" type="password" class="form-control" id="password" placeholder="Password" >
										  		</div>
									    		<div class="form-group">
										    		<label for="confirm_password">Confirm Password</label>
										    		<input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword2" placeholder="Retype Password">
										  		</div>
									  		@else
										  		<div class="form-group pass_btn">
										  			<a class="btn btn-default change_pass">Change Password</a>
										  		</div>
										  		<div class="form-group pass">
										    		<label for="password">New Password</label>
										    		{{ $errors->first('password', '<span style="color:red" class="help-block">:message</span>') }}
										    		<input name="password" type="password" class="form-control" id="password" value=<?= $user->password ?> >
										  		</div>
									    		<div class="form-group pass">
										    		<label for="confirm_password">Confirm Password</label>
										    		<input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword2" value=<?= $user->password ?>>
										  		</div>
										  	@endif

									  		<div class="form-group">
									    			{{ Form::label('country','Country') }}
									    			{{ $errors->first('country', '<span style="color:red" class="help-block">:message</span>') }}

													<select name ="country" class="form-control bfh-countries" data-country="US"><option value=""></option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CI">Côte d'Ivoire</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CD">Democratic Republic of the Congo</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FO">Faeroe Islands</option><option value="FK">Falkland Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="MK">Former Yugoslav Republic of Macedonia</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and Mc Donald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Marianas</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="SH">Saint Helena</option><option value="PM">St. Pierre and Miquelon</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="BS">The Bahamas</option><option value="GM">The Gambia</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="VI">US Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option selected="selected" value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
									  		</div>
									  		<div class="form-group">
									    		{{ Form::label('zip','Zipcode') }}
									    		{{ $errors->first('zip', '<span style="color:red" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">:message</span>') }}
									    		{{ Form::text('zip', Input::old('zip') , ['class' => 'form-control', 'placeholder' => 'Zipcode'])  }}
									        </div>
									        @if(Auth::guest())
										  		<div class="form-group">
										    		{{ $errors->first('slug', '<span style="color:red" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">:message</span>') }}
										    		{{ Form::label('slug','URL: diversitythread.com/users/') }}
										    		{{ Form::text('slug', Input::old('slug') , ['class' => 'form-control', 'placeholder' => 'Type Extension Here'])  }}
										        </div>	
									        @endif								        
									  		<div class="form-group">
									    		<label for="status">I am currently:</label>
									    		{{ $errors->first('status', '<span style="color:red" class="help-block">:message</span>') }}
									    		<div class="row">
												  <div class="col-lg-6">
												    <div class="input-group">
												        <input type="radio" name="status" value="Employed" <?= ((isset($user->status)) && ($user->status == "Employed")) ? 'checked' : '' ?>>Employed<br>
												        <input type="radio" name="status" value="Job Seeker" <?= ((isset($user->status)) && ($user->status == "Job Seeker")) ? 'checked' : '' ?>>Job Seeker<br>
												        <input type="radio" name="status" value="Student" <?= ((isset($user->status)) && ($user->status == "Student")) ? 'checked' : '' ?>>Student<br>
												    </div>
												@if(Auth::guest())
											    	<div class="form-group">
														<div class="tab-pane" id="tab5">
															<div>
																{{ Form::label('image', 'Upload an Image of Yourself') }}
																{{ Form::file('image') }}
															</div><br>
														</div>
													</div>
												@else
											  		<div class="form-group pic_btn">
											  			<a class="btn btn-default change_pic">Change Pofile Image</a>
											  		</div>												
											    	<div class="form-group pic">
														<div class="tab-pane" id="tab5">
															<div>
																{{ Form::label('image', 'Upload an Image of Yourself') }}
																{{ Form::file('image') }}
															</div><br>
														</div>
													</div>												
												@endif
											    </div><!-- /input-group -->
											  </div><!-- /.col-lg-6 -->
											</div><!-- /.row -->
											@if(Auth::check())
												<button type="submit" class="btn btn-primary">Save Changes</button>
											@else
												<button type="submit" class="btn btn-primary">Create Account</button>
											@endif

										{{ Form::close() }}
							  		</div>
									  		
								
								</div>
								<div style="margin-left: 40px" class="col-md-3">

								  	<div>
								  		<!--<form role="form" action="index.html?lang=en"> -->
								  		
					    			@if(Auth::check())
							  		<table>
							  				<tr style=" height: 14px; padding-bottom: 10px;"><strong>Lets build your profile!</strong></tr>

								  				<tr><a style=" padding-left: 10px; text-align: left; height: 50px" class=" btn btn-default btn-sm btn-block" href="{{ action('UsersController@edit', Auth::user()->slug)}}"><strong><h4 style="color: #3498db">1.Personal</h4></a></strong></tr>
								  				<tr><a style=" padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('SkillsController@edit', Auth::user()->slug)}}"><strong><h4>2. Skills</h4></a></strong></tr>
								    			<tr><a style="padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('SchoolsController@edit', Auth::user()->slug)}}"><strong><h4>3. Education</h4></a></strong></tr>
								    			<tr><a style="padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('JobsController@edit', Auth::user()->slug)}}"><strong><h4>4. Experience</h4></a></strong></tr>
								    			<tr><a style="padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('AssociationsController@edit', Auth::user()->slug)}}"><strong><h4>5. Associations</h4></a></strong></tr>
								    			<tr><a style="padding-left: 10px; text-align: left; height: 50px;" class=" btn btn-default btn-sm btn-block" href="{{ action('UsersController@show', Auth::user()->slug)}}"><strong><h4>See your Profile</h4></a></strong></tr>	
								    			<tr style="padding-bottom: 10px;"><strong><a href="{{ action('UsersController@show', Auth::user()->slug)}}">Finish later ></a></strong></tr>
							    	</table>
					    			@endif


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

<script>
	$('.pass').hide();


	$('.change_pass').on("click",function(){
		console.log('This works.');
		$('.pass_btn').fadeOut(1000);
		$('.pass').fadeIn(1000);
	});

	$('.pic').hide();


	$('.change_pic').on("click",function(){
		console.log('This works.');
		$('.pic_btn').fadeOut(1000);
		$('.pic').fadeIn(1000);
	});
</script>
@stop