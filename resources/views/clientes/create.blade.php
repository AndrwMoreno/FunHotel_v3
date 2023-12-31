<!-- MODAL  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function validarFormulario() {
                var nombre = $('#primernombre').val().trim();
                var apellido = $('#primerapellido').val().trim();
                var tipoDocumento = $('#tipodocumento').val();
                var documento = $('#documento').val().trim();
                var celular = $('#celular').val().trim();
                var correo = $('#correo').val().trim();

                if (
                    nombre === '' ||
                    apellido === '' ||
                    tipoDocumento === '' ||
                    documento === '' ||
                    celular === '' ||
                    correo === ''
                ) {
                    return false;
                }

                return true;
            }

            $('#primernombre').on('input', function() {
                var nombre = $(this).val();

                if (nombre.trim() === '') {
                    $('#nombreError').text('El nombre es requerido');
                } else if (nombre.includes(' ')) {
                    $('#nombreError').text('El nombre no puede contener espacios');
                } else {
                    $('#nombreError').text('');
                }
            });

            $('#segundonombre').on('input', function() {
                var nombre = $(this).val();

                if (nombre.includes(' ')) {
                    $('#nombreSError').text('El segundo nombre no puede contener espacios');
                } else {
                    $('#nombreSError').text('');
                }
            });

            $('#primerapellido').on('input', function() {
                var apellido = $(this).val();

                if (apellido.trim() === '') {
                    $('#apellidoError').text('El primer apellido es requerido');
                } else if (apellido.includes(' ')) {
                    $('#apellidoError').text('El primer apellido no puede contener espacios');
                } else {
                    $('#apellidoError').text('');
                }
            });

            $('#segundoapellido').on('input', function() {
                var apellido = $(this).val();

                if (apellido.trim() === '') {
                    $('#apellidoSError').text('El segundo apellido es requerido');
                } else if (apellido.includes(' ')) {
                    $('#apellidoSError').text('El segundo apellido no puede contener espacios');
                } else {
                    $('#apellidoSError').text('');
                }
            });

            $('#tipodocumento').on('change', function() {
                var tipodoc = $(this).val();

                if (tipodoc === '') {
                    $('#tipodocError').text('Seleccione el tipo documento');
                } else {
                    $('#tipodocError').text('');
                }
            });

            $('#documento').on('input', function() {
                var documento = $(this).val();

                if (documento.trim() === '') {
                    $('#documentoError').text('El documento es requerido');
                } else if (documento.includes(' ')) {
                    $('#documentoError').text('El documento no puede contener espacios');
                } else if (documento.length < 6) {
                    $('#documentoError').text('El documento de identidad debe tener al menos 6 dígitos');
                } else {
                    $('#documentoError').text('');
                }
            });

            $('#celular').on('input', function() {
                var celular = $(this).val();

                if (celular.trim() === '') {
                    $('#celularError').text('El número de celular es requerido');
                } else if (celular.includes(' ')) {
                    $('#celularError').text('El número de celular no puede contener espacios');
                } else if (celular.length !== 10) {
                    $('#celularError').text('El número de celular debe tener 10 dígitos');
                } else {
                    $('#celularError').text('');
                }
            });

            $('#correo').on('input', function() {
                var correo = $(this).val();

                if (correo.trim() === '') {
                    $('#correoError').text('El correo es requerido');
                } else if (!validateEmail(correo)) {
                    $('#correoError').text('El correo no tiene un formato válido');
                } else {
                    $('#correoError').text('');
                }
            });

            function validateEmail(email) {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            }

            $('#submitButton').on('click', function(event) {
                if (!validarFormulario()) {
                    event.preventDefault();
                    // Agregar aquí cualquier acción adicional que desees realizar cuando el formulario no esté completo
                }
            });
        });
    </script>
</head>

<body>
    <form class="row g-7 needs-validation" method="POST" novalidate>
        <input type="hidden" name="formulario" value="ok">
        <div class="modal fade" id="modalCre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">AGREGAR CLIENTE</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!--Clave evita error -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text" placeholder="Nombre" class="form-control" id="primernombre"
                                        name="primernombre" required>
                                    <span id="nombreError" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Segundo Nombre</label>
                                    <input type="text" placeholder="Segundo Nombre" class="form-control"
                                        id="segundonombre" name="segundonombre" required>
                                    <span id="nombreSError" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Primer Apellido</label>
                                    <input type="text" placeholder="Primer Apellido" class="form-control"
                                        id="primerapellido" name="primerapellido" required>
                                    <span id="apellidoError" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Segundo Apellido</label>
                                    <input type="text" placeholder="Segundo Apellido" class="form-control"
                                        id="segundoapellido" name="segundoapellido" required>
                                    <span id="apellidoSError" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="tipodocumento" class="form-label">Tipo documento</label>
                                    <select name="tipodocumento" id="tipodocumento" class="form-control">
                                        <option value="">Seleccione el tipo documento</option>
                                        <option value="CC">Cédula ciudadana</option>
                                        <option value="CE">Cédula extranjera</option>
                                        <option value="T.I">Tarjeta Identidad</option>
                                        <option value="N.T">Nit</option>
                                        <option value="PA">Pasaporte</option>
                                    </select>
                                    <span id="tipodocError" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Documento</label>
                                    <input type="number" placeholder="Documento" class="form-control" id="documento"
                                        name="documento" required>
                                    <span id="documentoError" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Celular</label>
                                    <input type="number" placeholder="Celular" class="form-control" id="celular"
                                        name="celular" required>
                                    <span id="celularError" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Correo</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="email" placeholder="Correo" class="form-control"
                                            id="correo" name="correo" aria-describedby="inputGroupPrepend"
                                            required>
                                    </div>
                                    <span id="correoError" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="estado">Estado</label>
                                        <input type="text" disabled value="Activo" class="form-control">
                                        <input type="hidden" name="estado" id="estado"
                                            value="{{ \App\Models\Cliente::Activo }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary" type="submit" id="submitButton">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
