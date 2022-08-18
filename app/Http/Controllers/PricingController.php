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

    // public function lalalalalalalala($locale)
    // {
    //     $this->seo->title(__('') . " - AgendaPro");
    //     $this->seo->meta('description', __(''));

    //     $meta = array(
    //         "bodyclass" => "features",
    //     );

    //     $content = array(
    //         "h1" => __(""),
    //         "h1_sub" => __(""),
    //         "h2" => __(""),
    //         "h2_sub" => __(""),
    //         "image_header" => "",
    //     );

    //     $features_content[] = [
    //         'title' => __(''), 
    //         'sub_title' => __(''), 
    //         'text' => __(''), 
    //         'text_mark' => __(''), 
    //         'text_2' => __(''), 
    //         'image' => '',
    //     ];

    //     $features_content[] = [
    //         'title' => __(''), 
    //         'sub_title' => __(''), 
    //         'text' => __(''), 
    //         'text_mark' => __(''), 
    //         'text_2' => __(''), 
    //         'image' => '',
    //     ];

    //     $other_features[] = $this->features['reservas-online'];
    //     $other_features[] = $this->features['gestion-de-clientes'];
    //     $other_features[] = $this->features['control-de-inventarios'];
    //     $other_features[] = $this->features['agenda-medica'];

    //     return view('features', ['locale' => $locale, 'meta' => $meta, 'content' => $content, 'features_content' => $features_content, 'other_features' => $other_features]);
        
    // }
}
