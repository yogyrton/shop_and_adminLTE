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

            <div class="form-group">
                <label>Категория</label>
                <select  name="category_id"  style="width: 100%;">
                    <option value={{ null }}>Выберите категорию</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Теги</label>
                <select class="tags" name="tags[]" multiple="multiple"  data-placeholder="Выберите теги" style="width: 100%;">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label>Цвета</label>
                <select class="colors" multiple="multiple" name="colors[]" data-placeholder="Выберите цвета" style="width: 100%;">
                    @foreach($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>



@endsection
