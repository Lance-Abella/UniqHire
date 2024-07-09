<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Http\Requests\StoreUserInfoRequest;
use App\Http\Requests\UpdateUserInfoRequest;

class PwdController extends Controller
{
    public function pwdHomepage() {
        return view('pwd.homepage');
    }
}
