<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    public function index(){
        $categories = category::orderBy('id','desc')->get();
        return view('admin.category',compact('categories'));
    }
    public function add(){
        return view('admin.add_category');
    }
    public function store(Request $request){
    
        $category = new category();
        $category->title = $request->title;
        $category->description = $request->desc;
        if($request->hasFile('image')){
                $file = $request->image;

                $filename = $file->getClientOriginalName();
                $file->move(public_path('/uploads'),$filename);

                $category->image = 'http://automoney.co.in/blogs/public/uploads/'.$filename;
        }
      
        $category->save();
        return redirect()->route('admin.category');

    }
    public function edit($id){
        $category = category::findOrFail($id);
        return view('admin.edit_category',compact('category'));
    }
    public function update(Request $request,$id){
        $category = category::findOrFail($id);
        
        $category->title = $request->title;
        $category->description = $request->desc;
        if($request->hasFile('image')){
        $file = $request->image;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('uploads/'),$filename);
        $category->image  = 'http://automoney.co.in/blogs/public/uploads/'.$filename;
        }
      
        $category->save();
        return redirect()->route('admin.category'); 

    }
    public function delete(Request $request,$id){

        $category = category::findOrFail($id);
        if($category->delete()){
            // if($category->image!=null){
            // unlink('http://automoney.co.in/blogs/public/uploads/'.$category->image);
            // }
            return redirect()->route('admin.category');
        }
    }}
