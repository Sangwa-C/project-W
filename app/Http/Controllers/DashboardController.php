<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function userinfo()
    {
        $userInfor = DB::table('users')->get();
        // dd($userinfo);
        return view('profile', ['profile' => $userInfor]);
    }
}
