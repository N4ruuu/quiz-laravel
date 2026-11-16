{{-- Pemakaian: <x-icon name="arrow" class="arrow" :stroke="2.4" />  atau  <x-icon :d="$path" /> untuk path khusus --}}
@props(['name' => null, 'd' => null, 'stroke' => 2])
@php
    $icons = [
        'arrow'         => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'arrow-up'      => '<path d="M12 19V5M5 12l7-7 7 7"/>',
        'chevron-left'  => '<path d="M15 18l-6-6 6-6"/>',
        'chevron-right' => '<path d="M9 18l6-6-6-6"/>',
        'close'         => '<path d="M18 6L6 18M6 6l12 12"/>',
        'check'         => '<path d="M20 6L9 17l-5-5"/>',
        'user'          => '<circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"/>',
        'image'         => '<rect x="3" y="4" width="18" height="16" rx="3"/><circle cx="9" cy="10" r="2"/><path d="M21 16l-5-5-9 9"/>',
        'code'          => '<path d="M8 8l-5 4 5 4M16 8l5 4-5 4M14 5l-4 14"/>',
        'heart'         => '<path d="M12 21s-8-5.2-8-11a4.6 4.6 0 0 1 8-3 4.6 4.6 0 0 1 8 3c0 5.800-8 11-8 11z"/>',
        'mail'          => '<rect x="3" y="5" width="18" height="14" rx="3"/><path d="M3 8l9 6 9-6"/>',
        'phone'         => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/>',
        'pin'           => '<path d="M12 22s8-6.5 8-12a8 8 0 0 0-16 0c0 5.500 8 12 8 12z"/><circle cx="12" cy="10" r="3"/>',
        'sparkle'       => '<path d="M12 3l1.8 5.200L19 10l-5.200 1.800L12 17l-1.800-5.200L5 10l5.200-1.800zM19 16l.8 2.200L22 19l-2.200.8L19 22l-.8-2.200L16 19l2.200-.8z"/>',
        'instagram'     => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>',
        // ikon brand (terisi)
        'facebook'      => '<path d="M14 8V6.5c0-.7.3-1 1-1h2V2h-3c-3 0-4.5 1.8-4.5 4.5V8H7v3.5h2.5V22H14V11.5h2.8L17.5 8z"/>',
        'linkedin'      => '<path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9.75h4V21H3zM9.75 9.75h3.8v1.6h.06c.53-1 1.82-2.05 3.75-2.05 4 0 4.74 2.6 4.74 6V21h-4v-4.9c0-1.2 0-2.7-1.7-2.7-1.7 0-1.95 1.3-1.95 2.6V21h-4z"/>',
        'youtube'       => '<path d="M21.6 7.2a2.5 2.5 0 0 0-1.8-1.8C18.2 5 12 5 12 5s-6.2 0-7.8.4A2.5 2.5 0 0 0 2.4 7.2C2 8.8 2 12 2 12s0 3.2.4 4.8a2.5 2.5 0 0 0 1.8 1.8C5.8 19 12 19 12 19s6.2 0 7.8-.4a2.5 2.5 0 0 0 1.8-1.8c.4-1.6.4-4.8.4-4.8s0-3.2-.4-4.8zM10 15V9l5.2 3z"/>',
        'whatsapp'      => '<path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.2 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.3-.7-2.8-1.2-4.6-4-4.7-4.2-.1-.2-1.1-1.5-1.1-2.8s.7-2 1-2.3c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.9 2.1c.1.2.1.4 0 .5l-.4.6-.4.4c-.1.1-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.4 2.4 1.5.3.1.5.1.6-.1l.9-1.1c.2-.3.4-.2.6-.1l2 1c.3.1.5.2.5.3.1.2.1.8-.1 1.4z"/>',
    ];
    $filled = in_array($name, ['facebook', 'linkedin', 'youtube', 'whatsapp'], true);
    $body = $d ? '<path d="' . e($d) . '"/>' : ($icons[$name] ?? '');
@endphp
<svg {{ $attributes->merge(['viewBox' => '0 0 24 24']) }} @if ($filled) fill="currentColor" @else fill="none" stroke="currentColor" stroke-width="{{ $stroke }}" stroke-linecap="round" stroke-linejoin="round" @endif aria-hidden="true">{!! $body !!}</svg>
