{{--
    Data diri memakai perulangan @while.
    $biodata dikirim dari PageController@about (isinya dari config/company.php).
--}}
<section id="biodata">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Data Diri</span>
            <h2>Sedikit Tentang Saya</h2>
        </div>

        <div class="bio-grid">
            @php($i = 0)
            @while ($i < count($biodata))
                <div class="bio-card reveal" style="--d: {{ $i * 0.08 }}s">
                    <span class="ic"><x-icon :name="$biodata[$i]['icon']" /></span>
                    <div>
                        <small>{{ $biodata[$i]['label'] }}</small>
                        <b>{{ $biodata[$i]['value'] }}</b>
                    </div>
                </div>
                @php($i++)
            @endwhile
        </div>
    </div>
</section>
