# Website 3 Halaman (Laravel)

Halaman: **Home**, **About**, **Gallery** — struktur sama dengan project `aussie-company`.

## Menjalankan
```sh
composer install
php artisan serve
```
Buka http://localhost:8000 (jika `.env` belum ada: `cp .env.example .env && php artisan key:generate`).

## Struktur
```
config/company.php                  <- SEMUA isi website (nama, biodata, galeri, menu) ada di sini
routes/web.php                      <- 3 route bernama: home, about, gallery
app/Http/Controllers/PageController <- mengirim variabel ke view ($nama, $biodata, $photos)
app/Providers/AppServiceProvider    <- View::share($company, $waLink) untuk semua view
resources/views/
  layouts/app.blade.php             <- kerangka: memanggil navbar, footer, fab
  partials/                         <- navbar (header), footer, loader, logo, fab
  components/icon.blade.php         <- <x-icon name="..."/>
  pages/home.blade.php   + pages/home/    (hero, marquee, menu, stats)
  pages/about.blade.php  + pages/about/   (banner, biodata, skills)
  pages/gallery.blade.php + pages/gallery/ (banner, grid, lightbox)
public/css/site.css                 <- satu stylesheet
public/js/site.js, home.js, gallery.js
public/images/gallery/              <- foto galeri (ganti dengan foto sendiri)
```

## Yang diminta
- **Home**: header, menu page, "Welcome" mengetik nama dari variabel `$nama` (PageController@home), footer.
- **About**: data diri memakai `@while` (`pages/about/biodata.blade.php`), skills memakai `@foreach`.
- **Gallery**: foto memakai `@foreach` (`pages/gallery/grid.blade.php`).

## Ganti nama / foto
- Nama: `config/company.php` -> `profile.name`
- Foto: taruh file di `public/images/gallery/`, lalu ubah daftar `gallery` di config yang sama.
