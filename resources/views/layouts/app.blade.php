<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="intro-lock">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@hasSection('title')@yield('title') — {{ $company['name'] }}@else{{ $company['name'] }} — {{ $company['tagline'] }}@endif</title>
    <meta name="description" content="{{ $company['desc'] }}">
    <meta name="theme-color" content="#6366f1">
    <meta property="og:title" content="{{ $company['name'] }}">
    <meta property="og:description" content="{{ $company['desc'] }}">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    {{-- Tanpa JavaScript, layar intro dan animasi reveal tidak boleh menyembunyikan halaman --}}
    <noscript><style>#loader{display:none}html.intro-lock,body.intro-lock{overflow:auto!important;height:auto}.reveal{opacity:1;transform:none}</style></noscript>
</head>
<body class="intro-lock">

@include('partials.loader')
<div class="progress" id="progress"></div>
@include('partials.navbar')

<main>
    @yield('content')
</main>

@include('partials.footer')
@include('partials.fab')

<script src="{{ asset('js/site.js') }}" defer></script>
@stack('scripts')
</body>
</html>
