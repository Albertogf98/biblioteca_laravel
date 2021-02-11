@extends('layouts.master')
@section('title', 'Aministrador')
@section('content')
    <h1>Bienvenido a la página del administrador</h1>
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
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary">
        <a style="text-decoration: none; color: #fff" href="{{ url('/admin/create') }}">Añadir préstamo</a>
    </button>
@endsection
