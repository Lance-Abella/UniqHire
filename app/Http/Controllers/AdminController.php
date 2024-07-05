<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard() {
        $users = User::all();
        return view('admin.dashboard')->with('users');
    }
}
