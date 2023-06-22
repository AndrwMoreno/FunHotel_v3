@extends('layouts.app')
@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Datos habitaciones</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    @include('habitaciones.create')
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modalCreate">Registrar <i class="bi bi-plus-circle"></i>
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
                            <th>Numero</th>
                            <th>Descripcion</th>
                            <th>Categoria</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($habitaciones as $habitacion)
                            <tr>
                                <td>{{ $habitacion->numeroHabitacion }}</td>
                                <td>{{ $habitacion->descripcion }}</td>
                                <td>{{ $habitacion->categoria->nombre }}</td>
                                <td>{{ $habitacion->estado }}</td>
                                <td>

                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalUpdate{{ $habitacion->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $habitacion->id }}">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </td>
                                @include('habitaciones.edit')
                                @include('habitaciones.delete')
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
