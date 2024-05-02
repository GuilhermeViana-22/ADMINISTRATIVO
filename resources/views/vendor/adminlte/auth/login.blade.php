@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('adminlte_css_pre')

@stop

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

@section('auth_body')
    <style>
        .card-login{
            width: 700px;
            padding: 30px;
            background-color: #141414;
            box-shadow: 10px 10px 10px 10px #111111;
            border-radius: 10%;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('administrativo/css/sweetAlerts2.css') }}">

    <div class="card-login">
        <h6>Faça login para acessar nossa plataforma</h6>
        <h2>Dashboard</h2>
        <form action="{{ $login_url }}" method="post">
            @csrf

            {{-- Email field --}}
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            {{-- Password field --}}
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"
                       placeholder="{{ __('adminlte::adminlte.password') }}">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            {{-- Login field --}}
            <div class="row">
                <div class="col-9">
                    <div class="icheck-dark" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label style="color: #fff" for="remember">
                            {{ __('adminlte::adminlte.remember_me') }}
                        </label>
                    </div>
                </div>

                <div class="col-3">
                    <button type=submit class="btn btn-block btn-danger {{ config('adminlte.classes_auth_btn', 'btn-flat btn-danger') }}">
                        <span class="fas fa-sign-in-alt"></span>
                        {{ __('adminlte::adminlte.sign_in') }}
                    </button>
                </div>
            </div>

        </form>

        {{-- Register link --}}
        @if($register_url)
            <p class="my-0" style="color: white;">
                Não tem uma conta? <a href="{{ $register_url }}" style="color: #ff5757;">Registre-se</a>
            </p>
        @endif

        {{-- Password reset link --}}
        @if($password_reset_url)
            <p class="my-0">
                <a href="{{ $password_reset_url }}" style="color: #ff5757;">Esqueceu a senha ?</a>
            </p>
        @endif

    </div>
@stop

@section('auth_footer')


@stop
