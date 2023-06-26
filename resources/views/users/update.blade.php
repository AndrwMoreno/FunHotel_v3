<!-- Modal -->
<div class="modal fade" id="modalUpdate{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCreateLabel">Editar usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="{{ route('users.update', $user->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                    </div>
                    <div class="col-md-6">
                        <label for="second_name" class="form-label">Segundo nombre</label>
                        <input type="text" class="form-control" name="second_name" id="second_name"
                            value="{{ $user->second_name }}">
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="surname" id="surname"
                            value="{{ $user->surname }}">
                    </div>
                    <div class="col-md-6">
                        <label for="second_surname" class="form-label">Segundo apellido</label>
                        <input type="text" class="form-control" name="second_surname" id="second_surname"
                            value="{{ $user->second_surname }}">
                    </div>
                    <div class="col-md-6">
                        <label for="birthday" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="birthday" id="birthday"
                            value="{{ $user->birthday }}">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password"
                            value="{{ $user->password }}">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Confirmar contraseña</label>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' =>
                        'form-control'))
                        !!}
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>