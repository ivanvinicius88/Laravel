
@extends('layout/principal')

  @section('conteudo')
  <h1 class="text-center my-5">Listagem de produtos</h1><br>
        <table class="table table-striped table-bordered">
            <tr>
                <td class="text-center h6">Nome</td>
                <td class="text-center h6">Valor</td>
                <td class="text-center h6">Descrição</td>
                <td class="text-center h6">Quantidade</td>
                <td class="text-center h6">Pesquisar</td>
            </tr>
             @foreach ($produtos as $p) 
                <tr>
                <td class=""> {{ $p->nome }}</td>
                <td class=""> {{ $p->valor }} </td>
                <td class=""> {{ $p->descricao}} </td>
                <td class=""> {{ $p->quantidade }} </td>
                <td class=""><a  href="/produtos/mostra/{{ $p->id}}"><i class="fas fa-search mx-2 "></i></a></td>
                                                            <!--mostra?id-->
                </tr>
            @endforeach 
        </table>
@stop
