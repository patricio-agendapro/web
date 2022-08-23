<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class locize_download_all_lang extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'locize:download';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Se descargan todos los idiomas desde Locize';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        download_locize_lang_file();
    }
}
