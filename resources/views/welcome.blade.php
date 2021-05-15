<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
				<script src="{{ asset('js/app.js') }}" defer></script>
				<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>chatApp</title>
    </head>
    <body>
				<div id="app"></div>
    </body>
</html>
