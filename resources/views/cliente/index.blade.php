@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <div class="painel-heading">
        <div class="row">
            <div class="col-10 m-12 d-flex align-items-center">
                <h5>Pesquisa de cliente</h5>
            </div>
            <div class="col-2 m-12   d-flex align-items-center">
                {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Novo Cliente</button> --}}
                <button type="button" class="btn btn-primary float-right"
                    onclick="showModal('{{ route('cliente.create') }}', 'Novo Cliente', 'Incluir Novo Cliente', 'Salvar', 'Cancelar');"
                    data-target=".bd-example-modal-lg">Novo Cliente</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!---layout padrão--->
    <div class="card col-md-12">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Small"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Nome do cliente">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Código</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Small"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Código">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="cpf">CPF</span>
                            </div>
                            <input id="cpf" type="text" class="form-control" aria-label="Small"
                                aria-describedby="inputGroup-sizing-sm" placeholder="CPF">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Small"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Código Sistema</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Small"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Código Sistema">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary float-right" style="margin-left: 5px;">Limpar</button>
            <button type="button" class="btn btn-primary float-right">Pesquisar</button>
        </div>
    </div>
    <!-- /.card -->

    <!--DATA TABLE----->
    <div class="card col-md-12">
        <div class="card-body">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">RG</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Nome do cliente</th>
                        <th scope="col">Sistema</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div>
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#">&laquo;</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/.css">
@stop

@section('js')
    <script src="{{ asset('administrativo/js/dashboard.js') }}" defer></script>
@stop
