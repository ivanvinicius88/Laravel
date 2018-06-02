<?php 
namespace newEstoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
    
    public function lista(){
        $produtos = DB::select('select * from produtos');
        return view('produto/produto-listagem')->with('produtos', $produtos);
    }

    public function mostra(){
        // $id = Request::input('id', '0');
        $id = Request::route('id');
        $resposta = DB::select('select * from produtos where id=?', [$id]) ;
        if(empty($resposta)){
            return "Esses produtos não existem!";
        }
        return view ('produto/detalhes')->with('p', $resposta[0]);

    }

    public function novo(){
        return view('produto/formulario');
        }

    public function adiciona(){
        // pegar dados do formulario
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        // salvar no banco de dados
        // retornar alguma view
        // $all = Request::all();
        // $only = Request::only('nome', 'valor', '...');
        // return implode( ', ', array($nome, $descricao, $valor, $quantidade));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)',array($nome, $valor, $descricao, $quantidade));
    }

}