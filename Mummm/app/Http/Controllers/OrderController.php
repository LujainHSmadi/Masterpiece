<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::id()) {
            $user = Cart::where('user_id', auth()->user()->id)
                ->join('users', 'carts.user_id', '=', 'users.id')
                ->join('products', 'carts.product_id', '=', 'products.id')
                ->get(['carts.sub_total', 'carts.quantity', 'products.image', 'products.name as productName', 'products.id as product_id', 'products.price', 'users.name', 'users.address', 'users.id as user_id', 'users.phonenumber', 'users.email']);
            $total = Cart::where('user_id', auth()->user()->id)->pluck('sub_total')->sum();
            // dd($user);
            if( $user->isNotEmpty())
            return view('pages.checkout', compact('user', 'total'));
            else
            return redirect('/')->withFailure(__('empty cart'));


        } else {
            return redirect()->route('login')->withFailure(__('You must login to see this page'));
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::id()) {
            $user = Cart::where('user_id', auth()->user()->id)
                ->join('users', 'carts.user_id', '=', 'users.id')
                ->join('products', 'carts.product_id', '=', 'products.id')
                ->get(['carts.sub_total', 'carts.quantity', 'products.image', 'products.name as productName', 'products.id as product_id', 'products.price', 'users.name', 'users.address', 'users.id as user_id', 'users.phonenumber', 'users.email']);
            $total = Cart::where('user_id', auth()->user()->id)->pluck('sub_total')->sum();
            // dd($user[0]->user_id);
            

            $order = new Order();
            $order->user_id = $user[0]->user_id;
            $order->product_id = $user[0]->product_id;
            $order->product_quantity = $user[0]->quantity;
            $subtotal = Cart::where('user_id', auth()->user()->id)->pluck('sub_total')->sum();
            $order->order_total_price = $subtotal;
            $order->order_status = 0;
            $order->user_id = $user[0]->user_id;
            $order->save();

            Alert::success('Congrats', 'You\'ve Successfully placed an order');

            $cartItem = Cart::where('user_id', Auth::id())->get();
            Cart::destroy($cartItem);

            return redirect('/')->with('status', 'Order placed successfully');

        } else {
            return redirect()->route('login')->withFailure(__('You must login to see this page'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
