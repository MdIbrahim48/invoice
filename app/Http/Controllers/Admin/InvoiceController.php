<?php

namespace App\Http\Controllers\Admin;

use App\DemoData;
use App\Http\Controllers\Controller;
use App\ShipmentStatus;
use App\SourceStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function sourceCreate(){
        $products = DemoData::all();
            foreach ($products as $product) {
                if(Auth::user()->email == $product->created_by){
                    $product->delete();
                }
        }
        $sourceStatus = SourceStatus::latest()->get();
        return view('admin.invoice.source.create',[
            'sourceStatus' => $sourceStatus
        ]);
    }

    public function shipmentCreate(){
        $shipmentStatus = ShipmentStatus::latest()->get();
        return view('admin.invoice.shipment.create',[
            'shipmentStatus' => $shipmentStatus
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

}
