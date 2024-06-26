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
                    <li class="breadcrumb-item active"><a href="/cadastro">home </a></li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!---layout padrão--->
    @include('sweetalert::alert')
    <section class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('sistema.search') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col col-sm-2">
                            <label for="disabledTextInput" class="form-label">Protocolo</label>
                            <input type="text" id="id" name="id" class="form-control form-control-sm"
                                   placeholder="Protocolo" aria-label="First name">
                        </div>
                        <div class="col col-sm-6">
                            <label for="disabledTextInput" class="form-label">Nome Sistema</label>
                            <input type="text" id="nome_sistema" name="nome_sistema"
                                   class="form-control form-control-sm"
                                   placeholder="Nome Sistema" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <label for="disabledTextInput" class="form-label">Rota</label>
                            <input type="text" id="rota_api" name="rota_api" class="form-control form-control-sm"
                                   placeholder="Rota" aria-label="First name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label for="disabledTextInput" class="form-label">Data de cadastro </label>
                            <input type="date" min="2022-01-01" id="created_at" name="created_at"
                                   class="form-control form-control-sm"
                                   placeholder="Data cadastro" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <div class="form-group">
                                <label>Situação</label>
                                <select name="situacao_id" class="form-control form-control-sm">
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
            </div>
            <div class="card-footer">
                <button id="save" type="button" class="btn btn-success btn-sm float-left"
                        onclick="showModal('{{ route('sistema.create') }}', 'Novo Sistema', 'Incluir Novo Sistema', 'Salvar', 'Cancelar');">
                    <i
                        class="fas fa-fw fa-plus"></i> Novo Sistema
                </button>
                <button type="button" class="btn btn-primary btn-sm float-right" onClick="refresh(this)"><i
                        class="fas fa-eraser"></i>Limpar
                </button>
                <button id="search" type="submit" class="btn btn-dark btn-sm float-right"><i
                        class="fas fa-search"></i>Pesquisar
                </button>
            </div>
            </form>
        </div>
    </section>
    <!--data table sections-->
    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Resultado da pesquisa de sistemas
                                <div class="card-tools">
                                    <div class="input-group input-group-sm">
                                        <div class="dt-buttons btn-group flex-wrap">
                                            <a id="search" type="submit"
                                               class="btn btn-secondary btn-sm float-right"
                                               href="{{route('mpf.gerarPdf')}}"><i
                                                    class="fas fa-print"></i>Imprimir</a>
                                            <button id="search" type="submit"
                                                    class="btn btn-secondary btn-sm float-right"><i
                                                    class="fas fa-download"></i>Gerar Excel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead class="bg-secondary">
                                    <tr>
                                        <th>Protocolo</th>
                                        <th>Nome Sistema</th>
                                        <th>Datas cadastro</th>
                                        <th>Situação</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @if ($sistemas->isEmpty())
                                            <td colspan="8"> Nenhum Resultado encontrado</td>
                                        @else
                                        @endif
                                        @foreach ($sistemas as $sistema)
                                            <th class="table-secondary" scope="row dark">{{ $sistema->id }}</td>
                                            <td scope="row info">{{ $sistema->nome_sistema }}</td>
                                            <td scope="row info">{{ date('d/m/Y', strtotime($sistema->created_at))  }}</td>
                                            <td scope="row info">teste</td>
                                            <td id="opcoes">
                                                <button id="search"
                                                        onclick="showModal('{{ route('sistema.show', $sistema->id) }}', 'Detalhes Sistema {{ $sistema->nome_sistema }}', 'Salvar', 'Cancelar');"
                                                        type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-fw fa-eye"></i></button>
                                                <button type="button" class="btn btn-warning btn-sm"
                                                        onclick="showModal('{{ route('sistema.edit', [$sistema->id]) }}', 'Editar Cliente {{ $sistema->nome_sistema }}', ' Cliente', 'Salvar', 'Cancelar');">
                                                    <i class="fas fa-fw fa-pen"></i></button>
                                                <form action="{{ route('sistema.destroy', $sistema->id) }}"
                                                      method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-danger btn-sm"><i
                                                            class="fas fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
