@extends('layouts.app')

@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Datos roles</h6>
            </div>
            @can('role-create')
                <div class="col-md-4">
                    <div class="float-end d-none d-md-block">
                        <a class="btn btn-primary" href="/create-rol">Registrar <i class="bi bi-plus-circle"></i></a>
                    </div>
                </div>
            @endcan
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
                    style="
                    border-collapse: collapse;
                    border-spacing: 0;
                    width: 100%;">

                    <thead>
                        <th>No</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </thead>

                    <tbody>
                        @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a class="btn btn-success" href="/show-rol/{{ $role->id }}"><i class="bi bi-info-circle"></i></a>
                                    @can('role-edit')
                                        <a class="btn btn-warning" href="/edit-rol/{{ $role->id }}"><i class="bi bi-pencil-square"></i></a>
                                    @endcan
                                    {{-- @can('role-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                            $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            @endcan --}}
                                    @can('role-delete')
                                        <form method="POST" action="{{ route('roles.destroy', $role->id) }}"
                                            style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                        </form>
                                    @endcan

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    {!! $roles->render() !!}
@endsection
