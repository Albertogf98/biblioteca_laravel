@extends('layouts.master')
@section('title', 'Editar Préstamo')
@section('content')

    @method('put')
    @csrf
    <h1>Página para editar préstamos</h1>
@endsection
