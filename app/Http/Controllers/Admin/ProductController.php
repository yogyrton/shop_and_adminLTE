<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();

        return view('admin.products.create', compact('colors', 'categories'));
    }

    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();

        Product::query()->create($data);

        return to_route('products.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $colors = Color::all();

        return view('admin.products.edit', compact('product', 'categories', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->update($data);

        return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('products.index');
    }
}
