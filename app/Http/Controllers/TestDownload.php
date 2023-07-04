<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestDownload extends Controller
{
    public function testDownload()
    {
        $file_path = storage_path("app/public/images/4gclMgIaFjxUamvMaLL6Gzj0zuyBcHB7SMptoIx2.jpg");
        if (file_exists($file_path)) {
            return response()->download($file_path);
        } else {
            return redirect()->back()->with('error', 'fail to download');
        }
    }
}
