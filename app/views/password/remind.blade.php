
@extends('layouts.bootstrap')

@section('topscript')
<style>
	.navbar
	{
  		background: #25ad9f;
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
<title>Password Reminder Page</title>

@section('content')
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1 remote-nav" role="banner">
		<div id="top-header">
			<div class"wrapper">
  			<div class="container ">
			  	<a href="{{ action('UsersController@create') }}">	
			    Inclusion
				</a>
  			</div>
  		</div>
  	</div>
</nav>
</div>

<br>
<div class="container"><br>
	<h2>Password Reset</h2>
	<form action="{{ action('RemindersController@postRemind') }}" method="POST">
	   	 <label for="user">Email</label>  
	   	 <input type="email" name="email">
	     <input type="submit" value="Send Reminder">
	</form>
</div>
@stop
