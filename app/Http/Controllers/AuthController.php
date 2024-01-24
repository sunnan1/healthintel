<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        $organizations = (app(OrganizationController::class)->getOrganizationData());
        $segments = (app(SegmentController::class)->getSegmentData());
        return view('authentication.login' , compact('organizations' , 'segments'));
    }

    public function postLogin(Request $request) {
        $user = User::where('email' , $request->username.''.$request->email)->where('organization_id',$request->organization)->where('segment_id',$request->segments)->first();
        if ($user) {
            $user->computer = $request->computerName;
            $user->save();
            Auth::loginUsingId($user->id);
            return redirect()->to('dashboard');
        }
        return redirect()->back()->with('error' , 'Invalid Credentials');
    }
}
