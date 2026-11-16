@php($links = ['home' => 'Home', 'about' => 'About', 'gallery' => 'Gallery'])
<header class="nav" id="nav">
    <div class="container nav-inner">
        <a href="{{ route('home') }}" class="brand" aria-label="{{ $company['name'] }} — Home">
            <span class="brand-mark">@include('partials.logo')</span>
            {{ $company['name'] }}
        </a>

        <nav class="nav-links" id="navLinks" aria-label="Menu utama">
            @foreach ($links as $route => $label)
                <a href="{{ route($route) }}" @class(['active' => request()->routeIs($route)])>{{ $label }}</a>
            @endforeach
        </nav>

        <div class="nav-cta">
            <a href="mailto:{{ $company['email'] }}" class="btn btn-primary">Hubungi Saya <x-icon name="arrow" class="arrow" :stroke="2.4" /></a>
            <button class="burger" id="burger" aria-label="Buka menu" aria-expanded="false" aria-controls="navLinks"><span></span></button>
        </div>
    </div>
</header>
<div class="scrim" id="scrim"></div>
