<!-- Modal -->
<head>
<script>
    $(document).ready(function() {
      function validarFormulario() {
        var habitacion = $('#habitacion').val().trim();
        var servicio = $('#servicio').val().trim();
        var cliente = $('#cliente').val();
        var estado = $('#estado').val().trim();

        if (
          habitacion === '' ||
          servicio === '' ||
          cliente === '' ||
          estado === ''
        ) {
          return false;
        }
  
        return true;
      }
  
      $('#habitacion').on('input', function() {
        var habitacion = $(this).val();
  
        if (habitacion.trim() === '') {
          $('#habitacionError').text('El número de habitacion es requerido');
        } else if (habitacion.includes(' ')) {
          $('#habitacionError').text('El número de habitacion no puede contener espacios');
        } else if (habitacion.length !== 10) {
          $('#habitacionError').text('El número de habitacion debe tener 10 dígitos');
        } else {
          $('#habitacionError').text('');
        }
      });

      $('#servicio').on('input', function() {
        var servicio = $(this).val();
  
        if (servicio.trim() === '') {
          $('#servicioError').text('El número de servicio es requerido');
        } else if (servicio.includes(' ')) {
          $('#servicioError').text('El número de servicio no puede contener espacios');
        } else if (servicio.length !== 10) {
          $('#servicioError').text('El número de servicio debe tener 10 dígitos');
        } else {
          $('#servicioError').text('');
        }
      });

      $('#cliente').on('input', function() {
        var cliente = $(this).val();
  
        if (cliente.trim() === '') {
          $('#clienteError').text('El número de cliente es requerido');
        } else if (cliente.includes(' ')) {
          $('#clienteError').text('El número de cliente no puede contener espacios');
        } else if (cliente.length !== 10) {
          $('#clienteError').text('El número de cliente debe tener 10 dígitos');
        } else {
          $('#clienteError').text('');
        }
      });

      $('#estado').on('input', function() {
        var estado = $(this).val();
  
        if (estado.trim() === '') {
          $('#estadoError').text('El número de estado es requerido');
        } else if (estado.includes(' ')) {
          $('#estadoError').text('El número de estado no puede contener espacios');
        } else if (estado.length !== 10) {
          $('#estadoError').text('El número de estado debe tener 10 dígitos');
        } else {
          $('#estadoError').text('');
        }
      });
  
      $('#submitButton').on('click', function(event) {
        if (!validarFormulario()) {
          event.preventDefault();
          // Agregar aquí cualquier acción adicional que desees realizar cuando el formulario no esté completo
        }
      });
    });
  </script>
</head>
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
            <input type="text" class="form-control" name="habitacion" id="habitacion" aria-describedby="helpId" placeholder="">
          </div>

          <div class="col-md-6">
            <label for="" class="form-label">Id Servicio</label>
            <input type="text" class="form-control" name="servicio" id="servicio" aria-describedby="helpId" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Id Cliente</label>
            <input type="text" class="form-control" name="cliente" id="cliente" aria-describedby="helpId" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" aria-describedby="helpId" placeholder="">
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" id="submitButton">Agregar</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>