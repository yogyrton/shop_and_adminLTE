<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorsStoreRequest;
use App\Http\Requests\ColorsUpdateRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function index()
    {
        $colors = Color::all();

        return view('admin.colors.index', compact('colors'));
    }

    public function create()
    {
        return view('admin.colors.create');
    }

    public function store(ColorsStoreRequest $request)
    {
        $data = $request->validated();

        Color::query()->create($data);

        return to_route('colors.index');
    }

    public function edit(Color $color)
    {
        return view('admin.colors.edit', compact('color'));
    }

    public function update(ColorsUpdateRequest $request, Color $color)
    {
        $data = $request->validated();

        $color->update($data);

        return to_route('colors.index');
    }

    public function destroy(Color $color)
    {
        $color->delete();

        return to_route('colors.index');
    }
}
