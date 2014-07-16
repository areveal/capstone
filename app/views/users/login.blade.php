@extends('layouts.master')
@section('topscript')
	<title>Log In</title>
	<style>
		#menu-right {
			position: relative;
			z-index: 0;
		}
	</style>
@stop						
		
@section('content')	

<div id="menu-right">
	<div class="row row-app">
		<div class="col-md-12">
			<div class="col-separator col-separator-first box col-unscrollable col-fs">
				<div class="col-table">
					<div class="col-table-row">
						<div class="col-app col-unscrollable tab-content">
							<div class="col-app lock-wrapper lock-bg-1 tab-pane active animated fadeIn" id="lock-1-1">
								<h3 class="text-white innerB text-center">Account Access</h3>
								<div class="lock-container">
									<div class="innerAll text-center">
										<img src="../assets//images/people/100/22.jpg" class="img-circle"/>
										{{ Form::open(['action' => 'HomeController@doLogin', 'class' => 'form-signin']) }}	
											<div class="innerLR">
												<input class="form-control text-center bg-gray" type="text" placeholder="Username" name="email">
												<input class="form-control text-center bg-gray" type="password" placeholder="Enter Password" name="password">
											</div>
											<div class="innerT">
												<button type="submit" class="btn btn-primary">Login <i class='fa fa-fw fa-unlock-alt'></i></button>
											</div>
										{{ Form::close() }}
											<a href="{{ action('RemindersController@getRemind') }}" class="btn margin-none">Forgot password?</a>
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

@stop


@yield('bottomscript')
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