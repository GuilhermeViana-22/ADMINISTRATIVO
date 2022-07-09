@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="card-title">Pesquisa de clientes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">home</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!---layout padrão--->
    <section class="content">

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col col-sm-8">
                            <label for="disabledTextInput" class="form-label">Nome cliente</label>
                            <input type="text" id="nnome" name="nome" class="form-control"
                                placeholder="Nome cliente" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <label for="disabledTextInput" class="form-label">E-mail</label>
                            <input type="email" class="form-control" placeholder="E-mail" aria-label="Last name">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label for="disabledTextInput" class="form-label">CPF / CPNJ</label>
                            <input type="text" id="nnome" name="nome" class="form-control"
                                placeholder="CPF / CPNJ" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <label for="disabledTextInput" class="form-label">Nome do sistema</label>
                            <input type="text" id="nnome" name="nome" class="form-control"
                                placeholder="Nome do sistema" aria-label="First name">
                        </div>
                        <div class="col col-sm-4">
                            <div class="form-group">
                                <label>Situação</label>
                                <select class="form-control">
                                    <option>Sistema ativo</option>
                                    <option>Sistema em manutenção</option>
                                    <option>Sistema com pagamento em atraso</option>
                                    <option>Sistema cancelado pelo cliente</option>
                                    <option>Sistema com problema</option>
                                    <option>Sistema indisponivel</option>
                                </select>
                            </div>
                        </div>
                        <div id="switches" class="col col-sm-2">
                            <div id="toggles">
                                <input type="checkbox" name="checkbox1" id="checkbox3" class="ios-toggle" checked />
                                <label for="checkbox3" class="checkbox-label" data-off="INVATIVO" data-on="ATIVO"></label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-success float-left"
                    onclick="showModal('{{ route('cliente.create') }}', 'Novo Cliente', 'Incluir Novo Cliente', 'Salvar', 'Cancelar');">Novo
                    Cliente</button>
                <button type="button" class="btn btn-light float-right"
                    onclick="showModal('{{ route('cliente.create') }}', 'Novo Cliente', 'Incluir Novo Cliente', 'Salvar', 'Cancelar');">Limpar</button>
                <button type="button" class="btn btn-primary float-right"
                    onclick="showModal('{{ route('cliente.create') }}', 'Novo Cliente', 'Incluir Novo Cliente', 'Salvar', 'Cancelar');">Pesquisar</button>
            </div>
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
                                            <button id="exportedBTN" class="btn btn-secondary buttons-print" tabindex="0"
                                                aria-controls="example1" type="button"><span>Imprimir</span>
                                            </button>
                                            <button id="exportedBTN" class="btn btn-secondary buttons-print" tabindex="0"
                                                aria-controls="example1" type="button"><span>Gerar Excel</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome Cliente</th>
                                            <th>Data Cadastro</th>
                                            <th>CPF / CPNJ</th>
                                            <th>Sistema</th>
                                            <th>Situação</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>183</td>
                                            <td>
                            
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('administrativo/css/dashboard.css') }}">
@stop

@section('js')
    <script src="{{ asset('administrativo/js/dashboard.js') }}" defer></script>
@stop
