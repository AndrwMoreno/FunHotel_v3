<!-- Modal -->
<div class="modal fade" id="modalUpdate{{ $habitacion->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCreateLabel">Editar habitación</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="{{ route('habitaciones.update', $habitacion->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="fecha_venta" class="form-label">Número de habitación</label>
                        <input type="text" class="form-control" name="numeroHabitacion" id="numeroHabitacion"
                            value="{{ $habitacion->numeroHabitacion }}">
                    </div>
                    <div class="col-md-12">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea type="text" class="form-control" name="descripcion" id="descripcion">{{ $habitacion->descripcion }}</textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Categoria</label>
                        <select class="form-control" name="idServicio" id="idServicio">
                            <option disabled value="">Seleccione</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" @if ($categoria->id == $habitacion->idCategoria) selected @endif>
                                    {{ $categoria->nombre }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-12">
                        <label for="estado" class="form-label">Estado:</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="activo" {{ $habitacion->estado === 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ $habitacion->estado === 'inactivo' ? 'selected' : '' }}>Inactivo
                            </option>
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
