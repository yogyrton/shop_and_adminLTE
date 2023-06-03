@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('tags.create') }}">Добавить</a>

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

        @foreach($tags as $tag)

            <tr>
                <th scope="row">{{ $tag->id }}</th>
                <td>{{ $tag->title }}</td>

                <td>
                    <form action="{{ route('tags.edit', $tag) }}" method="get">
                        @csrf

                        <button type="submit">Редактировать</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('tags.destroy', $tag) }}" method="post">
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
