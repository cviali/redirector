<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sitemap', function () {

    // buat halaman index utama, disini saya contohkan ada 4 halaman, home, course, event dan artikel
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/course'))
        ->add(Url::create('/artikel'));

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return "Sitemap berhasil diperbarui, <a href='/sitemap.xml'>Lihat sitemap</a>";
});
