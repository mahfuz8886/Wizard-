<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    function index() {

        //return "I am dashboard";
        return view('admin.dashboard');
    }

    function addNewProduct(Request $request) {
        $product = new Product;

        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->price = $request->price;

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->product_name.'_'.time().'.'.$extension;
            $file->move('public/upload/product', $filename);
            $product->image = $filename;
        }

        $product->save();
        return redirect()->back()->with('product_add', 'product added successfully');
    }
}
