<?php

/*
|--------------------------------------------------------------------------
| Isi website — ubah nama, data diri, menu, dan galeri HANYA di sini
|--------------------------------------------------------------------------
*/

return [

    // Dipakai di <title>, navbar, footer, dan sapaan di homepage.
    'profile' => [
        'name'     => 'Yoga',                       // <- variabel nama yang diketik di homepage
        'tagline'  => 'Web Developer & Creative Designer',
        'desc'     => 'Website pribadi yang rapi, modern, dan ringan — dibuat dengan Laravel.',
        'email'    => 'hello@yoga.id',
        'phone'    => '+62 812-3456-7890',
        'whatsapp' => '6281234567890',              // format internasional tanpa + dan spasi
        'address'  => 'Denpasar, Bali, Indonesia',
        'founded'  => 2018,                         // tahun mulai berkarya
        'photo' => 'images/profile.jpg',
    ],

    // key = nama ikon di resources/views/components/icon.blade.php
    'socials' => [
        'instagram' => '#',
        'linkedin'  => '#',
        'youtube'   => '#',
        'facebook'  => '#',
    ],

    // Kartu "menu page" di homepage. route = nama route di routes/web.php
    'menu' => [
        ['route' => 'about',   'icon' => 'user',  'title' => 'About',   'text' => 'Kenalan lebih dekat: data diri, keahlian, dan perjalanan saya.'],
        ['route' => 'gallery', 'icon' => 'image', 'title' => 'Gallery', 'text' => 'Kumpulan foto dan momen favorit yang saya abadikan.'],
    ],

    // Angka statistik di homepage (dianimasikan menghitung naik)
    'stats' => [
        ['value' => 6,   'suffix' => '+', 'label' => 'Tahun Pengalaman'],
        ['value' => 40,  'suffix' => '+', 'label' => 'Proyek Selesai'],
        ['value' => 12,  'suffix' => '',  'label' => 'Foto di Galeri'],
        ['value' => 100, 'suffix' => '%', 'label' => 'Semangat Belajar'],
    ],

    // Data diri — ditampilkan di halaman About memakai perulangan @while
    'biodata' => [
        ['label' => 'Nama Lengkap',   'value' => 'Komang Yoga Sri Krisna Jayanta',            'icon' => 'user'],
        ['label' => 'Profesi',        'value' => 'Web Developer & Designer',  'icon' => 'code'],
        ['label' => 'Tempat Tinggal', 'value' => 'Denpasar, Bali',            'icon' => 'pin'],
        ['label' => 'Email',          'value' => 'hello@yoga.id',             'icon' => 'mail'],
        ['label' => 'Telepon',        'value' => '+62 812-3456-7890',         'icon' => 'phone'],
        ['label' => 'Hobi',           'value' => 'Fotografi, Games, Ngopi', 'icon' => 'heart'],
    ],

    // Keahlian (persen = lebar bar animasi) — memakai perulangan @foreach
    'skills' => [
        ['name' => 'Laravel & PHP',    'percent' => 90],
        ['name' => 'HTML, CSS & JS',   'percent' => 85],
        ['name' => 'UI/UX Design',     'percent' => 75],
        ['name' => 'Fotografi',        'percent' => 70],
    ],

    'story' => 'Saya mulai belajar membuat website sejak 2018 dan jatuh cinta pada prosesnya: mengubah ide menjadi sesuatu yang bisa dilihat dan dipakai orang. Saya suka kode yang rapi, tampilan yang nyaman di mata, dan detail kecil yang membuat pengalaman terasa hidup.',

    // Galeri — ditampilkan memakai perulangan @foreach.
    // file  = nama file di public/images/gallery/ (ganti dengan foto Anda sendiri)
    // class = bentuk kartu di grid: '' | tall | wide
    'gallery' => [
        ['title' => 'Golden Hour',      'category' => 'Alam',  'file' => 'sunset.jpg',   'class' => 'tall'],
        ['title' => 'Puncak Pagi',      'category' => 'Alam',  'file' => 'mountain.jpg', 'class' => ''],
        ['title' => 'Pantai Tenang',    'category' => 'Alam',  'file' => 'beach.jpg',    'class' => 'wide'],
        ['title' => 'Malam Kota',       'category' => 'Kota',  'file' => 'city.jpg',     'class' => ''],
        ['title' => 'Hutan Berkabut',   'category' => 'Alam',  'file' => 'forest.jpg',   'class' => 'tall'],
        ['title' => 'Langit Senja',     'category' => 'Langit','file' => 'dusk.jpg',     'class' => ''],
        ['title' => 'Cahaya Bintang',   'category' => 'Langit','file' => 'night.jpg',    'class' => 'wide'],
        ['title' => 'Gurun Hangat',     'category' => 'Alam',  'file' => 'desert.jpg',   'class' => ''],
        ['title' => 'Atap Kota',        'category' => 'Kota',  'file' => 'rooftop.jpg',     'class' => ''],
        ['title' => 'Danau Cermin',     'category' => 'Alam',  'file' => 'lake.jpg',     'class' => ''],
        ['title' => 'Aurora',           'category' => 'Langit','file' => 'aurora.jpg',   'class' => ''],
        ['title' => 'Jalan Pulang',     'category' => 'Kota',  'file' => 'road.jpg',     'class' => ''],
    ],
];
