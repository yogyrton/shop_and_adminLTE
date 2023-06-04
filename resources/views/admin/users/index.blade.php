@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('users.create') }}">Добавить</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Отчество</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Возраст</th>
            <th scope="col">Пол</th>
            <th scope="col">Адрес</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)

            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->patronymic }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->gender === 1 ? 'Мужской' : 'Женский' }}</td>
                <td>{{ $user->address }}</td>


                <td>
                    <form action="{{ route('users.edit', $user) }}" method="get">
                        @csrf

                        <button type="submit">Редактировать</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('users.destroy', $user) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Удалить</button>
                    </form>
                </td>

            </tr>

        @endforeach

        </tbody>
    </table>

@endsection
