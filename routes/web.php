<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;

Route::get('/', [PageHomeController::class,'anasayfa'])->name('anasayfa');

Route::get('/hakkimizda', [PageController::class,'hakkimizda'])->name('hakkimizda');

Route::get('/urunler', [PageController::class,'urunler'])->name('urunler');

Route::get('/urun/detay', [PageController::class,'urundetay'])->name('urundetay');

Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');

Route::get('/cart', [PageController::class,'cart'])->name('cart');

Route::get('/v', [PageController::class,'men'])->name('men');