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
}