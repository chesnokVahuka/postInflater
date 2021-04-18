<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $path = $request->file('image')->store('uploads','public');

        return view('home',['path' => $path]);
    }

    public function delete()
    {
        $files = Storage::allFiles('public/uploads/');
        $urls=[];
        foreach ($files as $file) {
            $urls[]= Storage::url($file);
        }
        Storage::delete($files);
        
        
        return view('delete',['files' => $urls]);
    }
}
