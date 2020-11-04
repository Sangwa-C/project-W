<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function personCause()
    {
        return view('personCause');
    }

    public function updateUser(Request $request, $id)
    {
        if (User::where('id', $id)->exists()) {

            $updateUser = User::find($id);
            $updateUser->name = is_null($request->name) ? $updateUser->name : $request->name;
            $updateUser->Pnbr = is_null($request->Pnbr) ? $updateUser->Pnbr : $request->Pnbr;
            $updateUser->counrty = is_null($request->counrty) ? $updateUser->counrty : $request->counrty;
            $updateUser->city = is_null($request->city) ? $updateUser->city : $request->city;
            $updateUser->prs_name = is_null($request->prs_name) ? $updateUser->prs_name : $request->prs_name;
            $updateUser->prs_nbr = is_null($request->prs_nbr) ? $updateUser->prs_nbr : $request->prs_nbr;
            // dd($updateUser);
            $updateUser->save();

            return redirect('profile');
        }
    }
}
