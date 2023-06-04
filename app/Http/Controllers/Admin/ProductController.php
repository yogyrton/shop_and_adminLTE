<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;

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
        $tags = Tag::all();

        return view('admin.products.create', compact('colors', 'categories', 'tags'));
    }

    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();
        $product = Product::query()->create($data);

        foreach ($data['tags'] as $tag) {
            ProductTag::query()->create([
                'product_id' => $product->id,
                'tag_id' => $tag,
            ]);
        }

        foreach ($data['colors'] as $color) {
            ColorProduct::query()->create([
                'product_id' => $product->id,
                'color_id' => $color,
            ]);
        }

        return to_route('products.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $colors = Color::all();
        $tags = Tag::all();

        return view('admin.products.edit', compact('product', 'categories', 'colors', 'tags'));
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
