<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - FunHotel</title>
    <link rel="stylesheet" href="{{ asset('estilo.css') }}" />
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box-ingresar">
                <div class="forms-wrap">
                    <form action="{{ route('login') }}" autocomplete="off" class="sign-in-form" method="POST">
                        @csrf
                        <div class="heading"><br><br>
                            <h2>{{ __('Bienvenidos') }}</h2>
                            <h4>{{ __('¿Quiere registrarse?') }}</h4>
                            <a href="#" class="toggle">{{ __('Registrarse') }}</a><br><br>
                        </div><br>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input name="email" type="email" minlength="4"
                                    class="@error('email') is-invalid @enderror input-field" autocomplete="email"
                                    autofocus required />
                                <label>{{ __('Correo Electronico') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-wrap">
                                <input name="password" autocomplete="current-password" type="password" minlength="4"
                                    class="@error('password') is-invalid @enderror input-field" autocomplete="off"
                                    required />
                                <label>{{ __('Contraseña') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="submit" value="Ingresar" class="sign-btn" />
                            <p class="text">
                                {{ __('¿Olvidaste tus datos de inicio de sesión?') }}
                                <a href="{{ route('password.request') }}">{{ __('Recuperar contraseña') }}</a>
                            </p>
                        </div>
                    </form>

                    <form action="{{ route('register') }}" autocomplete="off" class="sign-up-form" method="POST">
                        @csrf
                        <div class="inner-box-registrar">
                            <div class="campo-contenedor">
                                <div class="heading">
                                    <h2>Registro</h2>
                                    <h4>¿Ya tienes una cuenta?</h4>
                                    <a href="#" class="toggle">Ingresar</a>
                                </div><br>
                                <div class="input-w">
                                    <input id="name" name="name" autofocus type="text"
                                        class="input-f @error('name') is-invalid @enderror" autocomplete="off"
                                        required />
                                    <label>{{ __('Nombre') }}</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-w">
                                    <input id="second_name" name="second_name" type="text" class="input-f"
                                        autocomplete="off" />
                                    <label>{{ __('Segundo nombre') }}</label>
                                </div>

                                <div class="input-w">
                                    <input id="surname" name="surname" autofocus type="text"
                                        class="input-f @error('surname') is-invalid @enderror" autocomplete="off"
                                        required />
                                    <label>{{ __('Apellido') }}</label>
                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-w">
                                    <input id="second_surname" name="second_surname" type="text" class="input-f" />
                                    <label>{{ __('Segundo apellido') }}</label>
                                </div>
                                <div class="input-w">
                                    <input id="birthday" name="birthday" autofocus type="date"
                                        class="input-f @error('birthday') is-invalid @enderror" autocomplete="off"
                                        required />
                                    <label>{{ __('Fecha de nacimiento') }}</label>
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-w">
                                    <input id="email" name="email" autofocus type="email"
                                        class="input-f @error('email') is-invalid @enderror" autocomplete="off"
                                        required />
                                    <label>{{ __('Correo Electronico') }}</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-w">
                                    <input id="password" name="password" type="password" minlength="4"
                                        class="input-f @error('password') is-invalid @enderror" autocomplete="off"
                                        required />
                                    <label>{{ __('Contraseña') }}</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-w">
                                    <input id="password-confirm" name="password_confirmation" type="password"
                                        minlength="4" class="input-f" autocomplete="off" required />
                                    <label>{{ __('Confirmar contraseña') }}</label><br>
                                </div>
                            </div>
                            <input type="submit" value="Registrarse" class="sign-btn" />
                        </div>
                </div>
                </form>
            </div>
            <div class="carousel">
                <div class="images-wrapper">
                    <img src="{{ asset('img/Hotel.png') }}" class="image img-1 show" alt="" />
                    <img src="{{ asset('img/tercero.png') }}" class="image img-2" alt="" />
                    <img src="{{ asset('img/logoHotl.png') }}" class="image img-3" alt="" />
                </div>
                <div class="text-slider">
                    <div class="text-wrap">
                        <div class="text-group">
                            <h2>{{ __('Bienvenidos a FunHotel') }}</h2>
                            <h2>{{ __('¡Te ofrecemos diversión y calidad!') }}</h2>
                            <h2>{{ __('Reserva con nosotros') }}</h2>
                        </div>
                    </div>

                    <div class="bullets">
                        <span class="active" data-value="1"></span>
                        <span data-value="2"></span>
                        <span data-value="3"></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('estilo.js') }}"></script>
</body>

</html>
