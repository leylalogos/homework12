<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileManagementController extends Controller
{
    public function index()
    {
        $files = File::all();
        return View('fileManagement')->with('files', $files);
    }

    public function destroy(Request $request)
    {
        $file=File::find($request->id);
        Storage::delete($file->path);
        $file->delete();
        return redirect()->back();
    }
    public function approve(Request $request)
    {
        $file=File::find($request->id);
        $file->is_approved = true;
        $file->save();
        return redirect()->back();
    }
}
