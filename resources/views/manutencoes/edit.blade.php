@extends('adminlte::page')

@section('title', 'SuperReparos')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Alteração de dados da manutenção</h1>
@stop

@section('content')
<form method="post" action="{{ route('manutencoes.update', $manutencao->id) }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="_method" value="PUT">

     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i> Tela de alteração de dados
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Cliente <span class="text-red">*</span></label>
                         <input type="text" name="nome" id="nome" class="form-control" required value="{{ $manutencao->nome }}">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-2">
                         <label for="tecnico">Tecnico <span class="text-red">*</span></label>
                         <input type="text" name="tecnico" id="tecnico" class="form-control" required value="{{ $manutencao->tecnico }}">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-3">
                         <label for="problema">Problema</label>
                         <input type="text" name="problema" id="problema" class="form-control" value="{{ $manutencao->problema }}">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-4">
                         <label for="fonecliente">Telefone do cliente <span class="text-red">*</span></label>
                         <input type="text" name="fonecliente" id="fonecliente" class="form-control" required value="{{ $manutencao->email }}">
                    </div>
               </div>
          </div>

          <div class="panel-footer">
               <a href="{{ route('manutencoes.index') }}" class="btn btn-default">
                    <i class="fas fa-reply"></i> Voltar
               </a>

               <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Gravar
               </button>
          </div>
     </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop