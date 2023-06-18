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

                    <a class="btn btn-primary" href="/create-user">Registrar <i class="bi bi-plus-circle"></i></a>

                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Botones</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>Segundo nombre</th>
                            <th>Apellido</th>
                            <th>Segundo apellido</th>
                            <th>Fecha de nacimiento</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->second_name }}</td>
                                <td>{{ $user->surname }}</td>
                                <td>{{ $user->second_surname }}</td>
                                <td>{{ $user->birthday }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->roles->count() > 0)
                                        @foreach ($user->roles as $role)
                                            {{-- <span class="badge rounded-pill bg-dark">{{ $role->name }}</span> --}}
                                            <span class="badge rounded-pill bg-dark">{{ $user->role_name }}</span>
                                            <span class="badge rounded-pill bg-primary">{{ $user->role_id }}</span>
                                            {{-- <span class="badge rounded-pill bg-primary">{{ $role->id }}</span> --}}
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
