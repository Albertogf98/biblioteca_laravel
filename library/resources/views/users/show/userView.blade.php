@extends('layouts.master')
@section('title', 'Libros prestados')
@section('content')
    <h3 style="text-align: center">Listado de tus préstamos</h3>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Fecha_Préstamo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usersWithBooks as $key => $user)
            <tr>
                <td>{{ $user->title }}</td>
                <td>{{ $user->author }}</td>
                <td>{{ $user->editorial }}</td>
                @foreach($user->users as $pivot)
                    <td>{{ $pivot->pivot->lendingDate  }}</td>
            </tr>
        @endforeach
        @endforeach
        </tbody>
    </table>
@endsection
