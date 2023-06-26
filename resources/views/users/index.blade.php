@extends('layouts.app')
@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Datos usuarios</h6>
        </div>

        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <a href="{{route('users.create')}}" class="btn btn-primary">
                    Registrar <i class="bi bi-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Botones</h4>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="
                    border-collapse: collapse;
                    border-spacing: 0;
                    width: 100%;
                ">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Fecha de nacimiento</th>
                        <th>Correo</th>
                        <th>Roles</th>
                        <!-- <th>Contraseña</th> -->
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{$user->second_name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->second_surname}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                            {{ $v }}
                            @endforeach
                            @endif
                        </td>
                        <!-- <td>{{$user->password}}</td> -->
                        <td>
                            @include('users.update')
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $user->id }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            @include('users.delete')
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $user->id }}">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end col -->
@endsection