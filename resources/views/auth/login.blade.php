@extends('layouts.auth_app')
@section('title')
    Login
@endsection
@section('content')
    <div class="card card-primary">
            <div class="row">
                <div class="col-md-6 d-none d-lg-block "><br><br><br><h4 class="h6 text-gray-900 mb-6" style="font-family: 'Modak', cursive; margin-left: 45px; text-align: center; font-size: 30px;">Bienvenido a SYSMANT</h4>
                  <p style="margin-left: 45px; text-align: justify;">Este es un sistema de mantenimiento asistido por computadora que te ayudara a encontrar solución de problemas tecnicos desde su lugar de trabajo.</p></div>
                  <div class="col-md-6">
                    <div class="p-5">
                        <div>
                            <h4 class="h6 text-gray-900 mb-6" style="font-family: 'Modak', cursive; text-align:center; font-size: 36px;">SYSMANT</h4>
                          </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger p-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="email">Email</label>
                    <input aria-describedby="emailHelpBlock" id="email" type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           placeholder="Enter Email" tabindex="1"
                           value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" autofocus
                           required>
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>

                    </div>
                    <input aria-describedby="passwordHelpBlock" id="password" type="password"
                           value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                           placeholder="Enter Password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password"
                           tabindex="2" required>
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
