
@extends('adminlte::page')

@section('title', 'SuperReparos')

@section('content_header')
<h1>Detalhes da Manutencao</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes do cadastro da manutenção.
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td class="col-md-2">ID</td>
                    <td class="col-md-10">{{ $manutencao->id }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Nome do Cliente</td>
                    <td class="col-md-10">{{ $manutencao->cliente }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Tecnico</td>
                    <td class="col-md-10">{{ $manutencao->tecnico }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Problema</td>
                    <td class="col-md-10">{{ $manutencao->problema }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Fone do cliente</td>
                    <td class="col-md-10">{{ $manutencao->fonecliente }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{ route('manutencoes.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>



@stop

@section('css')

@stop

@section('js')

@stop