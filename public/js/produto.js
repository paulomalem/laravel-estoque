(function () {
    'use strict';

    function request (type, url, data) {
        return {
            url : 'http://localhost:8000' + url,
            cache: false,
            type : type,
            dataType:"json",
            contentType: 'application/json; charset=utf-8',
            data : (data) ? data : ''
        };
    }

    function ProdutoModel () {
        var self = this;

        var options = null;
        
        self.Produtos           = ko.observableArray("");
        self.message            = ko.observable();

        load(options);

        self.view = function (Produto) {
            window.location.href = '/produto/update/' + Produto.id;
        };

        self.destroy = function (Produto) {
            
            $.ajax(request('POST', '/produto/destroy', ko.toJSON(Produto))).done(function (data) {
                self.Produtos.remove(Produto);
                console.log(data);
            });
        };

        self.somar = function (Produto) {
            Produto.estoque++;
            update(Produto);
            load(options);
        };

        self.diminuir = function (Produto) {

            if (Produto.estoque < 1) {
                message('Produto esgotado, não ha unidades disponiveis no estoque!');
                return;
            }

            Produto.estoque--;
            update(Produto);
            load(options);
        };

        self.id = function (Produto) {
            order('id');
        };

        self.nome = function (Produto) {
            order('nome');
        };

        self.descricao = function (Produto) {
            order('descricao');
        };

        self.preco = function (Produto) {
            order('preco');
        };

        self.estoque = function (Produto) {
            order('estoque');
        };

        $('.changedProduto').change(function () {
            options = ($(this).val()) ? $(this).val() : null;
            load(options);
        });

        function load (options) {
            var data = (options) ? ko.toJSON(options): null;

            $.ajax(request('POST', '/produto/getProdutos', data)).done(function (data) {
                var produtos = data.produtos.map(function (item) {
                    return new produto(item);
                });

                self.Produtos(produtos);
            });
        }

        function produto (data) {
            var ths = this;

            ths.id         = data.id;
            ths.nome       = data.nome;
            ths.preco      = data.preco;
            ths.descricao  = data.descricao;
            ths.estoque    = data.estoque;
        }

        function update (Produto) {
            $.ajax(request('POST', '/update/by/produto', ko.toJSON(Produto))).done(function (data) {
                console.log(data);
            });
        }

        function message (message) {
            self.message(message);
                
            $(".alert").fadeIn(function(){
                setTimeout(function(){
                    $('.alert').fadeOut();
                }, 3000);
            });
        }

        function order (data) {
            $.ajax(request('POST', '/produto/ordernar', ko.toJSON(data))).done(function (data) {
                var produtos = data.produtos.map(function (item) {
                    return new produto(item);
                });

                self.Produtos(produtos);
            });
        };
    }
    
    var produtoModel = new ProdutoModel();
    ko.applyBindings(produtoModel);
})();