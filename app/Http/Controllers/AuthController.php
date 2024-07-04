<?php

namespace App\Http\Controllers;

use App\Models\Disability;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public function showLogin() {
        return view('auth.login');
    }

    public function showRegistration() {
        $disabilities = Disability::all();
        $roles = Role::all();
        return view('auth.register', compact('roles', 'disabilities'));
    }

    public function register(Request $request) {
        //debugging
        Log::info('Nakasud ba?');
        //for testing only. will delete later
        if($request->generate_email || ($request->email && $request->generate_email)){
            $email = fake()->unique()->safeEmail();
        } else {
           $email = $request->email;
        }
       //final starts here
        // $request->validate([
        //     'firstname' => 'required|string|max:255',
        //     'lastname' => 'required|string|max:255',
        //     'email' => 'required|string|email|unique:users,email|max:255',
        //     'contactnumber' => 'required|string|max:255',
        //     'password' => 'required|string|min:4|max:255|confirmed', //temp min
        //     'city' => 'required|string|max:255',
        //     'state' => 'required|string|max:255',
        //     'disability' => ['required', 'string', 'exists:disabilities,disability_name'], //temp
        //     'roles' => ['required', 'string', 'exists:roles,role_name'],
        //     'pwd_card' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        // ]);
        Log::info('Nakasud ra');

        $user = User::create([
            'email' => $email,
            'password' => Hash::make($request->password),
            
        ]);
        Log::info('Register method called. User ID: ' . $user->id);

        RoleUser::create([
            'user_id' => $user->id,
            'role_id' => $request->roles,
        ]);

        UserInfo::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'contactnumber' => $request->contactnumber,
            'city' => $request->city,
            'state' => $request->state,
            'disability_id' => Disability::where('disability_name', $request->disability)->value('id'),
            'pwd_card' => null,
            'user_id' => $user->id,
        ]);

        $roleId = Role::where('role_name', $request->roles)->value('id');
        // $userRole = $roleId->id;
        if ($roleId) {
            $user->roles()->attach($roleId);
        }

        // $adminuser->roles()->attach($admin);

       return redirect()->route('login-page');

    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login-page');
    }

    public function showAccs() {
        $users = User::all();
        return view ('displayUsers', compact('users'));
    }

}
