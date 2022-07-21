@extends('adminlte::page')
@section('title', 'Administrativo')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="card-title">Pesquisa de sistemas</h2>
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
                <form action="{{ route('cadastro.search') }}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col col-sm-8">
                            <label for="disabledTextInput" class="form-label">Nome Sistema</label>
                            <input type="text" id="nnome" name="nome" class="form-control form-control-sm"
                                placeholder="Nome Sistema" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <label for="disabledTextInput" class="form-label">Nome Sistema</label>
                            <input type="text" id="nnome" name="nome" class="form-control form-control-sm"
                                placeholder="Nome Sistema" aria-label="First name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label for="disabledTextInput" class="form-label">Nome Sistema</label>
                            <input type="text" id="nnome" name="nome" class="form-control form-control-sm"
                                placeholder="Nome Sistema" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <label for="disabledTextInput" class="form-label">Nome Sistema</label>
                            <input type="text" id="nnome" name="nome" class="form-control form-control-sm"
                                placeholder="Nome Sistema" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <div class="form-group">
                                <label>Situação</label>
                                <select class="form-control form-control-sm">
                                    <option value="1">Sistema ativo</option>
                                    <option value="2">Sistema em manutenção</option>
                                    <option value="3">Sistema com pagamento em atraso</option>
                                    <option value="4">Sistema cancelado pelo Sistema</option>
                                    <option value="5">Sistema com problema</option>
                                    <option value="6">Sistema indisponivel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button id="save" type="button" class="btn btn-success btn-sm float-left"
                    onclick="showModal('{{ route('sistema.create') }}', 'Novo Sistema', 'Incluir Novo Sistema', 'Salvar', 'Cancelar');"><i
                        class="fas fa-fw fa-plus"></i> Novo Sistema</button>
                <button type="button" class="btn btn-primary btn-sm float-right" onClick="refresh(this)"><i
                        class="fas fa-eraser"></i>Limpar</button>
                <button id="search" type="submit" class="btn btn-dark btn-sm float-right"><i
                        class="fas fa-search"></i>Pesquisar</button>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- é necessário importar o arquivo do css do dashboard pois algumas manutenções de divs estão lá dentro --}}
    <link rel="stylesheet" href="{{ asset('administrativo/css/dashboard.css') }}">
@stop

@section('js')
<script src="{{ asset('administrativo/js/dashboard.js') }}" defer></script>
<script src="{{ asset('administrativo/js/jquery.mask.js') }}"></script>
@stop
