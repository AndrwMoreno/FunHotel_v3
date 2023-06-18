@extends('layouts.app')
@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Datos Ventas</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">

                    @include('ventas.create')
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
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
                            <th>ID</th>
                            <th>Fecha de Venta</th>
                            <th>Id servicio</th>
                            <th>Nombre del servicio</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($ventas as $venta)
                            <tr>
                                <td>{{ $venta->id }}</td>
                                <td>{{ $venta->fecha_venta }}</td>
                                <td>{{ $venta->idServicio }}</td>
                                <td>{{ $venta->servicio->nombre }}</td>
                                <td>{{ $venta->estado }}</td>
                                <td>
                                    @include('ventas.update')
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#edit{{ $venta->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    @include('ventas.delete')
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $venta->id }}">
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
