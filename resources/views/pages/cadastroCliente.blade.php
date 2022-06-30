@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<div class="painel-heading">
    <div class="row">
        <div class="col-md-10">
       <h6>Pesquisa de cliente</h6>
        </div>
        <div class="col-md-2">
        <button type="button" class="btn btn-success">Novo cliente</button>
        </div>
    </div>
</div>
@stop

@section('content')
<!---layout padrão--->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="formFile" class="form-label">Nome do cliente</label>
                        <input class="form-control" type="text" placeholder="Nome do cliente">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="formFile" class="form-label">Email</label>
                        <input class="form-control" type="text" placeholder="Email do cliente">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="formFile" class="form-label">RG</label>
                        <input class="form-control" type="text" placeholder="RG">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="formFile" class="form-label">CPF</label>
                        <input class="form-control" type="text" placeholder="CPF">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="formFile" class="form-label">RG</label>
                        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="formFile" class="form-label">CPF</label>
                        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.card -->
@stop

@section('css')
<link rel="stylesheet" href="/css/.css">
@stop

@section('js')
<script>
    $("[data-widget='collapse']").click()
</script>
@stop