<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\News;
use App\category;

class NewsController extends Controller
{
    public function index(){
      
        $news = News::orderBy('id','desc')->get();
     
        return view('admin.news',compact('news'));
    }
    public function add(){
        $cats = category::all();
        return view('admin.add_news',compact('cats'));
    }
    public function store(Request $request){
    

        $news = new News();
        $news->title = $request->title;
        $news->category_id = $request->cat;
        $news->description = $request->desc;
        if($request->hasFile('image') && !empty($request->image)){
        $file = $request->image;

        $filename = $file->getClientOriginalName();
        $file->move(public_path('/uploads'),$filename);

        $news->image ='http://automoney.co.in/blogs/public/uploads/'.$filename;
        }
        $news->vdolink = $request->vdolink;
       
        $news->save();
        return redirect()->route('admin.news');

    }
    public function edit($id){
        $news = News::findOrFail($id);
        $cats = category::all();
        return view('admin.edit_news',compact('news','cats'));
    }
    public function update(Request $request,$id){
        $newz = News::findOrFail($id);
        
        $newz->title = $request->title;
        $newz->description = $request->desc;
        $newz->category_id = $request->cat;

        if($request->hasFile('image')){
        $file = $request->image;

        $filename = $file->getClientOriginalName();
        $file->move(public_path('uploads/'),$filename);
        $newz->image  = 'http://automoney.co.in/blogs/public/uploads/'.$filename;
        }
        $newz->vdolink = $request->vdolink;

        $newz->save();
        return redirect()->route('admin.news'); 

    }
    public function delete(Request $request,$id){

        $newz = News::findOrFail($id);
        if($newz->delete()){
            // if($newz->image!=null){
            // unlink('http://automoney.co.in/blogs/public/uploads/'.$newz->image);
            // }
            return redirect()->route('admin.news');
        }
    }
}
