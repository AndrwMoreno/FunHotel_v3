<!-- Modal -->
<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCreateLabel">Agregar una venta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="{{ route('ventas.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="fecha" class="form-label">Fecha de la venta</label>
                        <input type="datetime-local" class="form-control" name="fecha_venta" id="fecha_venta">
                    </div>
                    <div class="col-md-6">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" disabled value="Activo" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="nombre" class="form-label">Id servicio</label>
                        <select class="form-control" name="idServicio" id="idServicio">
                            <option selected @disabled(true) value="">Seleccione</option>
                            @foreach ($servicios as $servicio)
                                <option value="{{ $servicio->id }}">{{ $servicio->nombre }}
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
