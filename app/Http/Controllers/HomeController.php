<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->seo = seo();
        $this->seo = app(SeoService::class);
        $this->seo = Seo::make();  
    }

    public function home($locale)
    {
        App::setLocale(config('countries.' . $locale . 'lang_location'));
        $this->seo->title('AgendaPro');
        $this->seo->meta('description', 'AgendaPro FTW');
        $meta = array(
            'bodyclass' => 'home',
        );
        return view('home', ['locale' => $locale, 'meta' => $meta]);
    }

}
