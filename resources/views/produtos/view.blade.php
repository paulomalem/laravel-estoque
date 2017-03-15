@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-green shadow">
                <div class="panel-heading">
                    <div class="left">
                        <h3>Atualizar Produto</h3>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="panel-body row">
                    {{ Form::model( $produto, [ 'route' => ['produto.update.post']] )}}

                        {{ Form::hidden('id', $produto->id) }}

                        <div class="col-xs-4 form-group">
                            <label>Nome <b class="asper">*</b></label>
                            <input
                                type="text"
                                name="nome"
                                value="{{ $produto->nome }}"
                                class="form-control">
                        </div>

                        <div class="col-xs-2 form-group">
                            <label>Preco <b class="asper">*</b></label>
                            <input
                                type="text"
                                name="preco"
                                value="{{ $produto->preco }}"
                                class="form-control">
                        </div>

                        <div class="col-xs-2 form-group">
                            <label>Estoque <b class="asper">*</b></label>
                            <input
                                type="text"
                                name="estoque"
                                value="{{ $produto->estoque }}"
                                class="form-control">
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-xs-12 form-group">
                            <label>Descrição <b class="asper">*</b></label>
                            <textarea name="descricao" rows="5" class="form-control">{{ $produto->descricao }}</textarea>
                        </div>

                        <div class="col-xs-12 text-right">
                            <a href="{{ route('produto') }}" class="btn btn-default">
                                Voltar
                            </a>
                            
                            <button
                                type="submit"
                                class="btn btn-success">
                                Salvar
                            </button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
