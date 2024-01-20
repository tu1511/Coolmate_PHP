<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function uploadImage(Request $request) {
        // check file
        $fileName =time().'-'.$_FILES['file']['name'];
        $request -> file('file')-> storeAs('public/images',$fileName);
        $url = '/storage/images/'.$fileName;
        return response() -> json([ 
            'success' => true,
            'path' => $url
        ]);
    }
    public function uploadImages(Request $request) {
        $files = $request -> file('files');
        for ($i=0; $i < count($files) ; $i++) { 
         $fileName =time().'-'.$files[$i]->getClientOriginalName();
         $files[$i] -> storeAs('/public/images',$fileName);
         $url[] = '/storage/images/'.$fileName;
         
        }
        return response() -> json([
         'success' => true,
         'paths' => $url
 
     ]);
    }
}
