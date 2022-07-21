<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function agenda_online()
    {

        $meta = array(
            'title'=> 'home',
            'description'=> 'description',
            'robots'=> 'index,follow',
            'bodyclass' => 'home'
        );

        return view('home');

    }

}
