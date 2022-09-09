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
        $this->seo->canonical('https://agendapro.com/es');
        $hreflangs['link'][] = ['rel' => 'alternate','hreflang' => 'x-default','href' => 'https://agendapro.com/es'];
        foreach (config('country') as $id_country=>$country){
            $hreflangs['link'][] = ['rel' => 'alternate','hreflang' => $country['lang_location'],'href' => 'https://agendapro.com/' . $id_country];
        }
        $this->seo->addFromArray($hreflangs);

        //todo og:
        //twitter card

        $meta = array(
            'bodyclass' => 'home',
        );
        return view('home', ['locale' => $locale, 'meta' => $meta]);
    }

}
