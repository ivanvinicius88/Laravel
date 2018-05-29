<?php
namespace estoque\Http\Controllers;
use Request;

use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller {

    public function lista(){
        //return '<h1>Listagem de produtos com Laravel</h1>';

        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }


    public function mostra(){
        //$id = Request::input('id', '1');
        $id = Request::route('id', '1');

        $resposta = DB::select('select * from produtos where id = ?', [$id]);
        
        return view('produto.mostra')->with('p', $resposta[0]);
        }

    public function novo(){
         return view('produto.formulario');
    }
    
    public function adiciona() {
         $nome = Request::input('nome');
         $valor = Request::input('valor');
         $descricao = Request::input('descricao');
         $quantidade = Request::input('quantidade');

         DB::table('produtos')->insert([ 'nome' => $prnome, 'valor' => $prvalor, 'descricao' => $prdescricao, 'quantidade' => $prquantidade]);
        
         return view('produto.adicionado')->with('nome', $prnome);
    }         
    



}