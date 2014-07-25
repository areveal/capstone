
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

<div class="container"><br>
	<h2>Password Reset</h2>
	<form action="{{ action('RemindersController@postRemind') }}" method="POST">
	   	 <label for="user">Email</label>  
	   	 <input type="email" name="email">
	     <input type="submit" value="Send Reminder">
	</form>
</div>
@stop
