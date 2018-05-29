@extends('layout.principal')

@section('conteudo')

<h1>Cadastrar Novo produto</h1>
<form method="#" action="produtos/adiciona">
    <div class="form-group">
        <label>Nome</label>
        <input id="#" name="prnome" class="form-control">
    </div>

    <div class="form-group">
        <label>Descricao</label>
        <input id="#" name="prdescricao" class="form-control">
    </div>

    <div class="form-group">
        <label>Valor</label>
        <input id="#" name="prvalor" class="form-control">
    </div>

    <div class="form-group">
        <label>Quantidade</label>
        <input id="#" name="prquantidade" type="number" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    <button type="reset" class="btn btn-danger btn-block">Limpar</button>
</form>