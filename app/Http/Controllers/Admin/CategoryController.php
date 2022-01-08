<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.category.index',[
            'categories' => $categories
        ]);
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        Category::create([
            'title' => $request->title,
            'status' => $request->status,
            'created_by' => Auth::user()->email,
        ]);
        return back()->with('alert-success','Category Added Successfully');
    }

    public function edit($id){
        $category = Category::where('id',$id)->first();
        return view('admin.category.edit',[
            'category' => $category
        ]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        Category::where('id',$id)->update([
            'title' => $request->title,
            'status' => $request->status,
            'edited_by' => Auth::user()->email,
        ]);
        return back()->with('alert-success','Category Update Successfully');
    }

    public function destroy($id){
        Category::where('id',$id)->delete();
        return back()->with('alert-success','Category Delete Successfully');
    }




}
