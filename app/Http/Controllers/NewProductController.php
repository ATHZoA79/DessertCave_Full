<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Newproduct;

class NewProductController extends Controller
{
    public function index() {
        $product = Newproduct::find(1);
        return view('backstage.new_product', compact('product'));
    }

    public function store(Request $request) {
        // dd($request->all());

        $data = Newproduct::find(1);
        if ($request->hasFile('product_img_pc')) {
            Storage::delete($data->product_img_pc);
            $product_img_pc = Storage::putFile('product', $request->product_img_pc);
            $data->product_img_pc = $product_img_pc;
        }
        if ($request->hasFile('product_img_phone')) {
            Storage::delete($data->product_img_phone);
            $product_img_phone = Storage::putFile('product', $request->product_img_phone);
            $data->product_img_phone = $product_img_phone;
        }
        if ($request->product_name != null) {
            $data->product_title = $request->product_name;
        }
        if ($request->product_intro != null) {
            $intro = nl2br($request->product_intro);
            $data->product_content = $intro;
        }
        if ($request->product_link != null) {
            $data->product_uri = $request->product_link;
        }
        $data->save();
        return redirect( route('new_product') );
    }
}
