@php
    $pages = ['Home' => route('home'), 'About' => route('about'), 'Gallery' => route('gallery')];
@endphp
<footer>
    <div class="container">
        <div class="foot-grid">
            <div>
                <a href="{{ route('home') }}" class="brand">
                    <span class="brand-mark">@include('partials.logo')</span>
                    {{ $company['name'] }}
                </a>
                <p>{{ $company['tagline'] }}. {{ $company['desc'] }}</p>
                <div class="socials">
                    @foreach (config('company.socials') as $name => $url)
                        <a href="{{ $url }}" aria-label="{{ ucfirst($name) }}"><x-icon :name="$name" /></a>
                    @endforeach
                </div>
            </div>
            <div>
                <h4>Halaman</h4>
                <ul>
                    @foreach ($pages as $label => $url)
                        <li><a href="{{ $url }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4>Kontak</h4>
                <ul>
                    <li><a href="mailto:{{ $company['email'] }}">{{ $company['email'] }}</a></li>
                    <li><a href="{{ $waLink }}" target="_blank" rel="noopener">{{ $company['phone'] }}</a></li>
                    <li><span>{{ $company['address'] }}</span></li>
                </ul>
            </div>
        </div>
        <div class="foot-bottom">
            <span>© {{ date('Y') }} {{ $company['name'] }}. All rights reserved.</span>
            <span>Dibuat dengan ♥ menggunakan Laravel</span>
        </div>
    </div>
</footer>
