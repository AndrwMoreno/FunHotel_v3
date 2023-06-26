@extends('home')
@section('content')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Datos reservas</h6>
        </div>

        <div class="col-md-4">
            <div class="float-end d-none d-md-block">

                @include('pagos.create')
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
                        <th>Nombre Metodo de pago</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pagos as $pago)
                    <tr>
                        <td>{{$pago->id}}</td>
                        <td>{{$pago->nombre}}</td>
                        <td>
                            @include('pagos.info')
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit{{$pago->id}}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{$pago->id}}">
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