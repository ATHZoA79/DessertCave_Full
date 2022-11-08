<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Newproduct;
use App\Http\Controllers\FilesController;

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
            FilesController::deleteUpload($data->product_img_pc);
            $product_img_pc = FilesController::imgUpload($request->product_img_pc, 'new_product');
            $data->product_img_pc = $product_img_pc;
        }
        if ($request->hasFile('product_img_phone')) {
            FilesController::deleteUpload($data->product_img_phone);
            $product_img_phone = FilesController::imgUpload($request->product_img_phone, 'new_product');
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
