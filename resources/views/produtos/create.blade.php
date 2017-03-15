@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-green shadow">
                <div class="panel-heading">
                    <div class="left">
                        <h3>Adicionar Produto</h3>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="panel-body row">
                    <div class="col-xs-12">
                        {{ Form::open( [ 'routes'    => 'produto.create.post', 'method' => 'POST'] )}}
                            <div class="col-xs-4 form-group">
                                <label>Nome <b class="asper">*</b></label>
                                <input
                                    type="text"
                                    name="nome"
                                    class="form-control">
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Preco <b class="asper">*</b></label>
                                <input
                                    type="text"
                                    name="preco"
                                    class="form-control">
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Estoque <b class="asper">*</b></label>
                                <input
                                    type="text"
                                    name="estoque"
                                    class="form-control">
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-12 form-group">
                                <label>Descrição <b class="asper">*</b></label>
                                <textarea name="descricao" rows="5" class="form-control"></textarea>
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
</div>
@endsection

@section('scripts')
@endsection
