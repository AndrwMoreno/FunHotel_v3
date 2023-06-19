@extends('layouts.app')
@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Datos grupos</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <a href="{{ route('groups.create') }}" class="btn btn-primary mb-3">Registrar <i
                            class="bi bi-plus-circle"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($groups as $group)
                        <div class="card h-100">
                            {{-- <img src="{{ asset('assets/images/logoSena.png') }}" class="card-img-top logo-img" alt="Logo"> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $group->name }}</h5>
                                <p>Cantidad de usuarios: {{ $group->users()->count() }}</p>
                                <a href="{{ route('groups.show', $group->id) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-success">Editar Nombre</a>
                                {{-- <a href="{{ route('groups.destroy', $group->id) }}" class="btn btn-danger">Eliminar</a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
