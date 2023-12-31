<!-- Modal Edit -->
<div class="modal fade" id="edit{{$reserva->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar reserva</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{route('reservas.update',$reserva->id)}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="" class="form-label"> Id Habitacion</label>
                        <input type="text" class="form-control" name="habitacion" id="" aria-describedby="helpId"
                            placeholder="" value="{{$reserva->idHabitacion}}">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="form-label">Id Servicio</label>
                        <input type="text" class="form-control" name="servicio" id="" aria-describedby="helpId"
                            placeholder="" value="{{$reserva->idServicio}}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Id Cliente</label>
                        <input type="text" class="form-control" name="cliente" id="" aria-describedby="helpId"
                            placeholder="" value="{{$reserva->idCliente}}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Estado</label>
                        <input type="text" class="form-control" name="estado" id="" aria-describedby="helpId"
                            placeholder="" value="{{$reserva->estado}}">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Delete -->
<div class="modal fade" id="delete{{$reserva->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar reserva</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('reservas.destroy',$reserva->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <!--Clave evita error -->
                @method('Delete')
                <div class="modal-body">
                    ¡¿Estas seguro de eliminar a <strong> {{ $reserva->nombre }} ?!</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>