<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function add_product(Request $request) {
        return view('admin.product.add', [
            'title' => 'Thêm Sản Phẩm'
        ]);
    }

    public function list_product(Request $request) {
        return view('admin.product.list', [
            'title' => 'Danh sách sản phẩm'
        ]);
    }
    // lay du lieu
    public function insert_product(Request $request) {
        $product = new product();
        $product -> name = $request->input('name');
        $product -> material = $request->input('meterial');        
        $product -> price_nomal = $request->input('price_nomal');
        $product -> price_sale = $request->input('price_sale');
        $product -> description = $request->input('description');
        $product -> content = $request->input('content');
        $product -> image = $request->input('image');
        $product_images = implode('*', $request->input('images'));
        $product -> images = $product_images;
        $product -> save();
    }
}
