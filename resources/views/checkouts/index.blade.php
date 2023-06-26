@extends('home')
@section('content')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Datos Check-out</h6>
        </div>

        <div class="col-md-4">
            <div class="float-end d-none d-md-block">

                @include('checkouts.create')
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
                        <th>Fecha de salida</th>
                        <th>Id Check-in</th>
                        <th>Id Metodo pago</th>
                        <th>Id Venta</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($checkouts as $checkout)
                    <tr>
                        <td>{{$checkout->fecSalida}}</td>
                        <td>{{$checkout->idCheckin}}</td>
                        <td>{{$checkout->idMetodoPago}}</td>
                        <td>{{$checkout->idVenta}}</td>
                        <td>
                            @include('checkouts.info')
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit{{$checkout->id}}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{$checkout->id}}">
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