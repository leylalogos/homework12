<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return View('setting')->with('setting', $setting);
    }
    public function setSetting(Request $request)
    {

        Setting::updateOrCreate(['id' => 1], $request->input());
        return redirect()->back();
    }
}
