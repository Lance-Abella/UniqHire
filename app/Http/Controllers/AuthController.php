<?php

namespace App\Http\Controllers;

use App\Models\Disability;
use App\Models\Role;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        //for testing only. will delete later
        if($request->generate_email || ($request->email && $request->generate_email)){
            $email = fake()->unique()->safeEmail();
        } else {
           $email = $request->email;
        }
       //final starts here
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            // 'email' => 'required|string|email|unique:users,email|max:255',
            'contactnumber' => 'required|string|max:255',
            'password' => 'required|string|min:4|max:255|confirmed', //temp min
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'disability' => ['required', 'string', 'exists:disbilities,disability_name'], //temp
            'roles' => ['required', 'string', 'exists:roles,role_name'],
            'pwd_card' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = User::create([
            'email' => $email,
            'password' => Hash::make($request->password),
            
        ]);

        
        UserInfo::create([
            'user_id' => $user->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'contactnumber' => $request->contactnumber,
            'city' => $request->city,
            'state' => $request->state,
            'disability_id' => Disability::where('disability_name', $request->disability)->value('id'),
            'pwd_card' => null,
        ]);

        $role = Role::where('role_name', $request->roles)->first();
        if ($role) {
            $user->roles()->attach($role);
        }

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
}
