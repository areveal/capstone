@extends('layouts.master')


@section('section')
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			To reset your password, complete this form: {{ URL::to('password/reset', array($token)) }}.<br/>
			This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.
		</div>
		<form action="{{ action('RemindersController@postRemind') }}" method="POST">
   		 	<input type="email" name="email">
    		<input type="submit" value="Send Reminder">
		</form>
	</body>
</html>
@stop
