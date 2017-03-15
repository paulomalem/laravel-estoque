@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="alert alert-dismissible alert-danger col-xs-3">
            <strong>Atenção!</strong>
            <br>
            <span data-bind="text: message"></span>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-green shadow">
                <div class="panel-heading">
                    <div class="left">
                        <h3>Produtos</h3>
                    </div>

                    <div class="right">
                        <a
                            href="{{ route('produto.create') }}"
                            class="btn btn-success">
                            Novo
                        </a>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="panel-body row">

                    <div class="col-xs-6 form-group">
                        <label>Produtos</label>
                        <select
                            class="form-control changedProduto">
                            <option value="">Selecione uma opção</option>
                            <option value="1">Disponiveis</option>
                            <option value="0">Indisponiveis</option>
                        </select>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center click" data-bind="click: $root.id">ID</th>
                                        <th class="click" data-bind="click: $root.nome">Nome</th>
                                        <th class="click" data-bind="click: $root.descricao">Descrição</th>
                                        <th class="click" data-bind="click: $root.preco">Preço</th>
                                        <th class="click" data-bind="click: $root.estoque">Estoque</th>
                                        <th class="text-center">Ação</th>
                                    </tr>
                                </thead>
                                <tbody data-bind="foreach: Produtos">
                                    <tr>
                                        <td class="text-center" data-bind="text: id"></td>
                                        <td data-bind="text: nome"></td>
                                        <td data-bind="text: descricao"></td>
                                        <td class="text-center" data-bind="text: preco"></td>
                                        <td class="text-center">
                                            <div class="left-button">
                                                <button
                                                    type="button"
                                                    class="btn btn-xs btn-danger"
                                                    data-bind="click: $root.diminuir">
                                                    <i class="zmdi zmdi-minus-circle-outline"></i>
                                                </button>
                                            </div>

                                            <span class="padding-8" data-bind="text: estoque"></span>
                                            
                                            <div class="right-button">
                                                <button
                                                    type="button"
                                                    class="btn btn-xs btn-success"
                                                    data-bind="click: $root.somar">
                                                    <i class="zmdi zmdi-plus-circle-o"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a
                                                data-bind="click: $root.view"
                                                class="btn btn-xs btn-primary">
                                                visualizar
                                            </a>
                                            <a
                                                data-bind="click: $root.destroy"
                                                class="btn btn-xs btn-danger">
                                                deletar
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="/js/produto.js"></script>
@endsection