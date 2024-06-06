<?php

namespace App\Http\Controllers;

use App\Models\ProfileType;
use App\Models\User;
use Illuminate\Http\Request;
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
        $user =  User::create($request->all());

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


        return redirect(route('auth.login'));
    }
}
