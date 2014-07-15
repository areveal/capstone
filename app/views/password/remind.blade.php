@extends('layouts.master')

@section('content')
<!DOCTYPE>
<html>
 <head>
 	<title>Password Reminder</title>
 </head>

<form action="{{ action('RemindersController@postRemind') }}" method="POST">
    <input type="email" name="email">
    <input type="submit" value="Send Reminder">
</form>

</html>

@stop