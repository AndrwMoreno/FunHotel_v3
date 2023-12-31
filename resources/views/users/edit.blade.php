@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar usuario {{ $user->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}">Volver</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hubo algunos problemas con tus datos de entrada.
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <div class="container">
        <form method="POST" action="{{ route('users.update', $user->id) }}" class="row g-3">
            @method('PATCH')
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" placeholder="Nombre" class="form-control" value="{{$user->name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Segundo Nombre:</strong>
                    <input type="text" name="second_name" placeholder="Segundo Nombre" class="form-control"value="{{$user->second_name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input type="text" name="surname" placeholder="Apellido" class="form-control" value="{{$user->surname}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Segundo Apellido:</strong>
                    <input type="text" name="second_surname" placeholder="Segundo Apellido" class="form-control"value="{{$user->second_surname}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de nacimiento:</strong>
                    <input type="date" name="birthday" placeholder="Fecha de nacimiento" class="form-control" value="{{$user->birthday}}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" placeholder="Email" class="form-control"value="{{$user->email}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Contraseña:</strong>
                    <input type="password" name="password" placeholder="Contraseña" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Confirmar Contraseña:</strong>
                    <input type="password" name="confirm-password" placeholder="Confirmar Contraseña" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rol:</strong>
                    {!! Form::select('roles[]', $roles, $userRoles, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection
