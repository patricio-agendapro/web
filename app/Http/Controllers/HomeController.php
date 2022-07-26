<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;




class HomeController extends Controller
{
    public function home($country)
    {
        
        $seo = seo();
        $seo = app(SeoService::class);
        $seo = Seo::make();
        
        seo()->title('AgendaPro');
        seo()->meta('description', 'AgendaPro FTW');

        return view('home');

    }

}
