@extends('adminlte::page')
@section('title', 'Administrativo')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="card-title">Pesquisa de clientes</h2>
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
                        <div class="col col-sm-6">
                            <label for="disabledTextInput" class="form-label">Nome cliente</label>
                            <input type="text" id="nome_cliente" name="nome_cliente"
                                   class="form-control form-control-sm"
                                   placeholder="Nome cliente" aria-label="First name">
                        </div>
                        <div class="col col-sm-6">
                            <label for="disabledTextInput" class="form-label">E-mail</label>
                            <input type="email" class="form-control form-control-sm" id="email_cliente"
                                   name="email_cliente" placeholder="E-mail" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-4">
                            <label for="disabledTextInput" class="form-label">CPF</label>
                            <input id="cpf_cliente" name="cpf_cliente" type="text" class="form-control form-control-sm"
                                   maxlength="14" placeholder="CPF" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <div class="form-group">
                                <label>Situação</label>
                                <select class="form-control form-control-sm" name="situacao">
                                    <option value="1">Sistema ativo</option>
                                    <option value="2">Sistema em manutenção</option>
                                    <option value="3">Sistema com pagamento em atraso</option>
                                    <option value="4">Sistema cancelado pelo cliente</option>
                                    <option value="5">Sistema com problema</option>
                                    <option value="6">Sistema indisponivel</option>
                                </select>
                            </div>
                        </div>

                        <div class="col col-sm-4">
                            <label>Ativo</label>
                            <br>
                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="outline-danger" data-offstyle="outline-warning" data-size="sm" name="ativo">
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button id="save" type="button" class="btn btn-success btn-sm float-left"
                        onclick="showModal('{{ route('cliente.create') }}', 'Novo Cliente', 'Incluir Novo Cliente', 'Salvar', 'Cancelar');">
                    <i
                        class="fas fa-fw fa-plus"></i> Novo Cliente
                </button>
                <button type="button" class="btn btn-primary btn-sm float-right" onclick="limpar();"><i
                        class="fas fa-eraser"></i>Limpar
                </button>
                <button id="search" type="submit" class="btn btn-dark btn-sm float-right"><i
                        class="fas fa-search"></i>Pesquisar
                </button>
            </div>
            </form>
        </div>
    </section>
    <!-- /.card -->

    <!--data table sectin-->
    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Resultado da pesquisa de clientes</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm">
                                        <div class="dt-buttons btn-group flex-wrap">
                                            <button id="search" type="submit"
                                                    class="btn btn-secondary btn-sm float-right"><i
                                                    class="fas fa-print"></i>Imprimir
                                            </button>
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
                                        <th>#</th>
                                        <th>Nome Cliente</th>
                                        <th>Data Cadastro</th>
                                        <th>CPF / CNPJ</th>
                                        <th>Email</th>
                                        <th>Situação</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @if ($clientes->isEmpty())
                                            <td colspan="7"> Nenhum Resultado encontrado</td>
                                        @else
                                        @endif
                                        @foreach ($clientes as $cliente)
                                            <th class="table-secondary" scope="row dark">{{ $cliente->id }}</th>
                                            <td>{{ $cliente->nome_cliente }}</td>
                                            <td style="text-align: center">
                                                {{ date('Y/m/d', strtotime($cliente->data_cadastro)) }}</td>
                                            <td>{{ $cliente->cpf_cliente }}</td>
                                                <td>{{ $cliente->email_cliente }}</td>
                                                <td>{{ $cliente->cliente->situacao }}</td>
                                            <td id="opcoes">
                                                <button id="search"
                                                        onclick="showModal('{{ route('cliente.show', $cliente->id) }}', 'Detalhes Cliente {{ $cliente->nome }}', ' Cliente', 'Salvar', 'Cancelar');"
                                                        type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-fw fa-eye"></i></button>
                                                <button type="button" class="btn btn-warning btn-sm"
                                                        onclick="showModal('{{ route('cliente.edit', [$cliente->id]) }}', 'Editar Cliente {{ $cliente->nome }}', ' Cliente', 'Salvar', 'Cancelar');">
                                                    <i class="fas fa-fw fa-pen"></i></button>
                                                <form action="{{ route('cliente.destroy', $cliente->id) }}"
                                                      method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button id="trash" type="submit"
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
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="{{ asset('administrativo/js/dashboard.js') }}" defer></script>
    <script src="{{ asset('administrativo/js/jquery.mask.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#cpf_cliente').mask('000.000.000-00');
            $('#cpf_cliente_edicao').mask('000.000.000-00');
        });
    </script>
@stop
