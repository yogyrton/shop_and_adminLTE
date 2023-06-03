@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('colors.create') }}">Добавить</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>

        @foreach($colors as $color)

            <tr>
                <th scope="row">{{ $color->id }}</th>
                <td>{{ $color->title }}</td>

                <td>
                    <form action="{{ route('colors.edit', $color) }}" method="get">
                        @csrf

                        <button type="submit">Редактировать</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('colors.destroy', $color) }}" method="post">
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
