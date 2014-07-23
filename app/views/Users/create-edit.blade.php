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
	</style>
@stop 
  
@section('content')
<body class=" loginWrapper">

	@if(Auth::check())
		<div class="navbar hidden-print box main" role="navigation">
	        <div class="user-action pull-left menu-right-hidden-xs menu-left-hidden-xs border-left">
	            <div class="dropdown username pull-left">
	                <span class="dropdown-toggle" data-toggle="dropdown">
	                    <span class="media margin-none">
	                    <span class="pull-left"><img src="{{ Auth::user()->img_path }}" alt="user" class="img-circle"></span>
	                    <span class="media-body">{{ Auth::user()->first_name }} <span class="caret"></span></span>
	                </span>
	                </span>
	                <ul class="dropdown-menu">
	                    <li><a href="{{ action('UsersController@edit', Auth::user()->id)}} ">Edit Profile</a></li>
	                    <li><a href="{{ action('SkillsController@edit', Auth::user()->id)}} ">Edit Skills</a></li>
	                    <li><a href="{{ action('AssociationsController@edit', Auth::user()->id)}} ">Edit Associations</a></li>
	                    <li><a href="{{ action('JobsController@edit', Auth::user()->id)}} ">Edit Experience</a></li>
	                    <li><a href="{{ action('SchoolsController@edit', Auth::user()->id)}} ">Edit Education</a></li>
	                    <li><a href="{{ action('UsersController@show', Auth::user()->id)}} ">Done Editing</a></li>
	                </ul>
	            </div>
	        </div>
	    </div>

    @endif
	
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
				
				@if(Auth::check())
					<h2 class="text-center" style="margin-top: 40px"><i class="fa fa-pencil"></i> Edit Your Profile</h2>
				@else
					<h2 class="innerAll margin-none border-bottom text-center bg-primary"><i class="fa fa-pencil"></i> Create a Profile</h2>
				@endif
				<!-- col-table-row -->
				<div class="col-table-row">

					<!-- col-app -->
					<div class="col-app col-unscrollable">

						<!-- col-app -->
						<div class="col-app">

							<div class="login">
								
								<div class="placeholder text-center"><i class="fa fa-pencil"></i></div>
								
								<div class="panel panel-default col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

								  	<div class="panel-body">

								  		@if(isset($user))
								  			{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT','files' => true)) }}
								  		@else
									  		{{Form::open(array('action' => 'UsersController@store', 'class' => 'form-signin','files' => true))}}
								  		@endif
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<h4> Welcome please create your profile.</h4>
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
									  		<div class="form-group">
									    		<label for="password">Password</label>
									    		{{ $errors->first('password', '<span style="color:red" class="help-block">:message</span>') }}
									    		<input name="password" type="password" class="form-control" id="password" placeholder="Password" >
									  		</div>
								    		<div class="form-group">
									    		<label for="confirm_password">Confirm Password</label>
									    		<input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword2" placeholder="Retype Password">
									  		</div>
									  		<div class="form-group">
									    			{{ Form::label('country','Country') }}
									    			{{ $errors->first('country', '<span style="color:red" class="help-block">:message</span>') }}
													<select name ="country" class="form-control bfh-countries" data-country="US"><option value=""></option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CI">Côte d'Ivoire</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CD">Democratic Republic of the Congo</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FO">Faeroe Islands</option><option value="FK">Falkland Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="MK">Former Yugoslav Republic of Macedonia</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and Mc Donald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Marianas</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="SH">Saint Helena</option><option value="PM">St. Pierre and Miquelon</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="BS">The Bahamas</option><option value="GM">The Gambia</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="VI">US Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option selected="selected" value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
									  		</div>
									  		<div class="form-group">
									    		{{ Form::label('state','State') }}
									    		{{ $errors->first('state', '<span style="color:red" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">:message</span>') }}
										        <select name="state" class="form-control"> <option value="AL">AL</option> <option value="AK">AK</option> <option value="AZ">AZ</option> <option value="AR">AR</option> <option value="CA">CA</option> <option value="CO">CO</option> <option value="CT">CT</option> <option value="DE">DE</option> <option value="DC">DC</option> <option value="FL">FL</option> <option value="GA">GA</option> <option value="HI">HI</option> <option value="ID">ID</option> <option value="IL">IL</option> <option value="IN">IN</option> <option value="IA">IA</option> <option value="KS">KS</option> <option value="KY">KY</option> <option value="LA">LA</option> <option value="ME">ME</option> <option value="MD">MD</option> <option value="MA">MA</option> <option value="MI">MI</option> <option value="MN">MN</option> <option value="MS">MS</option> <option value="MO">MO</option> <option value="MT">MT</option> <option value="NE">NE</option> <option value="NV">NV</option> <option value="NH">NH</option> <option value="NJ">NJ</option> <option value="NM">NM</option> <option value="NY">NY</option> <option value="NC">NC</option> <option value="ND">ND</option> <option value="OH">OH</option> <option value="OK">OK</option> <option value="OR">OR</option> <option value="PA">PA</option> <option value="RI">RI</option> <option value="SC">SC</option> <option value="SD">SD</option> <option value="TN">TN</option> <option value="TX">TX</option> <option value="UT">UT</option> <option value="VT">VT</option> <option value="VA">VA</option> <option value="WA">WA</option> <option value="WV">WV</option> <option value="WI">WI</option> <option value="WY">WY</option>
										        </select>
									        </div>
									  		<div class="form-group">
									    		{{ Form::label('city','City') }}
									    		{{ $errors->first('city', '<span style="color:red" class="help-block">:message</span>') }}
									    		{{ Form::text('city', Input::old('city') , ['class' => 'form-control', 'placeholder' => 'Your city'])  }}
									  		</div>
									  		<div class="form-group">
									    		<label for="status">I am currently:</label>
									    		{{ $errors->first('status', '<span style="color:red" class="help-block">:message</span>') }}
									    		<div class="row">
												  <div class="col-lg-6">
												    <div class="input-group">
												        <input type="radio" name="status" value="Employed">Employed<br>
												        <input type="radio" name="status" value="Job Seeker">Job Seeker<br>
												        <input type="radio" name="status" value="Student">Student<br>
												    </div>
											    	<div class="form-group">
														<div class="tab-pane" id="tab5">
															<div>
																{{ Form::label('image', 'Upload an Image of Yourself') }}
																{{ Form::file('image') }}
															</div><br>
														</div>
													</div>
											    </div><!-- /input-group -->
											  </div><!-- /.col-lg-6 -->
											</div><!-- /.row -->
											@if(Auth::check())
												<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
											@else
												<button type="submit" class="btn btn-primary btn-block">Create Account</button>
											@endif

										{{ Form::close() }}
							  		</div>
									  		
								
								</div>
								<div class="clearfix"></div>					

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