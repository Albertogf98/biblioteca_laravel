@extends('layouts.master')
@section('title', 'Bienvenido')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Bienvenido a la biblioteca Gandoy Florido</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
