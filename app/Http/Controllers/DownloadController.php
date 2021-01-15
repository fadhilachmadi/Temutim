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
        return Storage::download("CV/" . $filename);
    }

    public function downloadPortofolio($filename)
    {
        return Storage::download('portofolio/' . $filename);
    }
}
