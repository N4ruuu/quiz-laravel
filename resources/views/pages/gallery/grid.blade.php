{{-- $photos dan $categories dikirim dari PageController@gallery. Foto di-loop dengan @foreach. --}}
<section id="gallery" class="gallery-section">
    <div class="container">
        <div class="filters reveal" role="tablist" aria-label="Filter galeri">
            <button class="filter active" data-filter="all" role="tab">Semua</button>
            @foreach ($categories as $category)
                <button class="filter" data-filter="{{ $category }}" role="tab">{{ $category }}</button>
            @endforeach
        </div>

        <div class="masonry" id="photoGrid">
            @foreach ($photos as $i => $p)
                <figure class="photo {{ $p['class'] }} reveal" data-cat="{{ $p['category'] }}" style="--d: {{ ($i % 4) * 0.08 }}s" tabindex="0"
                        data-src="{{ asset('images/gallery/' . $p['file']) }}" data-title="{{ $p['title'] }}">
                    <img src="{{ asset('images/gallery/' . $p['file']) }}" alt="{{ $p['title'] }}" loading="lazy">
                    <figcaption><small>{{ $p['category'] }}</small><h3>{{ $p['title'] }}</h3></figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>
