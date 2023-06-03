@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('colors.index') }}">Назад</a>

    <form action="{{ route('colors.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Название цвета</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old
            ('title') }}">
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
