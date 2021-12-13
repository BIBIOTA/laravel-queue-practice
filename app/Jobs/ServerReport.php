<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Artisan;

class ServerReport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 600;
    protected $time;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($time)
    {
        $this->time = $time;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if(!$this->time){
            sleep(5);
            Artisan::call('server:report');
        }else{
            sleep($this->time);
            Artisan::call('server:report',['data'=>$this->time]);
        }
    }
}
