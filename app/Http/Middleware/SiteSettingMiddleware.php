<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\SiteSetting;
use App\Models\Category;

class SiteSettingMiddleware
{
  
    public function handle(Request $request, Closure $next): Response
    {
        $settings = SiteSetting::pluck('data','name')->toArray();
        $categories = Category::where('status','1')->withCount('items')->get();
        view()->share(['settings'=>$settings,'categories'=>$categories]);
        return $next($request);
    }
}
