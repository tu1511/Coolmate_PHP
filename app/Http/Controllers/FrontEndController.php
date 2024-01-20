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

    public function show_product(Request $request) {
        // lay du lieu ra
        $product = product::find($request->id);
        return view('product', [
            'product' => $product,
            'title' => 'Coolmate_Product-detail'
        ]);
    }
}
