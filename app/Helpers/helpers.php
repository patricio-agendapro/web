<?

function set_locale() {
    $locale = explode('/',Request::path())[0];
    if($locale != ''){
        if($locale == 'cl'){
            App::setLocale('es-CL');
        }
        if($locale == 'mx'){
            App::setLocale('es-MX');
        }
    }
}

function download_locize_lang_file() {
    foreach(config('country') as $country){

        $url = config('translation.url_project_locize') . $country['lang_location'] . '/web';

        if (file_put_contents(base_path() . '/resources/lang/' . $country['lang_location'] . '.json', file_get_contents($url)))
        {
            echo "File downloaded successfully";
        }
        else
        {
            echo "File downloading failed.";
        }

    }
   
}

function get_url_without_locale() {
    $array_url = explode('/', request()->path());
    array_shift($array_url);
    return(implode('/',$array_url));
}
