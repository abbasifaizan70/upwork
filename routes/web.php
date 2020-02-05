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

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/catalogs', function () {
    return view('catalogs');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/instrukciya_dlya_polzovatelei_portala', function () {
    return view('instrukciya_dlya_polzovatelei_portala');
});

Route::get('/catalog/vedushie', function () {
    return view('catalog/vedushie');
});

Route::get('/catalog/transportnye_uslugi', function () {
    return view('catalog/transportnye_uslugi');
});

Route::get('/news/2485/pochemu-reklamu-zakazyvayut-v-1showkz', function () {
    return view('/news/2485/pochemu-reklamu-zakazyvayut-v-1showkz');
});

Route::get('/news/2485/prezentaciya-novogo-hyuindai-sonata', function () {
    return view('/news/2485/prezentaciya-novogo-hyuindai-sonata');
});



Route::get('/polzovatelskoe_soglashenie', function () {
    return view('polzovatelskoe_soglashenie');
});

Route::get('/portfolio_1show_kz', function () {
    return view('portfolio_1show_kz');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/spasibo_chto_interesuetes_nami', function () {
    return view('spasibo_chto_interesuetes_nami');
});
Route::get('/vakansii', function () {
    return view('vakansii');
});


