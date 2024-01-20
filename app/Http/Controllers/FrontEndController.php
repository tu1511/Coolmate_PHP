<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        $products = product::all();
        return view('home', [
            'products' => $products
        ]);
    }
}
