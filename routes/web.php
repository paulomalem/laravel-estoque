<?php

Route::get('/', function () {
    return redirect('/produto');
});

Route::post('/signIn', [
    'uses'  =>  'Login\LoginController@signIn',
    'as'    =>  'signIn.post'
]);

Route::get('/register', [
    'uses'  =>  'Login\LoginController@toRegister',
    'as'    =>  'register'
]);

Route::post('/register/post', [
    'uses'  =>  'Login\LoginController@create',
    'as'    =>  'register.post'
]);

Route::get('/produto', [
        'uses' => 'ProdutoController@index',
        'as'   => 'produto'
]);

Route::get('/produto/create', [
        'uses' => 'ProdutoController@create',
        'as'   => 'produto.create'
]);

Route::post('/produto/create', [
        'uses' => 'ProdutoController@createPost',
        'as'   => 'produto.create.post'
]);

Route::get('/produto/update/{id}', [
        'uses' => 'ProdutoController@update',
        'as'   => 'produto.update'
]);

Route::post('/produto/update', [
        'uses' => 'ProdutoController@updatePost',
        'as'   => 'produto.update.post'
]);

// ===================================================================
// ======================== CHAMADAS VIA AJAX ========================
// ===================================================================

Route::post('/produto/getProdutos', [
    'uses'  =>  'ProdutoController@getProduto'
]);

Route::post('/update/by/produto', [
    'uses' => 'ProdutoController@updateProduto'
]);

Route::post('/produto/destroy', [
    'uses' => 'ProdutoController@destroy'
]);

Route::post('/produto/ordernar', [
    'uses'  =>  'ProdutoController@order'
]);
