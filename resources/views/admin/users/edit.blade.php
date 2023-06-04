@extends('admin.layouts.layout')

@section('content')

    <a href="{{ route('users.index')}}">Назад</a>

    <form action="{{ route('users.update', $user) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Имя</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email (Для входа)</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Отчество</label>
            <input type="text" class="form-control" name="patronymic" value="{{ $user->patronymic}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Фамилия</label>
            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Возраст</label>
            <input type="number" class="form-control" name="age" value="{{ $user->age}}">
        </div>

        <select class="form-select" name="gender" aria-label="Default select example">
            <option @selected($user->gender === 1) value="1">Мужской</option>
            <option @selected($user->gender === 2) value="2">Женский</option>
        </select>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес</label>
            <input type="text" class="form-control" name="address" value="{{ $user->address}}">
        </div>

        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>

@endsection
