<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    //show register form to user
    public function registerForm()
    {
        return View('authentication.register');
    }
    //insert user into db
    public function addUser(RegisterRequest $request)
    {
        $user  = User::create(
            $request->except('password') + ['password' => bcrypt($request->password)]
        );
        return redirect()->route('login');
    }
    //show login form to user
    public function loginForm()
    {
        return View('authentication.login');
    }

    public function doLogin(Request $request)
    {
        $user = User::where('username', '=', $request->username)->firstOrFail();
        if (Hash::check($request->password, $user->password)) {
            $_SESSION['user_id'] = $user->id;
        }
        return redirect()->route('homepage');
    }

    public function logout()
    {
    }
}
