@extends('layouts.blanklayout')

@section('content')
  <style>
    body {
    background-color: white;
    font-family: 'Segoe UI', sans-serif;
    height: 100vh;
    }

    .login-box {
    max-width: 400px;
    width: 100%;
    padding: 30px;
    border-radius: 12px;
    background-color: #fff;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .btn-login {
    background-color: #3D9FFF;
    border: none;
    }

    .btn-login:hover {
    background-color: #2388e1;
    }

    .login-title {
    color: #3D9FFF;
    font-weight: bold;
    text-align: center;
    margin-bottom: 25px;
    }

    label {
    color: #3D9FFF;
    font-weight: 600;
    }

    .error {
    color: red;
    font-size: 13px;
    }
  </style>

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="login-box">
    <h2 class="login-title">Iniciar Sesión</h2>
    <form method="POST" action="/login">
      @csrf

      <div class="mb-3">
      <label for="email" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
      @error('email')
      <div class="error">{{ $message }}</div>
    @enderror
      </div>

      <div class="mb-4">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" required>
      @error('password')
      <div class="error">{{ $message }}</div>
    @enderror
      </div>

      <button type="submit" class="btn btn-login w-100 text-white">Entrar</button>
    </form>
    </div>
  </div>
@endsection
