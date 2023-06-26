<!-- Modal -->
<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar check-out</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="row g-3" action="{{route('checkouts.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="col-md-6">
            <label for="" class="form-label"> Fecha de salida</label>
            <input type="date" class="form-control" name="salida" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="col-md-6">
            <label for="" class="form-label">Id Check-in</label>
            <input type="number" class="form-control" name="checkin" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="col-md-6">
            <label for="" class="form-label">Id Metodo pago</label>
            <input type="number" class="form-control" name="metpago" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="col-md-6">
            <label for="" class="form-label">Id Venta</label>
            <input type="number" class="form-control" name="venta" id="" aria-describedby="helpId" placeholder="">
          </div>
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