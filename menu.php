<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud de Cadastros de Pedidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>

.box{

    position: left;
    top: 50%;
    left: 50%;
    transform: translate(0,0);
    padding: 0px;
    border-radius: 10px;
    text-decoration:none;
}
a{

    text-decoration: none;
    border-radius: 10px;
    color:black;  

}

</style>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Registro de Pedidos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <div class="box">

              <a class="nav-link" href="?page=novo"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Novo Usuário</button></a>
            </li>
            <li class="nav-item">
            <div class="box">

              <a class="nav-link" href="?page=listar">          
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Listar Usuários</button></a>
            </li>

            <li class="nav-item">
            <div class="box">

              <a class="nav-link" href="?page=novo2">            
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Novo Pedido</button></a>
    </li>
    <li class="nav-item">

    <div class="box">

    <a class="nav-link" href="?page=listar2">            
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Listar Pedidos</button></a>



</li>
<a class="nav-link" href="logout.php"><div class="fixed-right"><button class="btn btn-outline-primary" type="submit">Logout</button></a></div>
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        
        
        <?php
        include("config.php");
        if (@$_REQUEST["busca"]){
            include("listar-cliente.php");
        }

        if(@$_REQUEST["procura"]){
        include("listar-usuario.php");
        }

        switch (@$_REQUEST["page"]) {
          case "novo":
            include("novo-usuario.php");
            break;
          case "listar":
            include("listar-usuario.php");
            break;
          case "salvar":
            include("salvar-usuario.php");
            break;
          case "editar":
            include("editar-usuario.php");
            break;
        
          case "novo2":
            include("novo-cliente.php");
            break;  
          case "listar2":
            include("listar-cliente.php");
            break;
          case "salvar2":
            include("salvar-cliente.php");
            break;
          case "editar2":
            include("editar-cliente.php");
            break;
            
              
          ?>
      
    <?php
              };
    ?>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>