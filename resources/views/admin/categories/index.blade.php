@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('categories.create') }}">Добавить</a>

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

        @foreach($categories as $category)

            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->title }}</td>

                <td>
                    <form action="{{ route('categories.edit', $category) }}" method="get">
                        @csrf

                        <button type="submit">Редактировать</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('categories.destroy', $category) }}" method="post">
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
