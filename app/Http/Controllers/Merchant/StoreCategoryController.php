<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\StoreCategory;
use Illuminate\Http\Request;

class StoreCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storeCategories = StoreCategory::where('merchant_id', auth()->guard('merchant')->id())->get();
        return view('merchant.storeCategory.storeCategoryList', ['storeCategories' => $storeCategories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::where('merchant_id', auth()->guard('merchant')->id())->get();
        return view('merchant.storeCategory.addCategoryStore', ['stores' => $stores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'store_id' => 'required|numeric',
            'name' => 'required'
        ]);

        $validated['merchant_id'] = auth()->guard('merchant')->id();
        StoreCategory::create($validated);
        return redirect()->route('merchant.store-category.index');
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
