<?php

return [



    /*
    |--------------------------------------------------------------------------
    | Base Language
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of language is your base language.
    | The base language select will be created as json file when scanning.
    | It will also be the file it reads and uploads to POEditor.
    |
    */

    'base_language' => 'base',

    /*
    |--------------------------------------------------------------------------
    | Functions
    |--------------------------------------------------------------------------
    |
    | Here you define an array describing all the function names to scan files for.
    |
    */

    'functions' => ['__'],

    /*
    |--------------------------------------------------------------------------
    | Excluded directories
    |--------------------------------------------------------------------------
    | 
    | Here you define which directories are excluded from scan.
    |
    */
	
    'excluded_directories' => ['vendor', 'storage', 'public', 'node_modules'],
	
    /*
    |--------------------------------------------------------------------------
    | Extensions
    |--------------------------------------------------------------------------
    |
    | Here you define an array describing all the file extensions to scan through.
    |
    */

    'extensions' => ['*.php'],

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | 
    |
    | 
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Locize Config
    |--------------------------------------------------------------------------
    |
    */

    'url_project_locize' => 'https://api.locize.app/952ef1ff-709c-4a31-a0a1-dfc3d9a69ac9/latest/',

];
