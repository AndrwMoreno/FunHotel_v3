<!-- Modal -->
<div class="modal fade" id="edit{{ $venta->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCreateLabel">Editar Venta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="{{ route('ventas.update', $venta->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="fecha_venta" class="form-label">Fecha de la venta</label>
                        <input type="text" class="form-control" name="fecha_venta" id="fecha_venta"
                            value="{{ $venta->fecha_venta }}">
                    </div>
                    <div class="col-md-6">
                        <label for="estado" class="form-label">Estado:</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="activo" {{ $venta->estado === 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ $venta->estado === 'inactivo' ? 'selected' : '' }}>Inactivo
                            </option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="" class="form-label">Servicio</label>
                        <select class="form-control" name="idServicio" id="idServicio">
                            <option disabled value="">Seleccione</option>
                            @foreach ($servicios as $servicio)
                                <option value="{{ $servicio->id }}" @if ($servicio->id == $venta->idServicio) selected @endif>
                                    {{ $servicio->nombre }}
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
