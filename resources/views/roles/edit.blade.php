@extends('layouts.app')
@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Editar rol {{ $role->name }}</h6>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}">Volver</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hubo algunos problemas con tus datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('roles.update', $role->id) }}" class="row g-3">
        @method('PATCH')
        @csrf

        <div class="col-md-6">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" placeholder="Nombre" class="form-control" value="{{ $role->name }}">
            </div>
        </div>
        <div class="col-md-6">
            <label for="estado">Estado</label>
            <select class="form-select" name="estado" id="estado">
                <option value="{{ \Spatie\Permission\Models\Role::Activo }}"
                    @if ($role->estado == \Spatie\Permission\Models\Role::Activo) selected @endif>Activo</option>
                <option value="{{ \Spatie\Permission\Models\Role::Inactivo }}"
                    @if ($role->estado == \Spatie\Permission\Models\Role::Inactivo) selected @endif>Inactivo</option>
            </select>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <strong>Permisos:</strong>
                <br>
                <div class="row">
                    @php $columnSize = ceil(count($permission) / 3); @endphp
                    @foreach ($permission->chunk($columnSize) as $column)
                        <div class="col-md-4">
                            @foreach ($column as $value)
                                <label>
                                    <input type="checkbox" name="permission[]" value="{{ $value->id }}" class="name"
                                        {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                    {{ $value->name }}
                                </label>
                                <br>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary"
                onclick="return confirm('¿Estás seguro de guardar los cambios?')">Guardar</button>
        </div>
    </form>
@endsection
