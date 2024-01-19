<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function uploadImage(Request $request) {
        $fileName =time().'-'.$_FILES['file']['name'];
        $request -> file('file')-> storeAs('public/images',$fileName);
        $url = '/storage/images/'.$fileName;
        return response() -> json([
            'success' => true,
            'path' => $url
        ]);
    }
}
