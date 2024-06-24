<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Models\ProfileType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\RollbarHandler;
use Symfony\Component\HttpKernel\Profiler\Profile;

class AuthController extends Controller
{


    public function register()
    {

        return view('auth/register');
    }

    public function makeRegister(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $accountType = $request->accountType;

        $request->input('profile_type', $accountType);
        $user =  User::create($request->except('password_confirmation', 'accountType'));

        $accountType = $request->accountType;
        if ($accountType == 'personal') {
            ProfileType::create(
                [
                    'title' => 'personal',
                    'user_id' => $user->id
                ]
            );
        } else {
            ProfileType::create(
                [
                    'title' => 'company',
                    'user_id' => $user->id
                ]
            );
        }

        event(new UserRegistered($user));
        return redirect(route('login'));
    }

    public function login(Request $request)

    {

        if (Auth::attempt($request->only('email', 'password'))) {

            return redirect(route('home'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
