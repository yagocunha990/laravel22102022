<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StorePurchaseRequest;
use App\Http\Requests\Purchase\UpdatePurchaseRequest;

class PurchaseController extends Controller{
    public function index(){
        $purchases = Purchase::get();
        return view('admin.purchase.index', compact('purchases'));
     }
 //////////////////////////////////////
 public function create(){
    $providers = Provider::get();
     return view('admin.purchase.create', compact('providers'));
  }
 /////////////////////////////////////
     public function store (StoreRequest $request){

        $purchase =  Purchase::create($request->all());

        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $price = $request->price;

        $count = 0;
        while(  $count< count($product_id)){
            $details = new PurchaseDetails();
            $details->purchase_id = $purchase_id;
            $details->product_id = $product_id[$count];
            $details->quantity = $quantity[$count];
            $details->price = $price[$count];
            $details->save();
            $count = $count + 1;
        }

        return redirect()->route('purchases.index');
     }
////////////////////////////////////////////////////////////

     ////////////////////////////////////////////////////////////////
     public function show (Purchase $purchase){
         return view('admin.purchase.show', compact('purchase'));
     }
 ////////////////////////////////
     public function edit(Purchase $purchase){
        $providers = Provider::get();
         return view('admin.purchase.show', compact('purchase'));

     }
 /////////////////////////////////////
     public function update(UpdateRequest $request, Purchase $purchase){
        // $purchase->update($request->all());

         //return redirect()->route('purchases.index');
     }
 ////////////////////////////////
     public function destroy(Purchase $purchase){
        // $purchase->delete();
        // return redirect()->route('purchases.index');

     }
}
