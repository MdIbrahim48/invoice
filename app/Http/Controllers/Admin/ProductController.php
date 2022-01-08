<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('admin.product.index',[
            'products' => $products
        ]);
    }

    public function create(){
        return view('admin.product.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        if($request->buying_price > $request->selling_price){
            Session::flash('price-warning','Selling price must be greater than buying price');
            return back();
        }
        $product_code = mt_rand(1000,9999);
        $product = Product::create([
            'name' => $request->name,
            'product_code' => $product_code,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'benifit' => $request->selling_price - $request->buying_price,
            'status' => $request->status,
            'created_by' => Auth::user()->email,
        ]);
        if ($request->hasFile('image')) {
            //photo update
            $image = $request->file('image');
            $name = $product->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/product/');
            $image->move($destination,$name);
            Product::where('id',$product->id)->update([
                'image' => $name,
            ]);
        }
        return back()->with('alert-success','Product Added Successfully');
    }

    public function edit($id){
        $product = Product::where('id',$id)->first();
        return view('admin.product.edit',[
            'product' => $product
        ]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
            'status' => 'required',
        ]);
        if($request->buying_price > $request->selling_price){
            Session::flash('price-warning','Selling price must be greater than buying price');
            return back();
        }

        // $product_code = mt_rand(1000, 9999);
        $product =  Product::where('id',$id)->first();
        Product::where('id',$id)->update([
            'name' => $request->name,
            // 'product_code' => $product_code,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'benifit' => $request->selling_price - $request->buying_price,
            'status' => $request->status,
            'edited_by' => Auth::user()->email,
        ]);
        if ($request->hasFile('image')) {
             //old photo delete if it is not default photo
             $old_photo_name = $product->image;
             if($old_photo_name){
                 $old_photo_location = public_path('photo/product/').$old_photo_name;
                 unlink($old_photo_location);
             }
            //photo update
            $image = $request->file('image');
            $name = $product->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/product/');
            $image->move($destination,$name);
            Product::where('id',$product->id)->update([
                'image' => $name,
            ]);
        }
        return back()->with('alert-success','Product Update Successfully');
    }

    public function destroy($id){
        Product::where('id',$id)->delete();
        // $old_photo_name = $product->image;
        // if($old_photo_name){
        //     $old_photo_location = public_path('photo/product/').$old_photo_name;
        //     unlink($old_photo_location);
        // }
        // $product->delete();
        return back()->with('alert-success','Product Delete Successfully');
    }

    public function allDeletedProduct(){
        $allDeletedProducts = Product::onlyTrashed()->get();
        return view('admin.product.deleted_product',[
            'allDeletedProducts' => $allDeletedProducts,
        ]);
    }

    public function restoreProduct($id){
        Product::onlyTrashed()->where('id',$id)->restore();
        return back()->with('alert-success','Product Restore Successfully');
    }

    public function parmanentDelete($id){
        $productPermanentDelete = Product::onlyTrashed()->where('id',$id)->first();
        $old_photo_name = $productPermanentDelete->image;
        if($old_photo_name){
            $old_photo_location = public_path('photo/product/').$old_photo_name;
            unlink($old_photo_location);
        }
        $productPermanentDelete->forceDelete();
        return back()->with('danger','Product Parmanent Delete Successfully');
    }

}
