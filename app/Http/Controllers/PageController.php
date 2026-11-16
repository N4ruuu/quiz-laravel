<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * Homepage. $nama adalah variabel yang diketik otomatis pada sapaan "Welcome".
     */
    public function home(): View
    {
        $nama = config('company.profile.name');

        return view('pages.home', [
            'nama' => $nama,
        ]);
    }

    /**
     * About. Data diri dikirim sebagai array lalu di-loop memakai @while di view.
     */
    public function about(): View
    {
        return view('pages.about', [
            'biodata' => config('company.biodata'),
            'skills'  => config('company.skills'),
        ]);
    }

    /**
     * Gallery. Foto dikirim sebagai array lalu di-loop memakai @foreach di view.
     */
    public function gallery(): View
    {
        $photos = config('company.gallery');

        return view('pages.gallery', [
            'photos'     => $photos,
            'categories' => collect($photos)->pluck('category')->unique(),
        ]);
    }
}
