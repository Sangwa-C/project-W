<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function investorSteps()
    {
        return view('investorSteps');
    }

    public function enterSteps()
    {
        return view('enterSteps');
    }
}
