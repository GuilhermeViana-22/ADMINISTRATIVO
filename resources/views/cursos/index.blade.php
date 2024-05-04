@extends('adminlte::page')
@section('title', 'Administrativo')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="card-title">Pesquisa de cursos</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="/home">home </a></li>
                    <li class="breadcrumb-item active"><button class="btn btn-success text-white float-right" onclick="showModal('<?php echo e(route('cursos.incluir',)); ?>', 'Salvar novo curso')"><span class="fa fa-check"></span> Salvar novo curso</li>
                </ol>
            </div>
        </div>
    </div>
    <hr>
    @if(!$cursos->isEmpty())
    <div class="row">
        @foreach($cursos as $curso)
            <div class="col-md-3 mb-4">
                <div class="card">
                    @if($curso->capa)
                        <img src="{{ asset($curso->capa) }}" class="card-img-top" alt="Capa do Curso" style="height: 210px">
                    @else
                        <div class="card-img-top">Nenhuma imagem disponível</div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $curso->titulo }}</h5>
                        <p class="card-text">{{ $curso->descricao }}</p>
                        <p class="card-text">Instrutor ID: {{ $curso->instrutor_id }}</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-sm btn-warning"><span class="fa fa-pen"></span> Editar</button>
                    </div>
                        <form action="{{ route('cursos.remover', ['id' => $curso->id]) }}" method="POST" style="position: absolute; top: 5px; right: 5px;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" style="position: absolute; top: 5px; right: 5px;"><i class="fas fa-times"></i></button>
                        </form>
                </div>
            </div>
            @if($loop->iteration % 4 == 0)
    </div><div class="row">
        @endif
        @endforeach
        @else
            <div class="alert alert-info" role="alert">
                nenhum curso foi encontrado no momento.
            </div>
        @endif
    </div>
@stop

@section('content')

@stop

@section('js')
    <script src="{{ asset('administrativo/js/dashboard.js') }}" defer></script>
@stop
