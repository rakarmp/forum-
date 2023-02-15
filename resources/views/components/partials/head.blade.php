<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Social Meta --}}
<x-social-meta title="Hello World" description="Blade components are awesome!" image="http://example.com/social.jpg" />

{{-- Title --}}
<title>{{ config('app.name', 'Forum') }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/choices.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Icon -->
<link rel="icon" href="{{ asset('img/logo/logo.png') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

{{-- Livewire --}}
<livewire:styles />

{{-- <!-- Include base CSS (optional) -->
<link rel="stylesheet" href="public/assets/styles/base.min.css" />
<!-- Include Choices CSS -->
<link rel="stylesheet" href="public/assets/styles/choices.min.css" />
<!-- Include Choices JavaScript -->
<script src="/public/assets/scripts/choices.min.js"></script> --}}

{{-- Blade UI Kit --}}
@bukStyles(true)
