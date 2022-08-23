<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

class PricingController extends Controller
{
    public function __construct()
    {
        $this->seo = seo();
        $this->seo = app(SeoService::class);
        $this->seo = Seo::make();

        

    }

    public function pricing($locale)
    {
        
        $meta = array(
            "bodyclass" => "pricing",
        );

        return view('pricing', ['locale' => $locale, 'meta' => $meta]);
        
    }
    
}
