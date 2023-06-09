@extends('admin.layouts.layout')

@section('content')

    <a href="{{ route('products.index') }}">Назад</a>

    <form action="{{ route('products.update', $product) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Редактировать товар</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{
            $product->title }}">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Количество товара</label>
            <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{
            $product->quantity }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Цена</label>
            <input type=number class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{
            $product->price }}">
        </div>

        <div class="form-group">
            <label>Категория</label>
            <select  name="category_id"  style="width: 100%;">
                @foreach($categories as $category)
                    <option @selected($category->id === $product->category_id) value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>

@endsection
