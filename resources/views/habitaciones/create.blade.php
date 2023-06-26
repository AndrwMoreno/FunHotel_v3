<!-- Modal -->
<div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCreateLabel">Registrar nueva habitación</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="{{ route('habitaciones.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="nombre" class="form-label">Número de habitacion</label>
                        <input type="text" class="form-control" name="numeroHabitacion" id="numeroHabitacion">
                    </div>
                    <div class="col-md-12">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea type="text" class="form-control" name="descripcion" id="descripcion"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" disabled value="Activo" class="form-control" name="estado" id="estado">
                    </div>
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Id categoria</label>
                        <select class="form-control" name="idCategoria" id="idCategoria">
                            <option selected @disabled(true) value="">Seleccione</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}
                                </option>
                            @endforeach
                        </select>
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
