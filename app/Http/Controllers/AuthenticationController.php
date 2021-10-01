<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;

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
        $user = User::create($request->except('password') + ['password' => bcrypt($request->password)]);
        return redirect()->route('login');
    }
    //show login form to user
    public function loginForm()
    {
        return View('authentication.login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        
        Auth::attempt(['username' => $username, 'password' => $password, 'is_active' => true]);

        return redirect()->route('homePage');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
