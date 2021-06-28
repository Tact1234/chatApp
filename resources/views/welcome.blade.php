<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
				@if(app('env')=='local')
					<script src="{{ asset('js/app.js') }}" defer></script>
					<link href="{{ asset('css/app.css') }}" rel="stylesheet">
				@endif
				@if(app('env')=='production')
					<script src="{{ secure_asset('js/app.js') }}" defer></script>
					<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
				@endif
        <title>chatApp</title>
    </head>
    <body>
				<div id="app"></div>
    </body>
</html>
