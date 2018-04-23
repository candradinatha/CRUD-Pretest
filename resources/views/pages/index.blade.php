@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
	  	<h1 class="display-4">Hello, world!</h1>
	  	<p class="lead">Welcome to the Home Page</p>
	  	<hr class="my-4">
	  	<p class="lead">
	    	<a class="btn btn-outline-secondary btn-lg" href="{{ route('login') }}">{{ __('Login') }}</a>
	    	<a class="btn btn-outline-secondary btn-lg" href="{{ route('register') }}">{{ __('Register') }}</a>
	  	</p>
	</div>
@endsection
