@extends('admin.layouts.layout')

@section('content')

    <a href="{{ route('tags.index') }}">Назад</a>

    <form action="{{ route('tags.update', $tag) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Редактировать тег</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{
            $tag->title }}">
        </div>

        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>

@endsection
