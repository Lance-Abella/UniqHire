<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInfo;

class AdminController extends Controller
{
    public function showDashboard() {
        $users = User::all();
        return view('admin.dashboard')->with('users');
    }

    public function showAccs() {
        $users = UserInfo::with('user_id');
        return view ('admin.pwdUsers', compact('users'));
    }
}
