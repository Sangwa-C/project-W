<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function userinfo()
    {
        $userinfo = DB::table('users')->get();
        return view('profile', ['profile' => $userinfo]);
    }
}
