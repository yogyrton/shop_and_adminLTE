@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('users.index') }}">Назад</a>

    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Имя</label>
            <input type="text" class="form-control" name="name" value="{{ old
            ('name') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email (Для входа)</label>
            <input type="email" class="form-control" name="email" value="{{ old
            ('email') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Пароль (Для входа)</label>
            <input type="password" class="form-control" name="password" value="{{ old
            ('password') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Отчество</label>
            <input type="text" class="form-control" name="patronymic" value="{{ old
            ('patronymic') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Фамилия</label>
            <input type="text" class="form-control" name="last_name" value="{{ old
            ('last_name') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Возраст</label>
            <input type="number" class="form-control" name="age" value="{{ old
            ('age') }}">
        </div>

        <select class="form-select" name="gender" aria-label="Default select example">
            <option value="1">Мужской</option>
            <option value="2">Женский</option>
        </select>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес</label>
            <input type="text" class="form-control" name="address" value="{{ old
            ('address') }}">
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
