<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(TagStoreRequest $request)
    {
        $data = $request->validated();

        Tag::query()->create($data);

        return to_route('tags.index');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(TagUpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();

        $tag->update($data);

        return to_route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return to_route('tags.index');
    }
}
