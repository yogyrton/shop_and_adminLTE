<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;

class AdminController extends Controller
{
    public function __invoke()
    {
        $categories = Category::query()->count();
        $colors = Color::query()->count();
        $tags = Tag::query()->count();
        $products = Product::query()->count();
        $users = User::query()->count();

        return view('admin.index', compact('colors', 'categories', 'products', 'tags', 'users'));
    }
}
