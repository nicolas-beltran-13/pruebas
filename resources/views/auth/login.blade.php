@php
    $hideNavFooter = true;
@endphp

@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
    <div class="login-container">
        <div class="login-form">
            <h2>INICIAR SESIÓN</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Usuario / Correo</label>
                    <input type="text" id="email" name="email" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="btn-login">ENTRAR</button>

                <div class="register-link">
                    <p>¿No tienes cuenta?</p>
                    <a href="{{ route('register') }}">Regístrate</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection