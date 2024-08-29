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

Route::get('/gigaspin88', function () {
    // return view('welcome');
});

Route::get('/sitemap', function () {

    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/?product=jonitogel'))
        ->add(Url::create('/?product=obor138'))
        ->add(Url::create('/?product=bgibola'))
        ->add(Url::create('/?product=kaisar888'))
        ->add(Url::create('/?product=mas4d'))
        ->add(Url::create('/?product=arwanatoto'))
        ->add(Url::create('/?product=shiokambing'))
        ->add(Url::create('/?product=megaslot88'))
        ->add(Url::create('/?product=daya4d'))
        ->add(Url::create('/?product=protogel'))
        ->add(Url::create('/?product=hujantoto'))
        ->add(Url::create('/?product=rajaspin'))
        ->add(Url::create('/?product=luxury333'))
        ->add(Url::create('/?product=mpo888'))
        ->add(Url::create('/?product=yotogel'))
        ->add(Url::create('/?product=papua4d'))
        ->add(Url::create('/?product=top1toto'))
        ->add(Url::create('/?product=jon4d'))
        ->add(Url::create('/?product=visitorbet'))
        ->add(Url::create('/?product=udintogel'))
        ->add(Url::create('/?product=unoslot'))
        ->add(Url::create('/?product=silverbola'))
        ->add(Url::create('/?product=ziatogel'))
        ->add(Url::create('/?product=gen77'))
        ->add(Url::create('/?product=timnas4d'))
        ->add(Url::create('/?product=yoda4d'))
        ->add(Url::create('/?product=asialive'))
        ->add(Url::create('/?product=betogel'))
        ->add(Url::create('/?product=senang4d'));


    $sitemap->writeToFile(public_path('sitemap.xml'));

    return "Sitemap berhasil diperbarui, <a href='/sitemap.xml'>Lihat sitemap</a>";
});
