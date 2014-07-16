@extends('layouts.bootstrap')
@section('topscript')
<style>
	.navbar
	{
  		background: #0084b4;
	}
</style>
<title>Reset Password Page</title>
@stop

@section('content')
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    ...
  </div>
</nav>
<div class"wrapper">Enter the following information to reset your password.</div>
	<h2 class="logo-container">
		<a href="http://final-project.dev/" class="logo" id="li-logo">
		home page title
		</a>
	</h2>

<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1 remote-nav" role="banner">
<div id="top-header">
</div>

<form action="{{ action('RemindersController@postReset') }}" method="POST">
    <input type="hidden" name="token" value="{{ $token }}">
    <label for="user">Email</label> 
    <input type="email" name="email">
    <lable for="user">Password</label>
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
</form>
    <button type="submit" value="Reset Password">Send</button>

@stop