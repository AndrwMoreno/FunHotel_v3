<!-- Modal -->
<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar reserva</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="row g-3" action="{{route('reservas.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="col-md-6">
            <label for="" class="form-label"> Id Habitacion</label>
            <input type="text" class="form-control" name="habitacion" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="col-md-6">
            <label for="" class="form-label">Id Servicio</label>
            <input type="text" class="form-control" name="servicio" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Id Cliente</label>
            <input type="text" class="form-control" name="cliente" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>