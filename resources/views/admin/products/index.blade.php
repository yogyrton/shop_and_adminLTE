@extends('admin.layouts.layout')


@section('content')

    <a href="{{ route('products.create') }}">Добавить</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Количество</th>
            <th scope="col">Цена</th>
            <th scope="col">Категория</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>

        @foreach($products as $product)

            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->title }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->title }}</td>


                <td>
                    <form action="{{ route('products.edit', $product) }}" method="get">
                        @csrf

                        <button type="submit">Редактировать</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('products.destroy', $product) }}" method="post">
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
