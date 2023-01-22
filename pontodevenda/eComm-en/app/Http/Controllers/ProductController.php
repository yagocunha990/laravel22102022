<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$products = Product::where('id','1')->get();
        $products = Product::get();
        return view('product',compact('products'));
    }
    ////////////////////////////////////////////////
    public function detail($id){
        $product =  Product::find($id);
        return view('detail', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    //////////////////////////////FUNÇOES CART///////////////////////
    function addToCart(Request $req){
        if ($req->session()->has('user')) {
          $cart = new Cart();
          $cart->user_id = $req->session()->get('user')['id'];
          $cart->product_id = $req->product_id;
          $cart->save();
          return redirect('/');
        } else {

        }

    }

    ////////////////
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();



    }
    /////////////
    function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function OrderNow(){
        $userId=Session::get('user')['id'];
        $total = $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->select('products.*','cart.id as cart_id')
         ->sum('products.price');

         return view('ordernow',['total'=>$total]);
    }

    ///////////////////////////////////////////
    function orderPlace(Request $req){
        $userId=Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();

        foreach ($allCart as $cart ) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');

    }


    function myOrders(){
        $userId=Session::get('user')['id'];
        $orders = DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();

         return view('myorders',['orders'=>$orders]);
    }


}
