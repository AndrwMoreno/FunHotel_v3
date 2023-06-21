<!-- Actualiza y elimina -->
<!-- Modal -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <div class="modal fade" id="EDITAR{{ $cliente->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR CLIENTE</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('clientes.update', $cliente->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          <!--Clave evita error -->
          @method('PUT')
          <!-- Metodo para actualizar -->
          <div class="modal-body">
            <!--BS5-form-input -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Nombre</label>
                  <input type="text" class="form-control" name="primernombre" id="" aria-describedby="helpId"
                    placeholder="" value="{{ $cliente->primerNombre }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Segundo Nombre</label>
                  <input type="text" class="form-control" name="segundonombre" id="" aria-describedby="helpId"
                    placeholder="" value="{{ $cliente->segundoNombre }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Primer Apellido</label>
                  <input type="text" class="form-control" name="primerapellido" id="" aria-describedby="helpId"
                    placeholder="" value="{{ $cliente->primerApellido }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Segundo Apellido</label>
                  <input type="text" class="form-control" name="segundoapellido" id="" aria-describedby="helpId"
                    placeholder="" value="{{ $cliente->segundoApellido }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Tipo documento</label>
                  <select class="form-control" name="tipodocumento" id="tipodocumento" required>
                    <option selected value="{{ $cliente->Tipodocumento }}">
                      {{ $cliente->tipoDocumento }}</option>
                    <option value="CC">Cédula ciudadana</option>
                    <option value="CE">Cédula extranjera</option>
                    <option value="TI">Tarjeta Identidad</option>
                    <option value="NIT">Nit</option>
                    <option value="PA">Pasaporte</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Documento</label>
                  <input type="text" class="form-control" name="documento" id="" aria-describedby="helpId"
                    placeholder="" value="{{ $cliente->documento }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Celular</label>
                  <input type="text" class="form-control" name="celular" id="" aria-describedby="helpId" placeholder=""
                    value="{{ $cliente->celular }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustomUsername" class="form-label">Correo</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="email" placeholder="Correo" class="form-control" id="validationCustomUsername"
                    name="correo" aria-describedby="inputGroupPrepend" value="{{ $cliente->correo }}" required>
                </div>
              </div>
            </div><br>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>