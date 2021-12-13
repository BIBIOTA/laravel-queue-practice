<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\EmailForQueuing;
use Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $moreUsers;
    protected $evenMoreUsers;
    protected $params;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($moreUsers, $evenMoreUsers, $params)
    {
        $this->moreUsers = $moreUsers;
        $this->evenMoreUsers = $evenMoreUsers;
        $this->params = $params;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $email = new EmailForQueuing();
        
        Mail::to('be91926@gmail.com') //收件人
        ->cc($this->moreUsers) //副本
        ->bcc($this->evenMoreUsers) //密件副本
        ->send($email);
    }
}