<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmail;
use Carbon\Carbon;

class MailController extends Controller
{

    public function sendMail (Request $request) {

        $moreUsers = 'yukiotataitien@gmail.com';

        $evenMoreUsers = 's11110153@stu.edu.tw';

        $params = [
            'title' => 'testtitle',
            'main' => 'testmain',
        ];

        // SendEmail::dispatch($moreUsers, $evenMoreUsers, $params);
        /* OR */
        $emailJob = (new SendEmail($moreUsers, $evenMoreUsers, $params))->delay(Carbon::now()->addSecond(5));
        dispatch($emailJob);
        
    }
}
