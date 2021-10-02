<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Http\Requests\FileRequest;

class UploadFileController extends Controller
{
    public function userindex()
    {
        $authenticated = true;
        return View('uploadFile')->with('authenticated', $authenticated);
    }

    public function uploadByUser(FileRequest $request)
    {
        $uploadedFile = $request->file('file_user');
        $path = $uploadedFile->store('userUploadedFile');
        File::create([
            'name' => $uploadedFile->getClientOriginalName(),
            'extention' => $uploadedFile->extension(),
            'size' => $uploadedFile->getSize(),
            'user_id' => auth()->id(), // using helper Auth::id()
            'path' => $path
        ]);
        return redirect()->back();
    }
    public function guestindex()
    {
        $authenticated = false;

        return View('uploadFile')->with('authenticated', $authenticated);
    }
    public function uploadByGuest(FileRequest $request)
    {
        $uploadedFile = $request->file('file_user');
        $path = $uploadedFile->store('userUploadedFile');
        File::create([
            'name' => $uploadedFile->getClientOriginalName(),
            'extention' => $uploadedFile->extension(),
            'size' => $uploadedFile->getSize(),
            'path' => $path
        ]);
        return redirect()->back();
    }
}
