<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\ServerReport;

class SiteController extends Controller
{
    public function doDispatch(Request $request , $time)
    {
        $newJob = new ServerReport($time);
        dispatch($newJob);
    }
}
