@extends('layouts.bootstrap')

@section('topscript')
<title>Password Email Sent</title>
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
@stop

@section('content')
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

<div class="body">A link to reset your password has been sent to the email address you have provided.</div>

@stop