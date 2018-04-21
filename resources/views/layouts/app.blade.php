<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Latihan')}}</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">  
    </head>
    <body>
    	@include('include.navbar')
    	<div class="container" style="margin-top: 80px;">
            @include('include.messages')
    		@yield('content')
    	</div>

    	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
