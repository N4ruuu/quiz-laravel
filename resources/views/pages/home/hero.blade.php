{{-- $nama datang dari PageController@home. JavaScript (home.js) mengetiknya huruf demi huruf. --}}
<section class="hero" id="hero">
    <div class="blob b1"></div>
    <div class="blob b2"></div>
    <div class="blob b3"></div>
    <div class="container hero-grid">
        <div class="reveal left">
            <div class="badge"><b>HELLO</b> Selamat datang di website saya</div>
            <h1>
                Welcome, <br>
                <span class="grad name">{{ $nama }}</span>
            </h1>
            <p class="lead">{{ $company['tagline'] }}. {{ $company['desc'] }}</p>
            <div class="hero-actions">
                <a href="{{ route('about') }}" class="btn btn-primary">Tentang Saya <x-icon name="arrow" class="arrow" :stroke="2.4" /></a>
                <a href="{{ route('gallery') }}" class="btn btn-ghost"><x-icon name="image" :stroke="2.2" /> Lihat Galeri</a>
            </div>
        </div>

        <div class="hero-visual reveal right" style="--d:.15s">
            <div class="float-card fc1">
                <span class="ic"><x-icon name="sparkle" :stroke="2.2" /></span>
                <div><b>Kreatif</b><small>Desain modern</small></div>
            </div>
            <div class="orb">
                <div class="ring r1"></div>
                <div class="ring r2"></div>
                <div class="orb-core">
    <span class="initial">{{ mb_strtoupper(mb_substr($nama, 0, 1)) }}</span>
    <img src="{{ asset($company['photo']) }}" alt="Foto {{ $nama }}" onerror="this.remove()">
</div>
            </div>
            <div class="float-card fc2">
                <span class="ic"><x-icon name="code" :stroke="2.2" /></span>
                <div><b>Kode Rapi</b><small>Terstruktur & cepat</small></div>
            </div>
        </div>
    </div>
</section>
