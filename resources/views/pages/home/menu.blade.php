<section id="menu">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Menu Page</span>
            <h2>Jelajahi Halaman Saya</h2>
            <p>Pilih salah satu halaman di bawah ini untuk mengenal saya lebih jauh.</p>
        </div>

        <div class="menu-grid">
            @foreach (config('company.menu') as $i => $m)
                <a href="{{ route($m['route']) }}" class="menu-card reveal" style="--d: {{ $i * 0.12 }}s">
                    <span class="num">0{{ $i + 1 }}</span>
                    <span class="ic"><x-icon :name="$m['icon']" :stroke="1.8" /></span>
                    <h3>{{ $m['title'] }}</h3>
                    <p>{{ $m['text'] }}</p>
                    <span class="go">Buka halaman <x-icon name="arrow" class="arrow" :stroke="2.4" /></span>
                </a>
            @endforeach
        </div>
    </div>
</section>
