@extends('layouts.master')
@section('title', 'Aministrador')
@section('content')
    <p> Bienvenido <strong>...</strong> Usuario tipo <strong>...</strong></p>
    <h3 style="text-align: center">Listado de los préstamos de la biblioteca</h3>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Fecha_préstamo</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($usersWithBooks as $user)
            @foreach($user->books as $book)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->secondName }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->editorial }}</td>
                    <td>{{ $book->pivot->lendingDate }}</td>

                    <td>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                    <td>
                        <button class="btn btn-warning">
                            <a style="text-decoration: none; color: #fff" href="/admin/edit/{{ $book->pivot->book_id }}">Editar</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-primary">
        <a style="text-decoration: none; color: #fff" href="{{ url('/admin/create') }}">Añadir préstamo</a>
    </button>
@endsection
