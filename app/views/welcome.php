@extends('template')
<form action="{{action('HomeController@post')}}" method="POST">
	<input type="submit" value="Submit" class="btn btn-primary">
</form>