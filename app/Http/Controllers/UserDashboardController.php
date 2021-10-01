<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\File;

class UserDashboardController extends Controller
{
    public function index()
    {
        $data = File::getUserFilesInformation(Auth::id());

        return View('userDashboard')
            ->with('username', Auth::user()->username)
            ->with('credit', Auth::user()->credit)
            ->with('download_count', $data['download_count'])
            ->with('size', $data['size']);
    }
}
