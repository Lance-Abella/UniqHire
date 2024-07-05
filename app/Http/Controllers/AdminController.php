<?php

namespace App\Http\Controllers;

use App\Models\Disability;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Role;

class AdminController extends Controller
{
    public function showDashboard() {
        $users = User::all();
        return view('admin.dashboard')->with('users');
    }

    public function showPwds() {
        // $disability = Disability::with('PWD');
        
        // $disability = Role::where('role_name', 'PWD')->value('id');
        $users = User::all();
        // $disability = UserInfo::select('disability_id')->where('1');
        // $userInfo = $users->disability($disability);
        
        return view ('admin.pwdUsers', compact('users'));
    }
}
