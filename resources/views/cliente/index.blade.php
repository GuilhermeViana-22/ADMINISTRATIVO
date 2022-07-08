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
              <button type="button" class="btn btn-primary float-right" onclick="showModal('{{ route('cliente.create')}}', 'Novo Cliente', 'Incluir Novo Cliente', 'Salvar', 'Cancelar');">Novo Cliente</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!---layout padrão--->
   
    <!-- /.card -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/.css">
@stop

@section('js')
    <script src="{{ asset('administrativo/js/dashboard.js') }}" defer></script>
@stop
