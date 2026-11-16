<section id="skills" class="alt">
    <div class="container skills-wrap">
        <div class="reveal left">
            <span class="eyebrow">Keahlian</span>
            <h2>Hal yang Saya Kuasai</h2>
            <p class="muted">Terus belajar dan berlatih setiap hari supaya hasil kerja makin baik.</p>
        </div>

        <div class="skill-list">
            @foreach ($skills as $i => $s)
                <div class="skill reveal right" style="--d: {{ $i * 0.1 }}s">
                    <div class="skill-top"><b>{{ $s['name'] }}</b><span>{{ $s['percent'] }}%</span></div>
                    <div class="bar"><i style="--w: {{ $s['percent'] }}%"></i></div>
                </div>
            @endforeach
        </div>
    </div>
</section>
