@extends('admin.layouts.layout')

@section('content')

    <a href="{{ route('categories.index') }}">Назад</a>

    <form action="{{ route('categories.update', $category) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Редактировать категорию</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{
            $category->title }}">
        </div>

        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>

@endsection
