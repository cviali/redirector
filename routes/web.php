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

    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/jonitogel'))
        ->add(Url::create('/obor138'))
        ->add(Url::create('/bgibola'))
        ->add(Url::create('/kaisar888'))
        ->add(Url::create('/mas4d'))
        ->add(Url::create('/arwanatoto'))
        ->add(Url::create('/shiokambing'))
        ->add(Url::create('/megaslot88'))
        ->add(Url::create('/daya4d'))
        ->add(Url::create('/protogel'))
        ->add(Url::create('/hujantoto'))
        ->add(Url::create('/rajaspin'))
        ->add(Url::create('/luxury333'))
        ->add(Url::create('/mpo888'))
        ->add(Url::create('/yotogel'))
        ->add(Url::create('/papua4d'))
        ->add(Url::create('/top1toto'))
        ->add(Url::create('/jon4d'))
        ->add(Url::create('/visitorbet'))
        ->add(Url::create('/udintogel'))
        ->add(Url::create('/unoslot'))
        ->add(Url::create('/silverbola'))
        ->add(Url::create('/ziatogel'))
        ->add(Url::create('/gen77'))
        ->add(Url::create('/timnas4d'))
        ->add(Url::create('/yoda4d'))
        ->add(Url::create('/asialive'))
        ->add(Url::create('/betogel'))
        ->add(Url::create('/senang4d'));


    $sitemap->writeToFile(public_path('sitemap.xml'));

    return "Sitemap berhasil diperbarui, <a href='/sitemap.xml'>Lihat sitemap</a>";
});
