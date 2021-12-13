<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Log;

class ServerReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'server:report {data : The ID of the report}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'server report...';

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
        $id = $this->argument('data');
        if(!isset($id)){
            Log::debug('server report...');
        }else{
            Log::debug('server report... data:' . $id);
        }
    }
}
