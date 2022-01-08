<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\DemoData;
use App\Http\Controllers\Controller;
use App\Product;
use App\Setting;
use App\SourceInvoice;
use App\SourceProduct;
use App\SourceStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SourceInvoiceController extends Controller
{
    public function billingName($id){
        // $name = request()->get('billingToName');
        $billingToName = Client::where('id',$id)->first();
        return response()->json($billingToName);
    }

    public function productName(){
        $productName = request()->get('productName');
        $productsName = Product::where('name',$productName)->first();
        return response()->json($productsName);
    }

    public function sourceCreate(){
        $products = DemoData::all();
            foreach ($products as $product) {
                if(Auth::user()->email == $product->created_by){
                    $product->delete();
                }
        }
        $sourceStatus = SourceStatus::latest()->get();
        $setting = Setting::orderBy('id','desc')->first();
        $billingsTo = Client::latest()->get();
        return view('admin.invoice.source.create',[
            'sourceStatus' => $sourceStatus,
            'setting' => $setting,
            'billingsTo' => $billingsTo,
        ]);
    }

    public function saveData(){
        $serial =  request()->get('serial');
        $name =  request()->get('name');
        $details =  request()->get('details');
        $price =  request()->get('price');
        $qty =  request()->get('qty');
        $total =  request()->get('price') * request()->get('qty');

       DemoData::create([
         "serial" => $serial,
         "name" => $name,
         "details" => $details,
         "price" => $price,
         "qty" => $qty,
         "total" => $total,
         "created_by" => Auth::user()->email,
       ]);

        $products = DemoData::all();
        // $sum = 
        return response()->json([
            'view' => view('includes.products', compact('products'))->render()
        ],200);
     }

     public function removeData(){
        $id = request()->get('id');
        DemoData::where('id',$id)->delete();
        $products = DemoData::all();
            return response()->json([
                'view' => view('includes.products', compact('products'))->render()
            ],200);
    }


    public function sourceStore(Request $request){
       $sourceInvoice = SourceInvoice::create([
            'billing_from_name' => $request->billing_from_name,
            'billing_from_phone' => $request->billing_from_phone,
            'billing_from_address' => $request->billing_from_address,
            'billing_to_name' => $request->billing_to_name,
            'billing_to_phone' => $request->billing_to_phone,
            'billing_to_address' => $request->billing_to_address,
            'payment_method' => $request->payment_method,
            'due_date' => $request->due_date,
            'source_status_id' => $request->source_status_id,
            'notes' => $request->notes,
            'terms_condition' => $request->terms_condition,
            'signature' => $request->signature,
            'position' => $request->position,
            'sub_total' => $request->sub_total,
            'tax' => $request->tax,
            'shipping_cost' => $request->shipping_cost,
            'discount' => $request->discount,
            'grand_total' => $request->grand_total,
            'amout_paid' => $request->amout_paid,
            'total_due' => $request->total_due,
        ]);
        $products = DemoData::get();
        foreach($products as $product){
            SourceProduct::create([
                'source_invocie_id' => $sourceInvoice->id,
                'product_name' => $product->name,
                'description' => $product->details,
                'quantity' => $product->qty,
                'price' => $product->price,
                'total' => $product->qty * $product->price,
            ]);
        }
        return back()->with('alert-success','Source Invoice Addedd Successfully');
    }
}
