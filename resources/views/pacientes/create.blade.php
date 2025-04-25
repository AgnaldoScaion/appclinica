<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@extends('layout')

@section('title', 'Cadastrar Paciente')

@section('content')
    <h1>Cadastrar Paciente</h1>
    @include('pacientes._form', [
        'action' => route('pacientes.store'),
        'method' => 'POST',
        'buttonText' => 'Cadastrar',
    ])
@endsection
