<?php

$categorias  = ['Limpeza', 'Utilidade'];

$cont       = 0;
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Categorias</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link" href="./listProdutos.php">Produtos</a>
                <a class="nav-item nav-link" href="./listCategorias.php">Categorias</a>
            </div>
        </nav>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <a href="./formCategorias.php" class="btn btn-info">Novo</a> 
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <input class="form-control" id="pesquisa" type="text" placeholder="Pesquisar">
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Ações</th>
          </tr>
        </thead>
        <?php if($categorias>$cont){ do{ ?>
          <tr>
            <td scope="row"><?=$categorias[$cont]?></td>
            <td>
              <a href="#" class="badge badge-pill badge-primary">Editar</a>
              <a href="#" class="badge badge-pill badge-primary">Excluir</a>
            </td>
          </tr>
          <?php $cont += 1; }while($cont<=1);} ?>
      </table>
    </div>
  </body>
</html>