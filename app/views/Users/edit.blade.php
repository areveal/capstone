@extends('layouts.master')

@section('topscript')
	<title>Sign Up</title>	
@stop 
  
@section('content')
<body class=" loginWrapper">
	
	<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden ">

						
		
		

<div id="menu-right">
	<div>
		<button class="btn btn-inverse btn-xs btn-close" data-toggle="sidr-close" data-menu="menu-right"><i class="fa fa-times"></i></button>

		<div class="tab-content">
			<div class="tab-pane" id="chat-conversation">
				<ul>
					<li>
						<div class="innerAll"><button class="btn btn-primary" data-toggle="tab" data-target="#chat-list"><i class="fa fa-fw fa-user"></i> friends</button></div>
					</li>
					<li class="conversation innerAll">
						<!-- Media item -->
						<div class="media">
							<small class="author"><a href="#" title="" class="strong">Jane Doe</a></small>
							<div class="media-object pull-left"><img src="../assets/images/people/50/1.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote>
									<small class="date"><cite>just now</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, sit?</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
						<!-- Media item -->
						<div class="media primary right">
							<small class="author"><a href="#" title="" class="strong">John Doe</a></small>
							<div class="media-object pull-right"><img src="../assets/images/people/50/2.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote class="pull-right">
									<small class="date"><cite>15 seconds ago</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, molestiae!</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
						<!-- Media item -->
						<div class="media">
							<small class="author"><a href="#" title="" class="strong">Ricky</a></small>
							<div class="media-object pull-left"><img src="../assets/images/people/50/1.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote>
									<small class="date"><cite>5 minutes ago</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, distinctio!</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
					</li>
				</ul>
			</div>
			
			<div class="tab-pane active" id="chat-list">
				<div class="mixitup" id="mixitup-chat" data-show-default="mixit-chat-1" data-layout-mode="list" data-target-selector=".mix" data-filter-selector=".filter-chat">
					<ul>
						<li class="category">Groups</li>
						<li class="reset">
							<div class="innerLR">
								<ul>
									<li class="filter-chat" data-filter="mixit-chat-1"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-success"></span> Work Related</a></li>
									<li class="filter-chat" data-filter="mixit-chat-2"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-primary"></span> Very Important</a></li>
									<li class="filter-chat" data-filter="mixit-chat-3"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-info"></span> Friends &amp; Family</a></li>
								</ul>
							</div>
						</li>
						<li class="category border-bottom">Online</li>
						<li>
							
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/1.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Perpetua Inger</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/2.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Zoticus Axel</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/3.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Yun Ragna</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/4.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Victor Tacitus</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/5.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Arden Catharine</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/6.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Mihovil Govinda</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/7.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Mariya Hadya</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/8.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Tahir Benedikt</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/9.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Olayinka Kristin</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/10.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Danko Nikodim</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/11.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Zoja Aileas</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/12.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Alphonsus Braidy</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/13.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Helene Liana</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/14.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Sebastian Niklas</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/15.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Elvire Maya</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class=" mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/16.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Kerman Otakar</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
							
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>







		
		<!-- Content START -->
		<div id="content">
			
<div class="navbar hidden-print navbar-default box main" role="navigation">

	<div class="user-action user-action-btn-navbar pull-right border-left">
		<a href="#menu-right" class="btn btn-sm btn-navbar btn-open-right"><i class="fa fa-comments fa-2x"></i></a>
	</div>
	<div class="user-action user-action-btn-navbar pull-left">
		<a href="#menu" class="btn btn-sm btn-navbar btn-open-left"><i class="fa fa-bars fa-2x"></i></a>
	</div>

	<ul class="notifications pull-left hidden-xs">
		<li class="dropdown notif">
			<a href="" class="dropdown-toggle"  data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
			<ul class="dropdown-menu chat media-list">
				<li class="media">
			        <a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/15.jpg" alt="50x50" width="50"/></a>
					<div class="media-body">
			        	<span class="label label-default pull-right">5 min</span>
			            <h5 class="media-heading">Adrian D.</h5>
			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			        </div>
				</li>
		      	<li class="media">
		          	<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/16.jpg" alt="50x50" width="50"/></a>
					<div class="media-body">
			          	<span class="label label-default pull-right">2 days</span>
			            <h5 class="media-heading">Jane B.</h5>
			            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			        </div>
		        </li>
			    <li class="media">
		          	<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/17.jpg" alt="50x50" width="50"/></a>
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
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<span class="media margin-none">
					<span class="pull-left"><img src="../assets/images/people/35/16.jpg" alt="user" class="img-circle"></span>
					<span class="media-body">Bill <span class="caret"></span></span>
				</span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="about_1.html?lang=en" >About</a></li>
				<li><a href="messages.html?lang=en">Messages</a></li>
				<li><a href="timeline_3.html?lang=en">Profile</a></li>
				<li><a href="login.html?lang=en">Logout</a></li>
		    </ul>
		</div>
	</div>
	<div class="input-group hidden-xs pull-left">
	  	<span class="input-group-addon"><i class="icon-search"></i></span>
	  	<input type="text" class="form-control" placeholder="Search a friend"/>
	</div>
