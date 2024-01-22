<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function add_product(Request $request) {
        return view('admin.product.add', [
            'title' => 'Thêm Sản Phẩm'
        ]);
    }

    // lay du lieu
    public function insert_product(Request $request) {
        $product = new product();
        $product -> name = $request->input('name');
        $product -> material = $request->input('material');        
        $product -> price_nomal = $request->input('price_nomal');
        $product -> price_sale = $request->input('price_sale');
        $product -> description = $request->input('description');
        $product -> content = $request->input('content');
        $product -> image = $request->input('image');
        // chuyen mang thanh chuoi
        $product_images = implode('*', $request->input('images'));
        $product -> images = $product_images;
        $product -> save();
        return redirect()->back();
    }

    
    public function list_product(Request $request) {
        // $product = product::skip(3)->take(3)->get(); hien thi anh tu skip voi so luong take
        // $product = product::all();\
        $product = DB::table('products') -> paginate(10);
        return view('admin.product.list', [
            'title' => 'Danh sách sản phẩm',
            'products' => $product
        ]);
    }


    public function delete_product (Request $request) {
        product::find($request->product_id)->delete();
        return response()->json([
            'success'=>true
        ]);
    }

    public function edit_product (Request $request) {
        $product = product::find($request->id);
        return view('admin.product.edit', [
            'title'=> 'Sửa sản phẩm',
            'product'=> $product
        ]);
    }

    public function update_product (Request $request) {
        $product = product::find($request->id);
        $product -> name = $request->input('name');
        $product -> material = $request->input('material');        
        $product -> price_nomal = $request->input('price_nomal');
        $product -> price_sale = $request->input('price_sale');
        $product -> description = $request->input('description');
        $product -> content = $request->input('content');
        $product -> image = $request->input('image');
        // chuyen mang thanh chuoi
        $product_images = implode('*',$request->input('images'));
        $product -> images = $product_images;
        $product -> save();
        return redirect('/admin/product/list');
    }
}
