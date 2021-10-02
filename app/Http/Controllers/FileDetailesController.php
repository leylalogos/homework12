<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileDetailesController extends Controller
{
    public function index()
    {
        $files = File::where('user_id',auth()->id())->get();
        return View('fileDetailes')->with('files', $files);
    }
}
