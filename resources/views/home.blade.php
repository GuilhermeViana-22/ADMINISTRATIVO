@extends('adminlte::page')
@section('title', 'Administrativo')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="card-title">Dashboard</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="/cadastro">Cadastro de clientes</a></li>
            </ol>
        </div>
    </div>
</div>
@stop

@section('content')
<!---layout padrão--->
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>150<sup style="font-size: 15px">vendas</h3>
                <p>Sistemas Vinculados</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>53<sup style="font-size: 15px">reuniões</h3>
                <p>Meeting com cliente</p>
            </div>
            <div class="icon">
                <i class="far fa-calendar-alt"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>44<sup style="font-size: 15px">ativos</h3>
                <p>Clientes Cadastrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>150<sup style="font-size: 15px"></h3>
                <p>Pagamentos atrasados</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
<!-- /.card -->
@stop

@section('css')
<link rel="stylesheet" href="/css/.css">
@stop

@section('js')

@stop
