<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hakkimizda(){
        return view('frontend.pages.about');
    }

    public function urunler(){
        return view('frontend.pages.product');
    }

    public function urunDetay(){
        return view('frontend.pages.productdetail');
    }

    public function iletisim(){
        return view('frontend.pages.contact');
    }

    public function cart(){
        return view('frontend.pages.cart');
    }

    public function men(){
        return view('frontend.pages.men');
    }
}
