<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{

    public function index()
    {
        if (Auth::user()->role_id != 1) {
            return "you are not admin";
            
        }
        $users = User::all();
        return View('userManagement')->with('users', $users);
    }
    public function changeStatus(Request $request)
    {
        if (Auth::user()->role_id != 1) {
            return "you are not admin";
        }
        $user = User::find($request->id);
        $user->changeStatus();
        
    }
    public function changeRole(Request $request)
    {
        if (Auth::user()->role_id != 1) {
            return "you are not admin";
        }
        $user = User::find($request->id);
        $user->changeRole($request->role_id);
        return redirect()->back();
    }
}
