@extends('home')
@section('content')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Datos reservas</h6>
        </div>

        <div class="col-md-4">
            <div class="float-end d-none d-md-block">

                @include('reservas.create')
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
                        <th>Id</th>
                        <th>Id Habitacion</th>
                        <th>Id Cliente</th>
                        <th>Id Servicio</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservas as $reserva)
                    <tr>
                        <td>{{$reserva->id}}</td>
                        <td>{{$reserva->idHabitacion}}</td>
                        <td>{{$reserva->idCliente}}</td>
                        <td>{{$reserva->idServicio}}</td>
                        <td>{{$reserva->estado}}</td>
                        <td>
                            @include('reservas.info')
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit{{$reserva->id}}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{$reserva->id}}">
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

@endsection