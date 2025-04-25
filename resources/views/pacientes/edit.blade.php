<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@extends('layout')

@section('title', 'Editar Paciente')

@section('content')
    <h1>Editar Paciente</h1>
    @include('pacientes._form', [
        'action' => route('pacientes.update', $paciente),
        'method' => 'PUT',
        'paciente' => $paciente,
        'buttonText' => 'Atualizar',
    ])
@endsection
