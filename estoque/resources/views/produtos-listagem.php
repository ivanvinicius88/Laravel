
<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>Laravel</title>

  </head>
  <body style="background-color:#FFFFF0;">
  <div class="container">
  <h1 class="text-center my-5">Listagem de produtos</h1><br>
        <table class="table table-striped table-bordered">
            <tr>
                <td class="text-center h6">Nome</td>
                <td class="text-center h6">Valor</td>
                <td class="text-center h6">Descrição</td>
                <td class="text-center h6">Quantidade</td>
                <td class="text-center h6">Pesquisar</td>
            </tr>
            <?php foreach ($produtos as $p): ?>
                <tr>
                <td class="text-center"><?= $p->nome ?></td>
                <td class="text-center"><?= $p->valor ?></td>
                <td class="text-center"><?= $p->descricao ?></td>
                <td class="text-center"><?= $p->quantidade ?></td>
                <td class="text-center"><a  href="https://google.com/ncr"><i class="fas fa-search mx-2 "></i></a></td>
                
                </tr>
            <?php endforeach ?>
        </table>







    </div>
 </body>
</html>