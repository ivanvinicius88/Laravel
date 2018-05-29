@extends('layout.principal')

@section('conteudo')

<br>
<br>
<br>
<div class="container my-5">
<hr>
    <h1 class="my-2">Cadastrar Novo produto</h1>
    <form method="#" action="produtos/adiciona">
        <div class="form-row">
            <div class="form-group mx-4 col-md-4">
                <label>Nome</label>
                <input id="#" name="prnome" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label>Descricao</label>
                <input id="#" name="prdescricao" class="form-control">
            </div>
        </div>
        <div class="form-row mb-5">
            <div class="form-group mx-4 col-md-3">
                <label>Valor</label>
                <input id="#" name="prvalor" class="form-control">
            </div>

            <div class="form-group col-md-1">
                <label>Quantidade</label>
                <input id="#" name="prquantidade"  class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mx-4">Enviar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>
    </form>
</div>