@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('products.index') }}">Назад</a>

        <form action="{{ route('products.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название товара</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old
            ('title') }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Количество товара</label>
                <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old
            ('quantity') }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Цена</label>
                <input type=number class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old
            ('price') }}">
            </div>

            <select class="form-select" name="category_id" aria-label="Default select example">
                <option value="{{null}}" selected>Категория</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach

            </select>

            <select class="form-select" name="color_id" aria-label="Default select example">
                <option value="{{null}}" selected>Цвет</option>

                @foreach($colors as $color)
                   <option value="{{ $color->id }}">{{ $color->title }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>



@endsection
