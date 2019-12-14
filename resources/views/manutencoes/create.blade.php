@extends('adminlte::page')

@section('title', 'Super Reparos - Inserir')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Inclusao de Manuteção</h1>
@stop

@section('content')
<form method="post" action="{{ route('manutencoes.store') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i> Tela de cadastramento de manutencão.
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome do Cliente <span class="text-red">*</span></label>
                         <input type="text" name="cliente" id="cliente" class="form-control" required>
                    </div>
               </div>
               
               <div class="row">
                    <div class="form-group col-md-2">
                         <label for="creci">Nome do tecnico <span class="text-red">*</span></label>
                         <input type="text" name="tecnico" id="tecnico" class="form-control" required>
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-3">
                         <label for="fone">Problema</label>
                         <input type="text" name="problema" id="problema" class="form-control">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-4">
                         <label for="email">Fone cliente <span class="text-red">*</span></label>
                         <input type="text" name="fonecliente" id="fonecliente" class="form-control" required>
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