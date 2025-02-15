<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\StoreCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('merchant_id', auth()->guard('merchant')->id())->get();
        return view('merchant.products.productList', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $view_data['stores'] = Store::where('merchant_id', auth()->guard('merchant')->id())->get();
        $view_data['categories'] = StoreCategory::where('merchant_id', auth()->guard('merchant')->id())->get();
        return view('merchant.products.addProduct', $view_data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'store_id' => 'required|numeric',
            'store_category_id' => 'required|numeric',
            'name' => 'required',
        ]);

        $validated['merchant_id'] = auth()->guard('merchant')->id();

        Product::create($validated);
        return redirect()->route('merchant.product-list.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
