<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Newproduct;
use App\Models\News;

class MainController extends Controller
{
    //
    public function index() {
        $banner = Banner::find(1);
        $new_product = Newproduct::find(1);
        return view('forestage.index', compact('banner', 'new_product'));
    }
    public function news() {
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $news_date = [];
        foreach ($news as $key=>$value) { 
            $news_date[$key] = $this->convertDate($value->updated_at);
        }
        return view('forestage.news', compact('news', 'news_date'));
    }
    public function product() {
        return view('forestage.product');
    }
    public function about_us() {
        return view('forestage.aboutUs');
    }
    public function news_detail($id) {
        $news_detail = News::find($id);
        return view('forestage.newsDetail', compact('news_detail'));
    }

    // Convert update_date to (Month, Day) format 
    public function convertDate($date) {
        $month = substr($date, 5, 2);
        $day = substr($date, 8, 2);
        $new_month = ($month == '01') ? "Jan" : 
        (($month =='02') ? "Feb" : 
        (($month =='03') ? "Mar" : 
        (($month =='04') ? "Apr" : 
        (($month =='05') ? "May" : 
        (($month =='06') ? "Jun" : 
        (($month =='07') ? "Jul" : 
        (($month =='08') ? "Aug" : 
        (($month =='09') ? "Sep" : 
        (($month =='10') ? "Oct" : 
        (($month =='11') ? "Nov" : "Dec"))))))))));
        $new_date = $new_month.", ".$day;
        return $new_date;
    }
}
