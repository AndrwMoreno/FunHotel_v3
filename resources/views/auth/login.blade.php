<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion | FunHotel</title>
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
</head>

<body>
    <div class="container">
        <div class="drop">
            <div class="content">
                <h2>{{ __('Iniciar Sesion') }}</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="inputBox">
                        <input type="email" placeholder="Correo" class="@error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="inputBox">
                        <input type="password" placeholder="Contraseña" class="@error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="{{ __('Ingresar') }}">
                    </div>
                </form>
            </div>
        </div>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="btns">{{ __('¿Olvidaste tu contraseña?') }}</a>
        @endif
        <a href="{{ route('register') }}" class="btns signup">{{ __('Registrar') }}</a>
    </div>
</body>

</html>
