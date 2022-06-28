<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Landing;
use App\Models\Search;
use App\Models\Country;

class LandingController extends SearchController
{
    public function landing($country,$slug)
    {
        $landing_obj = new Landing();
        $landing = $landing_obj->get_landing($country,$slug);
        if($landing == NULL){
            abort(404);
        }

        $country_obj = new Country();
        $country = $country_obj->get_country($country);


        $options = array(
            'q'=> $landing->search_q,
            'location'=> $landing->search_location,
            'category'=> $landing->search_category,
            'page' => 1,
            'country' => $country
        );

        if($landing->description == NULL){
            $meta_description = str_replace('<title>',$landing->title,$country->pattern_landing_description);
            //$meta_description = str_replace('<results>',$pieces['results']['info'][0]['Value'],$meta_description);
        }else{
            $meta_description = $landing->description;
        }

        $meta = array(
            'title'=> $landing->title,
            'description'=> $meta_description,
            'robots'=> 'index,follow',
            'bodyclass' => 'search'
        );

        $results = $this->searcher($options);

        return view('landing', ['results' => $results, 'country' => $country, 'meta' => $meta, 'search_options' => $options]);

    }


}
