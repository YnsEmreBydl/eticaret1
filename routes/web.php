<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;


Route::group(['middleware'=>'sitesetting'], function () {

    Route::get('/', [PageHomeController::class,'anasayfa'])->name('anasayfa');

    Route::get('/hakkimizda', [PageController::class,'hakkimizda'])->name('hakkimizda');

    Route::get('/urunler', [PageController::class,'urunler'])->name('urunler');

    Route::get('/urun/{slug}', [PageController::class,'urundetay'])->name('urundetay');

    Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');

    Route::post('/iletisim/gonder', [AjaxController::class, 'mesaj'])->name('mesaj');

    Route::get('/sepet', [CartController::class,'index'])->name('sepet');

    Route::post('/sepet/ekle', [CartController::class,'add'])->name('sepetekle');

    Route::get('/kadin/{slug?}', [PageController::class,'urunler'])->name('kadin');

    Route::get('/cocuk/{slug?}', [PageController::class,'urunler'])->name('cocuk');

    Route::get('/erkek/{slug?}', [PageController::class,'urunler'])->name('erkek');

    Route::get('/indirim', [PageController::class,'indirimdekiurunler'])->name('indirim');

});


