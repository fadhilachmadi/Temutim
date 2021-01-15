<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    //
    public function downloadCV($filename)
    {
        $file_path = public_path('storage/CV/' . $filename);
        if (!file_exists($file_path)) {
            return back();
        }
        return response()->download($file_path);
    }

    public function downloadPortofolio($filename)
    {
        $file_path = public_path('storage/portfolio/' . $filename);
        if (!file_exists($file_path)) {
            return back();
        }
        return response()->download($file_path);
    }
}
