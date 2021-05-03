<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CRM</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body class="vh-100 bg-primary">
    <div id="app" class="h-100">
        <div class="container h-100">
            <div class="row h-100 d-flex align-items-center">
                <div class="col-md-6 mx-auto">
                    <div class="card">

                        <div class="card-body px-5">
                            <div class="text-center">
                                <img src="{{ asset('images/logo.svg') }}" alt="logo" class="img-fluid w-50 py-4 animate__animated animate__fadeInDown">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group animate__animated animate__fadeInUp">
                                <label for="email">Email </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group animate__animated animate__fadeInUp">
                                <label for="password">Conraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mt-4 animate__animated animate__fadeInUp">INGRESAR</button>
                            </form>

                            <div class="text-center animate__animated animate__fadeInUp">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-center mt-3" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>