</div>
	


			<!-- <div class="layout-app">  -->
			<!-- row-app -->
<div class="row row-app">

	<!-- col -->
	

		<!-- col-separator.box -->
		<div class="col-separator col-unscrollable box">
			
			<!-- col-table -->
			<div class="col-table">
				
				<h4 class="innerAll margin-none border-bottom text-center bg-primary"><i class="fa fa-pencil"></i> Build a Profile</h4>

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
								  		{{Form::open(array('action' => 'UsersController@store', 'class' => 'form-signin', 'role' => 'form'))}}
								  		<!--<form role="form" action="index.html?lang=en"> -->
									  		<div class="form-group">
									    			<label for="country">Country</label>
									    		<form class="example form-inline">
													<select class="form-control bfh-countries" data-country="US"><option value=""></option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CI">Côte d'Ivoire</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CD">Democratic Republic of the Congo</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FO">Faeroe Islands</option><option value="FK">Falkland Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="MK">Former Yugoslav Republic of Macedonia</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and Mc Donald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Marianas</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="SH">Saint Helena</option><option value="PM">St. Pierre and Miquelon</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="BS">The Bahamas</option><option value="GM">The Gambia</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="VI">US Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
												</form>
									  		</div>									  		
									  		<div class="form-group">
									    		<label for="zip">Zip</label>
									    		<input name="zip" type="text" class="form-control" id="zip" placeholder="Your zipcode" value="{{Input::old('zip')}}">
									  		</div>
									  		<div class="form-group">
									    		<label for="employed">I am currently:</label>
									    		<div class="row">
												  <div class="col-lg-6">
												    <div class="input-group">
												      <p><span class="">
												        <input type="radio">
												      </span>
												      Employed
												      <span class="">
												        <input type="radio">
												      </span>
												      Job Seeker
												      <span class="">
												        <input type="radio">
												      </span>
												      Student</p>
												    </div><!-- /input-group -->
												  </div><!-- /.col-lg-6 -->
												</div><!-- /.row -->
									  		</div>
									  		<div class="form-group">
									    		<label for="jobs">Job Title</label>
									    		<input name="jobs" type="text" class="form-control" id="jobs" placeholder="Your job title" value="{{Input::old('last_name')}}">
									  		</div>
									  		<div class="form-group">
									    		<label for="company">Company</label>
									    		<input name="company" type="text" class="form-control" id="company" placeholder="Company name" value="{{Input::old('last_name')}}">
									  		</div>
									  		<button type="submit" class="btn btn-primary btn-block">Create my profile</button>
										{{Form::close()}}
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
<!-- // END first sign up screen-->
<div class="row row-app">

	<!-- col -->
	

		<!-- col-separator.box -->
		<div class="col-separator col-unscrollable box">
			
			<!-- col-table -->
			<div class="col-table">
				
				<h4 class="innerAll margin-none border-bottom text-center bg-primary"><i class="fa fa-pencil"></i> Build a Profile</h4>

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
								  		{{Form::open(array('action' => 'UsersController@store', 'class' => 'form-signin', 'role' => 'form'))}}
								  		<!--<form role="form" action="index.html?lang=en"> -->
								  		
									  		<div class="form-group">
									    		<label for="employed">Which diversity groups do you associate with?</label>
									    		<div class="row">
												  <div class="col-lg-6">
												    <div class="input-group">
												      <p>
												      <span class="">
												        <input type="checkbox">
												      </span>
												      Women</p><br>
												      <p>
												      	<span class="">
												        <input type="checkbox">
												      </span>
												      African American</p><br>
												      <p>
												      	<span class="">
												        <input type="checkbox">
												      </span>
												      Latino American</p><br>
												      <p><span class="">
												        <input type="checkbox">
												      </span>
												      Veteran</p><br>
												      <p><span class="">
												        <input type="checkbox">
												      </span>
												      Disabled</p><br>
												    </div><!-- /input-group -->
												    <button type="submit" class="btn btn-primary btn-block">Add associations</button>
												  </div><!-- /.col-lg-6 -->
												</div><!-- /.row -->
									  		</div>				  		
										{{Form::close()}}
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