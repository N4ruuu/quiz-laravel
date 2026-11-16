<section class="stats" id="stats">
    <div class="container">
        <div class="stats-grid">
            @foreach (config('company.stats') as $i => $s)
                <div class="stat reveal" style="--d: {{ $i * 0.1 }}s">
                    <strong data-count="{{ $s['value'] }}" data-suffix="{{ $s['suffix'] }}">0</strong>
                    <span>{{ $s['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
