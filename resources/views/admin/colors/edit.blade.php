@extends('admin.layouts.layout')

@section('content')

    <a href="{{ route('colors.index') }}">Назад</a>

    <form action="{{ route('colors.update', $color) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Редактировать цвет</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{
            $color->title }}">
        </div>

        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>

@endsection
