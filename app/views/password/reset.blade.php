@extends('layouts.bootstrap')

@section('topscript')
<style>
	.navbar
	{
  		background: #3498db;
	}
	.body 
	{ 
		padding-top: 70px;
	 }
	 .form 
	 {
	 	padding-top: 35px; 
	 }
</style>
<title>Reset Password Page</title>
@stop

@section('content')
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1 remote-nav" role="banner">
		<div id="top-header">
			<div class"wrapper">
	  			<div class="container ">
				  	<a href="" class="logo" id="li-logo">		
				    Inclusion
					</a>
	  			</div>
	  		</div>
  		</div>
  	</div>
</nav>
</div>
<div class="body">
@if (Session::has('status'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>

        {{{ Session::get('status') }}}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>

        {{{ Session::get('error') }}}
    </div>
@endif
</div>
<div class="container">
	<div class="body">Enter the following information to reset your password.</div>	  
	<div class="form position: relative">
	    {{ Form::open(array('action' => 'RemindersController@postReset', 'class' => 'form-horizontal')) }}
			<input type="hidden" name="token" value="{{ $token }}"></input>					
		    
		    <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-6">
			    	<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>
			
			<div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
			    <div class="col-sm-6">
				    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>
			
			<div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Confirm New Password</label>
			    <div class="col-sm-6">
				    <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>
			
			<div class="form-group">
				 <div class="col-sm-offset-2 col-sm-10">
				     <button type="submit" class="btn btn-default">Login</button>
				</div>
			</div>
		{{ Form::close() }}
	</div>
	<script>
		$(".alert").fadeOut(2000);
	</script>
</div>
