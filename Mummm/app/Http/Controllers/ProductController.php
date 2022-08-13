<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $Productjoin = DB::table('products')->join('kitchens', 'products.kitchen_id', '=', 'kitchens.id')->select('products.*', 'kitchens.name as kitchen_name')->get();
        // dd($Productjoin);
        return view('admin.productView', compact('Productjoin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kitchens = DB::table('kitchens')->get();
        return view('admin.product_Create')->with('kitchens', $kitchens);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('public/Productimages');
            $image->move($destinationPath, $name);
            $product->image = $name;
            $product->price = $request->price;
            $product->kitchen_id = $request->category_id;
            $product->save();
            return redirect('/product')->with('success', 'Product has been added');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $Productjoin = DB::table('products')->join('kitchens', 'products.kitchen_id', '=', 'kitchens.id')->select('kitchens.description as kitchen_description')->where('products.id', $id)->get();
        $related_products = Product::where('kitchen_id', $product->kitchen_id)->inRandomOrder()->Limit(3)->get();

        return view('pages.singleProduct', compact('product', 'related_products', 'Productjoin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Productjoin = DB::table('products')->join('kitchens', 'products.kitchen_id', '=', 'kitchens.id')->select('products.*', 'kitchens.name as kitchen_name')->where('products.id', $id)->get();
        $kitchens = DB::table('kitchens')->get();

        return view('admin.product_Edit', compact('Productjoin', 'kitchens'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('public/Productimages');
            $image->move($destinationPath, $name);
            $product->image = $name;
        }
        $product->price = $request->price;
        $product->kitchen_id = $request->category_id;
        $product->save();
        return redirect('/product')->with('success', 'Product has been added');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product')->with('success', 'Product has been deleted Successfully');
    }
}
