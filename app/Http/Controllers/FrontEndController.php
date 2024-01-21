<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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

    // cart
    public function add_cart(Request $request) {
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;

        if (is_null(Session::get('cart'))) {
            Session::put('cart', [
                $product_id => $product_qty
            ]);
            return redirect('/cart');
        }
        else {
            $cart = Session::get('cart');
            if (Arr::exists($cart, $product_id)) {
                $cart[$product_id] += $product_qty;
                Session::put('cart', $cart);
                return redirect('/cart');
            }
            else {
                $cart[$product_id] = $product_qty;
                Session::put('cart', $cart);
                return redirect('/cart');
            }
        }
    }

    public function show_cart() {
        $cart = Session::get('cart');
        $product_id = array_keys($cart);
        $products = product::whereIn('id', $product_id)->get();

        return view('cart', [
            'products'=> $products,
            'title' => 'Coolmate-Cart'
        ]);
    }

    public function delete_cart(Request $request) {
        $cart = Session::get('cart');
        $product_id = $request -> id;
        unset($cart[$product_id]);
        Session::put('cart', $cart);
        return redirect('/cart');
    }

    public function update_cart(Request $request) {
        $cart = $request->product_id;
        Session::put('cart', $cart);
        return redirect('/cart');
    }

    public function send_cart(Request $request) {
        dd($request->all());
    }
}
