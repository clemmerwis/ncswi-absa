<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ABSA - {{ $meta_title ?? 'Surgical Assistants for the 21st Century' }}</title>
	<meta name="description" content="Training and Certifying surgical assistants for the 21st century.">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/rsz_1rsz_absa-logo-34height.png') }}">
	
    {{ $linksbs }}
	
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="{{ $page ?? 'page' }}">
    @include('partials.header')

    {{ $slot }}

    @include('partials.sponsorbar')

    @include('partials.footer')

    {{ $linksjs }}
</body>

</html>
