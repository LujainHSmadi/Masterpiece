<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::id()) {
            $cartItems = Cart::orderBy('carts.id', 'ASC')
                ->where('user_id', auth()->user()->id)
                ->join('users', 'carts.user_id', '=', 'users.id')
                ->join('products', 'carts.product_id', '=', 'products.id')
                ->get(['carts.id', 'carts.sub_total', 'carts.quantity', 'products.image', 'products.name', 'products.price']);

            $total = Cart::where('user_id', auth()->user()->id)->pluck('sub_total')->sum();
            $sum_quantity = Cart::where('user_id', auth()->user()->id)->pluck('quantity')->sum();

            // dd($sum_quantity);
            return view('pages.cart', compact('cartItems', 'total','sum_quantity'));

        } else {
            return redirect()->route('login')->withFailure(__('You must login to see this page'));
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::id()) {

            $price = Product::find($request->id);
            if ($cart = Cart::where('user_id', auth()->user()->id)->Where('product_id', $request->id)->first()) {
                $cart->quantity = $cart->quantity + $request->quantity;
                $cart->sub_total = $cart->sub_total + (($request->quantity) * ($price->price ?? 0));
                $subtotal = Cart::where('user_id', auth()->user()->id)->pluck('sub_total')->sum();
                $cart->update();
                return redirect()->back();
            } else {
                $cart = new Cart();
                $cart->user_id = auth()->user()->id;
                $cart->product_id = $request->id;
                $cart->price = $price->price ?? 0;
                $cart->quantity = $request->quantity;
                $cart->sub_total = ($request->quantity) * ($price->price ?? 0);
                $cart->save();
                return redirect(url()->previous() . "#$request->product_id");
            }
        } else {
            return redirect()->route('login')->withFailure(__('You must login to purchase this product'));

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Cart $cart, Request $request)
    {

        $cart->quantity = (($cart->quantity) + 1);
        $cart->sub_total = ($cart->quantity) * ($cart->price);
        $cart->update();
        return redirect()->route('cart.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index');

    }

    public function decreaseValue( $id)
    {
        // dd($cart->all());
           $cart=  Cart::find($id);
        $cart->quantity -=   1;
        // dd($cart->quantity);

        $cart->sub_total = ($cart->quantity) * ($cart->price);
        $cart->update();
        return redirect()->route('cart.index');

    }

}
