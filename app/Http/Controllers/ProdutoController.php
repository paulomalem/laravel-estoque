<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Validation\Validator;

use App\Produto;

class ProdutoController extends Controller {

    public function index () {
        return view('produtos.index');
    }

    public function getProduto (Request $request) {
        $data = $request->all();

        if (count($data)) {
            if (intval($data[0]) === 0) {
                $produtos = Produto::where('estoque', '=', $data[0])->get();
            }
            else {
                $produtos = Produto::where('estoque', '>=', $data[0])->get();
            }

            return response()->json([
                'produtos' => $produtos
            ]);
        }

        $produtos = Produto::all();
        
        return response()->json([
            'produtos' => $produtos
        ]);
        
    }

    public function create () {
        
        return view('produtos.create');
    }

    public function createPost (Request $request) {
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->descricao = $request->descricao;
        $produto->estoque = $request->estoque;

        $produto->save();

        return redirect('produto');
    }


    public function update (Request $request) {
        $produto = Produto::find($request->id);

        return view('produtos.view', ['produto' => $produto]);
    }


    public function updatePost (Request $request) {
        $produto = Produto::find($request->id);
        
        $produto->nome          = $request->nome;
        $produto->preco         = $request->preco;
        $produto->descricao     = $request->descricao;
        $produto->estoque       = $request->estoque;

        $produto->save();

        return redirect('produto');
    }

    public function updateProduto (Request $request) {
        $data = $request->all();

        try {
            $produto = Produto::find($data['id']);

            $produto->nome          = $data['nome'];
            $produto->preco         = $data['preco'];
            $produto->descricao     = $data['descricao'];
            $produto->estoque    = $data['estoque'];

            $produto->save();
        } catch (Exception $e) {
            dd($e);
        }

        return response()->json([
            'result' => 'Atualizado com sucesso'
        ]);
    }

    public function destroy (Request $request) {
        $data = $request->all();

        try {
            $produto = Produto::find($data['id']);
            $produto->delete();
        } catch (Exception $e) {
            dd($e);
        }

        return response()->json([
            'result' => 'Deletado com sucesso'
        ]);
    }

    public function order (Request $request) {
        $data = $request->all();

        $produtos = Produto::orderBy($data[0])->get();

        return response()->json([
            'produtos' => $produtos
        ]);
    }
}
