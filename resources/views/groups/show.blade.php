<!-- resources/views/groups/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Grupo: {{ $group->name }}</h1>

        <!-- Mostrar información del grupo -->
        <p>Descripción: {{ $group->description }}</p>

        <!-- Usuarios del grupo -->
        <p>Usuarios:</p>
        <ul>
            @foreach ($group->users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>

        <!-- Botones de acción -->
        <div class="btn-group">
            <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-primary">Editar</a>

            <form action="{{ route('groups.destroy', $group->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('¿Estás seguro de eliminar este grupo?')">Eliminar</button>
            </form>
        </div>
    </div>
    <div class="container">
        <form action="{{ route('groups.addUser', $group->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="user_id">Select User</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>

    </div>
    <div class="container">
        <form action="{{ route('groups.users.remove', ['group' => $group->id, 'user' => 'USER_ID']) }}" method="POST">
            @csrf
            @method('DELETE')

            <label for="user_id">Select User:</label>
            <select name="user_id" id="user_id">
                <option value="">Select User</option>
                @foreach ($group->users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-danger">Remove User</button>
        </form>


    </div>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

    </div>
@endsection
