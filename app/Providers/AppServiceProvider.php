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
        // Data yang dibutuhkan layout, navbar, footer, dan beberapa halaman
        $company = config('company.profile');

        View::share('company', $company);
        View::share('waLink', 'https://wa.me/' . $company['whatsapp']);
    }
}
