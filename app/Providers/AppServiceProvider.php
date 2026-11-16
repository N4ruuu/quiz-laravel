<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

   public function boot(): void
{
    // Railway memakai HTTPS lewat proxy, jadi paksa semua link memakai https
    if (str_starts_with(config('app.url'), 'https://')) {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    // Data yang dibutuhkan layout, footer, dan beberapa halaman
    $company = config('company.profile');

    View::share('company', $company);
    View::share('waLink', 'https://wa.me/' . $company['whatsapp']);
}
}
