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
                <tr>
                    <td>{{ $users->title }}</td>
                    <td>{{ $users->author }}</td>
                    <td>{{ $users->editorial }}</td>
                    <td>{{ $users->lendingDate }}</td>
                </tr>
        </tbody>
    </table>
@endsection
