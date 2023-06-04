@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('users.index') }}">Назад</a>



        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Имя</label>
            {{ $user->name }}
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email (Для входа)</label>
            {{ $user->email }}
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Отчество</label>
            {{ $user->patronymic }}
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Фамилия</label>
            {{ $user->last_name }}
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Возраст</label>
            {{ $user->age }}
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Пол</label>
            {{ $user->gender === 1 ? 'Мужской' : 'Женский'}}
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес</label>
            {{ $user->address }}
        </div>



@endsection
