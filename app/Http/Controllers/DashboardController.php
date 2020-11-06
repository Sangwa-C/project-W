<?php

namespace App\Http\Controllers;

use App\Models\registerBusiness;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function registerIdea(Request $request)
    {
        
        if ($request->registrationProof == true) {
            request()->validate([
                'registrationProof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }


            $registerBusiness = new registerBusiness();
            $registerBusiness->pjt_name = $request->get('pjt_name');
            $registerBusiness->sector =$request->get('sector');

            $registerBusiness->pjt_desc = $request->get('pjt_desc');
            $registerBusiness->areYourRegistred = $request->get('areYourRegistred');
            $registerBusiness->userId=Auth::user()->id;
            if ($files = $request->file('registrationProof')) {
                $destinationPath = 'public/image/registrationImagesProofs/'; // upload path
                $registrationImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $registrationImage);
                $insert['registrationProof'] = "$registrationImage";
            }
            // dd($registrationImage);

            $registerBusiness->registrationProof = $registrationImage;
            $registerBusiness->havingATeam = $request->get('havingATeam');
            $registerBusiness->teamContacts = $request->get('teamContacts');
            $registerBusiness->position = $request->get('position');

            // dd($registerBusiness);
            $registerBusiness->save();

            return view('profile');

    }

    public function sector()
    {
        $sector = DB::table('sectors')->where('status','1')->get();
        return view('personCause',compact('sector',));

    }


}
