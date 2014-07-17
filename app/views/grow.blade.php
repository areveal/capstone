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
<title>Import Email Lists</title>
@stop

@section('content')
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1 remote-nav" role="banner">
		<div id="top-header">
			<div class"wrapper">
	  			<div class="container ">
				  	<a href="http://final-project.dev/create" class="logo" id="li-logo">		
				    Inclusion
					</a>
	  			</div>
	  		</div>
  		</div>
  	</div>
</nav>
<div class="container">
	<div class="body">Import your email contacts in csv format.</div>
	  <div class="col-md-3 col-md-6 col-md-3"></div>
		<div class="form position: relative">
			{{ Form::open(array('action' => 'HomeController@getContacts')) }}
			{{ Form::label('CSV File')}}
