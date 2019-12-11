@extends('adminlte::page')

@section('title', 'ImóvelCerto')

@section('content_header')
    <h1><i class="fas fa-bars"></i>  Listar Manutenções</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        Relaçao das Manutenções
        <div class="pull-right">
            <a href="{{ route('manutencoes.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="{{ route('manutencoes.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Registro</a>
        </div>
    </div>
    <div class="panel-body">
        <table id="table-manutencao" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome do Cliente</td>
                    <td>Tecnico</td>
                    <td>Açoes</td>
                </tr>
            </thead>
            <tbody>
                @foreach($manutencoes as $manutencao)
                <tr>
                    <td>{{ $manutencao->id }}</td>
                    <td>{{ $manutencao->cliente }}</td>
                    <td>{{ $manutencao->tecnico}}</td>
                    <td>
                        <!-- botao de detalhes do registro -->
                        <a href="{{ route('manutencoes.show', $manutencao->id) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>

                        <!-- botao de edicao do registro -->
                        <a href="{{ route('manutencoes.edit', $manutencao->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>

                        <!-- botao de exclusao -->
                        <form action="{{ route('manutencoes.destroy', $manutencao) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                               <i class="fas fa-fx fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#table-manutencao').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop