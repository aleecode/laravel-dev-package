<?php

namespace Aleecode\Timezones\Controllers;

use App\Http\Controllers\Controller;

class TimezonesController extends Controller
{
    public function index()
    {
        return view('timezones::timezone', ['variable' => 'isinya variabel disini']);
    }
}
