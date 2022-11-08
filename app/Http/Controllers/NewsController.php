<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('id', 'desc')->take(3)->get();
        return view('backstage.newslist', compact('news'));
    }
    
    public function create() {
        return view('backstage.news_add');
    }

    public function store(Request $request) {
        // dd($request->all());

        $news_img_pc = FilesController::imgUpload($request->news_img_pc, 'news');
        $news_img_phone = FilesController::imgUpload($request->news_img_phone, 'news');
        $news_content = nl2br($request->news_content);
        News::create([
            'news_img_pc' => $news_img_pc,
            'news_img_phone' => $news_img_phone,
            'news_title' => $request->news_title,
            'news_content' => $news_content,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return redirect('admin/news');
    }

    public function edit($id) {
        $news = News::find($id);
        // dd($news->all());
        return view('backstage.news_edit', compact('news'));
    }
    
    public function update(Request $request, $id) {
        $news = News::find($id);
        
        // Delete old files
        FilesController::deleteUpload($news->news_img_pc);
        FilesController::deleteUpload($news->news_img_phone);
        
        // Overwrite old data 
        if ($request->hasFile('news_img_pc')) {
            $news_img_pc = FilesController::imgUpload($request->news_img_pc, 'news');
            $news->news_img_pc = $news_img_pc;
        }
        if ($request->hasFile('news_img_phone')) {
            $news_img_phone = FilesController::imgUpload($request->news_img_phone, 'news');
            $news->news_img_phone = $news_img_phone;
        }
        $news_content = nl2br($request->news_content);
        $news->news_title = $request->news_title;
        $news->news_content = $news_content;
        $news->start_date = $request->start_date;
        $news->end_date = $request->end_date;
        $news->save();
        return redirect('admin/news');
    }

    public function delete($id) {
        $news = News::find($id);
        
        FilesController::deleteUpload($news->news_img_pc);
        FilesController::deleteUpload($news->news_img_phone);
        $news->delete();
        return redirect('admin/news');
    }
}
