<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function hakkimizda(){
        $hakkimizda = About::where('id', 1)->first();
        return view('frontend.pages.about', compact('hakkimizda'));
    }

    public function urunler(Request $request, $slug=null){

        $categoryitems = request()->segment(1) ?? null;

        // Burada ürünlere filtlereleme koyduk.

        $size = $request->size ?? null;

        $color = $request->color ?? null;

        $startprice = $request->start_price ?? null;

        $endprice = $request->end_price ?? null;

        $order = $request->order ?? 'id';

        $short = $request->short ?? 'desc';



         $urunler = Product::where('status',1)
        ->select(['id','name','slug','size','color','price','image','category_id'])
        ->where(function($q) use ($size, $color, $startprice, $endprice){

            if(!empty($size)){
                $q->where('size', $size);
            }

            if(!empty($color)){
                $q->where('color', $color);
            }
            if(!empty($startprice) && !empty($endprice)){
                $q->whereBetween('price', [$startprice, $endprice]);
            }
            return $q;


        })->with('categoryitems:id,name,slug')
        ->whereHas('categoryitems', function($q) use ($slug) {
            if (!empty($slug)) {
                $q->where('slug', $slug);
            }
        });


        $minprice = $urunler->min('price');

        $maxprice = $urunler->max('price');

        $sizelists = $urunler->groupBy('size')->pluck('size')->toArray();

        $colors = $urunler->groupBy('color')->pluck('color')->toArray();

        $sira = $urunler->orderBy($order,$short )->paginate(1);

        $urunler = $urunler -> paginate(20);



        return view('frontend.pages.product', compact('urunler','minprice','maxprice','sizelists','colors','sira'));
    }

    public function indirimdekiurunler(){
        return view('frontend.pages.product');
    }

    public function urunDetay($slug){
        $urunlerdetay = Product::whereSlug($slug)->where('status',true)->firstOrFail();

        $digerurunler = Product::where('id','!=',$urunlerdetay->id)->where('category_id',$urunlerdetay->category_id)->where('status',true)->limit(6)->get();
        return view('frontend.pages.productdetail',compact('urunlerdetay','digerurunler'));
    }

    public function iletisim(){
        return view('frontend.pages.contact');
    }




}
