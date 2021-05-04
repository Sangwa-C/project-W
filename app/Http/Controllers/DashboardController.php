<?php

namespace App\Http\Controllers;

use App\Models\Decision;
use App\Models\investors;
use App\Models\registerBusiness;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;
use PhpParser\Node\Expr\BinaryOp\Concat as BinaryOpConcat;

class DashboardController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userinfo()
    {
        $userInfor = DB::table('users')->get();
        // dd($userinfo); allUsers
        return view('profile', compact('userInfor'));
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
        $registerBusiness->sector = $request->get('sector');
        $registerBusiness->pjt_desc = $request->get('pjt_desc');
        $registerBusiness->areYourRegistred = $request->get('areYourRegistred');
        $registerBusiness->userId = Auth::user()->id;
        if ($files = $request->file('registrationProof')) {
            $destinationPath = 'public/image/registrationImagesProofs/'; // upload path
            $registrationImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $registrationImage);
            $insert['registrationProof'] = "$registrationImage";
            $registerBusiness->registrationProof = $registrationImage;
        }
        $registerBusiness->support = $request->get('support');
        $registerBusiness->havingATeam = $request->get('havingATeam');
        $registerBusiness->teamContacts = $request->get('teamContacts');
        $registerBusiness->position = $request->get('position');
        $registerBusiness->save();
        return view('profile');
    }
    public function sector()
    {
        $sector = DB::table('sectors')->where('status', '1')->get();
        return view('personCause', compact('sector'));
    }
    public function offerSupport(Request $request)
    {
        $offerSupport = new investors();
        $offerSupport->legal_status = $request->get('legal_status');
        $offerSupport->sector = $request->get('sector');
        $offerSupport->support = $request->get('support');
        $offerSupport->spt_desc = $request->get('spt_desc');
        $offerSupport->bns_email = $request->get('bns_email');
        $offerSupport->userId = Auth::user()->id;
        $offerSupport->bns_phn_number = $request->get('bns_phn_number');
        // dd($offerSupport)offerSupport
        $offerSupport->save();
        return redirect()->back();
    }
    public function allUsers()
    {
        $userinfo = DB::table('users')->where('user_type', 'admin')->get();
        return view('home.allUsers', compact('userinfo'));
    }
    public function Investors()
    {
        $userinfo = DB::table('users')->get()->toArray();
        return view('home.Investors', compact('userinfo'));
    }
    public function Enterprenuer()
    {
        $userinfo = DB::table('users')->get()->toArray();
        return view('home.Enterprenuer', compact('userinfo'));
    }
    public function InvestoresRequest()
    {
        $userinfo = Investors::all();
        foreach ($userinfo as $key => $value) {
            $userid = $value->userId;
            $sector = $value->sector;
            $userinfo[$key]['users'] = DB::table('users')->where('id', $userid)->get();
            $userinfo[$key]['sectors'] = DB::table('sectors')->where('id', $sector)->get();
        }
        return view('home.InvestoresRequest', compact('userinfo'));
    }
    public function EnterprenuerRequest()
    {
        $userinfo = registerBusiness::all();
        foreach ($userinfo as $key => $value) {
            $userid = $value->userId;
            $sector = $value->sector;
            $userinfo[$key]['users'] = DB::table('users')->where('id', $userid)->get();
            $userinfo[$key]['sectors'] = DB::table('sectors')->where('id', $sector)->get();
        }
        return view('home.EnterprenuerRequest', compact('userinfo'));
    }
    public function changingstutas($id)
    {
        $userinfo = DB::table('users')->select('name', 'email', 'Pnbr', 'user_type', 'id')->where('id', $id)->get();
        return view('home.changingstutas', compact('userinfo'));
    }
    public function changingstatus(Request $request)
    {
        User::where('id', $request->id)
            ->update(['user_type' => $request->user_type]);
        return redirect()->back();
    }
    public function Enterprenuerconnect($id)
    {
        $selectusersector = DB::table('register_businesses')->where('userId', $id)->first();

        if ($selectusersector != null) {
        $user = DB::table('users')->where('id', $id)->select('id', 'email', 'name', 'user_type', 'Pnbr')->get();
        $investors = DB::table('investors')->where('sector', $selectusersector->sector)->get();
        $connected =DB::table('decisions')->where('Enterpnuer_Id', $id)->get();
        $conn=array();
        foreach ($connected as $key => $value) {

            $conn[] = DB::table('investors')->where('id', $value->Investors_id)->get()[0];


        }
        return view('home.Enterprenuerconnect', compact('user', 'investors','conn'));
        }else{
            return redirect('home')->with('errormessage', 'User is not existing thank you ');

        }



    }
    public function connectnow(Request $request)
    {
        $user = Auth::user()->name;
        $userid = Auth::user()->id;
        if (!empty($request->my_checkbox)) {
            $answers = [];
            for ($i = 0; $i < count($request->my_checkbox); $i++) {
                $answers[] = [
                    'Investors_id' => $request->my_checkbox[$i],
                    'Enterpnuer_Id' => $request->id,
                    'sectors_Id' => $request->sector,
                    'plane' =>' You have uploved by  ' . $user,
                    'userId'=> $userid ,
                    'created_at' => date("Y-m-d h:i"),
                    'updated_at' => date("Y-m-d h:i"),
                ];
            }
            Decision::insert($answers);
            return redirect()->back();
        }
    }
}
