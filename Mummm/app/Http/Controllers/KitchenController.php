<?php

namespace App\Http\Controllers;

use App\Models\Kitchen;
use App\Models\Product;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Kitchen::all();
        return view('admin.category', compact('categories'));

    }
    /**
     * Show 3 kitchens in home.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCategory()
    {
        $categories = Kitchen::all();
        $popular_products = Product::inRandomOrder()->Limit(3)->get();

        return view('pages.home', compact('categories', 'popular_products'));
    }
    /**
     * Show all kitchens in kitchens page.
     *
     * @return \Illuminate\Http\Response
     */    
    public function allkitchens()
    {
        $categories = Kitchen::all();
        $popular_products = Product::inRandomOrder()->get();

        return view('pages.kitchens', compact('categories', 'popular_products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Kitchen();
        $category->name = $request->name;
        $category->description = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $category->image = $filename;
        }

        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Kitchen::find($id);
        $categories = Kitchen::all();
        $products = Product::where('Kitchen_id', $category->id)->get();
        return view('pages.allProducts', compact('products', 'categories'));

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Kitchen::find($id);
        return view('admin.category_edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Kitchen::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $category->image = $filename;
        }
        $category->update();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Kitchen::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
