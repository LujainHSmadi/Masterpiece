<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Cart;
use App\Models\MainOrder;
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
            if ($user->isNotEmpty()) {
                return view('pages.checkout', compact('user', 'total'));
            } else {
                return redirect('/')->withFailure(__('empty cart'));
            }
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




            $MainOrder = MainOrder::create([
                'user_id' => auth()->user()->id,
                'product_quantity' => $user->count(),
                'order_total_price' => $total,
            ]);
            // return $MainOrder ;
            foreach ($user as $key => $value) {
                Order::create([
                    'main_order_id' => $MainOrder->id,
                    'user_id' => auth()->user()->id,
                    'product_id' => $value->product_id,
                    'product_quantity' => $value->quantity,
                    'order_total_price' => $value->sub_total * $value->quantity,
                ]);
            }
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
        $order = Order::find($order->id);
        $order->delete();
        return redirect()->back()->with('status', 'Order deleted successfully');
    }

    public function viewOrders()
    {

        $OrderJoin = Order::join('users', 'orders.user_id', '=', 'users.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->get(['orders.*',  'products.name as productName', 'products.id as product_id', 'products.price', 'users.name as UserName', 'users.address',  'users.phonenumber', 'users.email']);
        //    dd($OrderJoin);

        return view('admin.view_all', compact('OrderJoin'));
    }

    public function cancel($id)
    {

        $order = Order::find($id);
        $order->order_status = 4;
        $order->save();
        return redirect()->back()->with('status', 'Order cancelled successfully');
    }
    public function process($id)
    {
        $order = Order::find($id);
        $order->order_status = 1;
        $order->save();
        return redirect()->back()->with('status', 'Order processed successfully');
    }
    public function delevered($id)
    {
        $order = Order::find($id);
        $order->order_status = 3;
        $order->save();
        return redirect()->back()->with('status', 'Order delivered successfully');
    }
    public function shipped($id)
    {
        $order = Order::find($id);
        $order->order_status = 2;
        $order->save();
        return redirect()->back()->with('status', 'Order shipped successfully');
    }
    public function pending($id)
    {
        $order = Order::find($id);
        $order->order_status = 0;
        $order->save();
        return redirect()->back()->with('status', 'Order pending successfully');
    }
}
