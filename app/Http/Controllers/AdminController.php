<?php

namespace App\Http\Controllers;

use App\Models\Disability;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Role;

class AdminController extends Controller
{
    public function showDashboard()
    {
        $users = User::all();
        return view('admin.dashboard')->with('users');
    }

    public function showPwds()
    {
        // $disability = Disability::with('PWD');
        // $ = Role::where('role_name', 'PWD')->value('id');
        // $disability = Role::where('role_name', 'PWD')->value('id');
        $users = User::whereHas('userInfo', function ($query) {
            $query->whereNotNull('disability_id')->where('disability_id', '!=', 1);
        })->get();
        // $disability = UserInfo::select('disability_id')->where('1');
        // $userInfo = $users->disability($disability);

        return view('admin.pwdUsers', compact('users'));
    }

    public function showTrainers()
    {
        // $disability = Disability::with('PWD');
        $trainingID = Role::where('role_name', 'Trainer')->value('id');
        // $disability = Role::where('role_name', 'PWD')->value('id');
        $users = User::whereHas('role', function ($query) use ($trainingID) {
            $query->where('role_id', $trainingID);
        })->get();
        // $disability = UserInfo::select('disability_id')->where('1');
        // $userInfo = $users->disability($disability);

        return view('admin.trainingAgencies', compact('users'));
    }
}
