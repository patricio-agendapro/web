<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function agenda_online($country)
    {
        

        $meta = array(
            'bodyclass' => 'home'
        );

        return view('agenda_online', ['country' => $country, 'meta' => $meta]);

    }

}
