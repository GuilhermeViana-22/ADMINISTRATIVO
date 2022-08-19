@extends('adminlte::page')
@section('title', 'Administrativo')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="card-title">Perfil do usuário</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="/cadastro">home</a></li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')

    <!---layout padrão--->
    @include('sweetalert::alert')
    {{-- nsg --}}
    <section class="content">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <label for="disabledTextInput" class="form-label">Foto de perfil</label>

                    </div>
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <label for="disabledTextInput" class="form-label">Nome completo</label>
                        <input type="text" id="nome_completo" name="name" class="form-control form-control-sm"
                               placeholder="Nome Sistema" value="{{ $usuario->name }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('css')
    {{-- é necessário importar o arquivo do css do dashboard pois algumas manutenções de divs estão lá dentro --}}
    <link rel="stylesheet" href="{{ asset('administrativo/css/dashboard.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
@stop

@section('js')
    <script src="{{ asset('administrativo/js/dashboard.js') }}" defer></script>
    <script src="{{ asset('administrativo/js/jquery.mask.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

@stop
