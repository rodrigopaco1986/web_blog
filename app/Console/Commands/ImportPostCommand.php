<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Import\Post\StaticFactory;

class ImportPostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:posts 
                            {source=api_rest : the source where should be pulled the data into the database}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import posts from from different sources to database';

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
     * @return mixed
     */
    public function handle()
    {
        $source = $this->argument('source');
        
        $importer   = StaticFactory::factory($source);
        $response   = $importer->import();

        if($response)
        {
            $this->info($importer->getMessage());
        } else {
            $this->error($importer->getMessage());
        }
    }
}
