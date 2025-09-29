@php
    $hideNavFooter = true;
@endphp

@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
    <div class="register-container">
        <div class="register-form">
            <h2>REGISTRAR NUEVO CLIENTE</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="numIde">Número de Identificación:</label>
                    <input type="text" id="numIde" name="numIde" required>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>

                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" required>
                </div>

                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" required>
                </div>

                <button type="submit" class="btn-register">GUARDAR</button>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection