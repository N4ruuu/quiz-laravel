@php($words = ['Laravel', 'PHP', 'JavaScript', 'Blade', 'CSS Animation', 'Responsive', 'Clean Code', 'UI/UX'])
<div class="marquee" aria-hidden="true">
    <div class="marquee-track">
        {{-- Daftar ditulis dua kali agar putarannya mulus tanpa jeda --}}
        @for ($r = 0; $r < 2; $r++)
            @foreach ($words as $w)
                <span>{{ $w }}</span><i>✦</i>
            @endforeach
        @endfor
    </div>
</div>
