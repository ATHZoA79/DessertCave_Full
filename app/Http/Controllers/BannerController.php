<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
use Illuminate\Validation\Rules\Exists;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::find(1);
        return view('backstage.banner', compact('banner'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $banner_img1_pc = 

        $data = Banner::find(1);
        if ($request->hasFile('banner_img1_pc')) {
            Storage::delete($data->banner_img1_pc);
            $banner_img1_pc = Storage::putFile('banner', $request->banner_img1_pc);
            $data->banner_img1_pc = $banner_img1_pc;
        }
        if ($request->banner_img1_phone != null) {
            Storage::delete($data->banner_img1_phone);
            $banner_img1_phone = Storage::putFile('banner', $request->banner_img1_phone);
            $data->banner_img1_phone = $banner_img1_phone;
        }
        if ($request->banner_img2_pc != null) {
            Storage::delete($data->banner_img2_pc);
            $banner_img2_pc = Storage::putFile('banner', $request->banner_img2_pc);
            $data->banner_img2_pc = $banner_img2_pc;
        }
        if ($request->banner_img2_phone != null) {
            Storage::delete($data->banner_img2_phone);
            $banner_img2_phone = Storage::putFile('banner', $request->banner_img2_phone);
            $data->banner_img2_phone = $banner_img2_phone;
        }
        $data->save();
        return redirect('admin/banner');
    }
}
