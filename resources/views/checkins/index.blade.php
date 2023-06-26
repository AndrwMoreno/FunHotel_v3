@extends('home')
@section('content')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Datos Check-in</h6>
        </div>

        <div class="col-md-4">
            <div class="float-end d-none d-md-block">

                @include('checkins.create')
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
                        <th>Fecha de ingreso</th>
                        <th>Id Reserva</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($checkins as $checkin)
                    <tr>
                        <td>{{$checkin->id}}</td>
                        <td>{{$checkin->fecIngreso}}</td>
                        <td>{{$checkin->idReserva}}</td>
                        <td>
                            @include('checkins.info')
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit{{$checkin->id}}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{$checkin->id}}">
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