<?php
require_once("helpers/util.php");

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Programação Web</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a href="<?php echo $base_url?>" class="navbar-brand">Programação Web</a>
      <form method="post" action="pesquisa.php" class="form-inline">
        <input class="form-control mr-sm-2" type="text" name="busca" placeholder="Digite aqui...." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisa</button>
      </form>
    </nav>


   <!-- <form method="post"  action="research.php">
      <input type="text"  name = "busca" placeholder="Buscar..."/>
      <button type="button" class="btn btn-secondary">Buscar</button>
    </form>

    -->