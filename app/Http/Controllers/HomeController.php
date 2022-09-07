<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

class HomeController extends Controller
{
    public function __construct()
    {
        ////se setea el locale para el lenguaje
        set_locale();

        $this->seo = seo();
        $this->seo = app(SeoService::class);
        $this->seo = Seo::make();  
    }

    public function home($locale)
    {
        $this->seo->title(__('Software de gestión | AgendaPro - AgendaPro'));
        $this->seo->meta('description', __('Simplifica tu día a día y haz crecer tu negocio con el software todo en uno para centros de estética, salones de belleza y centros médicos. Da click acá y pide tu demo gratis'));
        $this->seo->meta('robots', 'index, follow');

        //canonical
        //hreflangs
        //todo og:
        //twitter card

        $meta = array(
            'bodyclass' => 'home',
        );
        return view('home', ['locale' => $locale, 'meta' => $meta]);
    }

}
