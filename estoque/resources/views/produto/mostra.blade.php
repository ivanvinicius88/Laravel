@extends('layout/principal')

@section('conteudo')
        <h1 class="text-center my-5">Detalhes do produtos  {{ $p->nome}}</h1><br>
        <ul>
            <li>Valor: {{ $p->valor}} </li>
            <li>Descrição: {{  $p->descricao}} </li>
            <li>Quantidade: {{ $p->quantidade}} </li>
        </ul>
@stop