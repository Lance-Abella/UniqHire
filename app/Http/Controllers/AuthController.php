<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Role;
use App\Models\Disability;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //LOGIN PROCESS
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|string|',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records',
        ]);
    }

    // REGISTRATION PROCESS
    public function showRegistration() {
        $roles = Role::all();
        $disabilities = Disability::all();
        return view('auth.register', compact('roles', 'disabilities'));
    }

    public function register(Request $request) {
        if($request->generate_email || ($request->email && $request->generate_email)){
            $email = fake()->unique()->safeEmail();
        } else {
           $email = $request->email;
        }

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            // 'email' => 'required|string|email|unique:users,email|max:255',
            'contactnumber' => 'required|string|max:255',
            'password' => 'required|string|min:4|max:255|confirmed',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            // 'disability' => 'required|string|exists:disabilities,id',
            'pwd_card' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            // 'role' => 'required|string|exists:roles,id',
        ]);

        

        $user = User::create([
            'email' => $email,
            'password' => Hash::make($request->password),
        ]);

        $user->role()->attach($request->role);
        // Log::info('Attaching role ID: ' . $request->role . ' to user ID: ' . $user->id);

        UserInfo::create([
            'user_id' => $user->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'contactnumber' => $request->contactnumber,
            'city' => $request->city,
            'state' => $request->state,
            'disability_id' => $request->disability,
            'pwd_card' => null,
        ]);

        return redirect()->route('login-page');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login-page');
    }
}
