<!-- Modal -->
<div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCreateLabel">Registrar nuevo servicio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('habitaciones.store') }}" method="post" enctype="multipart/form-data"
                    class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="numeroHabitacion">Numero de Habitacion</label>
                        <input class="form-control" type="text" name="numeroHabitacion" id="numeroHabitacion">
                    </div>
                    <div class="col-md-6">
                        <label for="descripcion">Descripcion</label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion">
                    </div>
                    <div class="col-md-6">
                        <!-- Select idCategoria -->
                        <label for="idCategoria">Categoria</label>
                        <select class="form-select" name="idCategoria" id="idCategoria">
                            <option value="" selected disabled>Seleccione</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        {{-- <label for="estado">Estado</label>
                        <select class="form-select" name="estado" id="estado">
                            <option value="" selected disabled>{{ \App\Models\Habitacion::Disponible }}</option>
                        </select> --}}
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" placeholder="Disponible" disabled>
                        <input type="hidden" id="estado" name="estado" value="{{ \App\Models\Habitacion::Disponible}}">

                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Registrar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
