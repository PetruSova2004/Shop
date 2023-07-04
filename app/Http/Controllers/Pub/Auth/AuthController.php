<?php

namespace App\Http\Controllers\Pub\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pub\Login\LoginRequest;
use App\Http\Requests\Pub\Register\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function authView()
    {
        return view('Pub.login');
    }

    public function login(LoginRequest $request)
    {
        $request->validated();
        $user = User::where('email', $request->email)->first();

        if ($user && $user->password == $request->password) {
            Auth::login($user);
            return redirect()->route('home');
        } else {
            dd('pula');
        }
    }

    public function register(RegisterRequest $request)
    {
        $request->validated();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'age' => $request->age,
            'address' => $request->address,
            'gender' => $request->gender,
        ]);
        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
