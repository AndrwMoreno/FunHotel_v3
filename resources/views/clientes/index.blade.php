<!-- Vista principal -->
@extends('layouts.app')
<!-- extendido del home -->
@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Datos clientes</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">

                    @include('clientes.create')
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">
                        Registrar <i class="bi bi-plus-circle"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Botones</h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Segundo Nombre</th>
                            <th>Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Tipo documento</th>
                            <th>Documento</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->primerNombre }}</td>
                                <td>{{ $cliente->segundoNombre }}</td>
                                <td>{{ $cliente->primerApellido }}</td>
                                <td>{{ $cliente->segundoApellido }}</td>
                                <td>{{ $cliente->tipoDocumento }}</td>
                                <td>{{ $cliente->numeroDocumento }}</td>
                                <td>{{ $cliente->celular }}</td>
                                <td>{{ $cliente->correo }}</td>
                                <td>
                                    @include('clientes.update')
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalUpdate{{ $cliente->id }}">
                                        <i class="bi bi-pencil-square" id="icons"></i>
                                    </button>
                                    @include('clientes.delete')
                                    <button type="button" class="btn btn-danger"  data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $cliente->id }}">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
@endsection
