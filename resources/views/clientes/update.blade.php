<!-- Actualiza y elimina -->
<!-- Modal -->
<div class="modal fade" id="modalUpdate{{ $cliente->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCreateLabel">Editar cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="{{ route('clientes.update', $cliente->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="primerNombre" class="form-label">Primer Nombre*</label>
                        <input type="text" class="form-control" name="primerNombre" id="primerNombre"
                            value="{{ $cliente->primerNombre }}">
                    </div>
                    <div class="col-md-6">
                        <label for="segundoNombre" class="form-label">Segundo Nombre</label>
                        <input type="text" class="form-control" name="segundoNombre"
                            id="segundoNombre"value="{{ $cliente->segundoNombre }}">
                    </div>
                    <div class="col-md-6">
                        <label for="primerApellido" class="form-label">Primer Apellido*</label>
                        <input type="text" class="form-control" name="primerApellido"
                            id="primerApellido"value="{{ $cliente->primerApellido }}">
                    </div>
                    <div class="col-md-6">
                        <label for="segundoApellido" class="form-label">Segundo Apellido</label>
                        <input type="text" class="form-control" name="segundoApellido"
                            id="segundoApellido"value="{{ $cliente->segundoApellido }}">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Tipo de documento</label>
                        <select id="tipoDocumento" name="tipoDocumento" class="form-select">
                            <option selected value="{{ $cliente->tipoDocumento }}" value="">
                                {{ $cliente->tipoDocumento }}</option>
                            <option value="CC">CC</option>
                            <option value="CE">CE</option>
                            <option value="TI">T.I</option>
                            <option value="PA">PA</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="numeroDocumento" class="form-label">Número de documento</label>
                        <input type="number" class="form-control" placeholder="00 000 000 000" name="numeroDocumento"
                            id="numeroDocumento" value="{{ $cliente->numeroDocumento }}">
                    </div>
                    <div class="col-md-6">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="number" class="form-control" name="celular" id="celular"
                            value="{{ $cliente->celular }}">
                    </div>
                    <div class="col-md-6">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo"
                            value="{{ $cliente->correo }}">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            </div>
        </div>
    </div>
</div>
