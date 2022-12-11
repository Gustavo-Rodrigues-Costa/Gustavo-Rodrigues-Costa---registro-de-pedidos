
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Listar Pedidos</title>
    <style>
        .box-search{
            display: flex;
            justify-content: right;
            gap: .1%;
            width:70%;
        }
        .print{
            justify-content:right;
        }
    </style>
    
   
    
</head>
    <body>
    <h1>Listar Pedidos</h1>
    <br>
    <?php
    include('config.php');?>
    <div class="box-search">
    <form class="box-search" action="">
        <input class="form-control mr-sm-2"name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Buscar..." type="text">
        
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
        <br>
    </form>
    </div> 
    <br>       

    <?php
    $sql = "SELECT * FROM clientes";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;


    if($qtd > 0){
        print "<table class='table table-hover 
        table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Pedido</th>";
        print "<th>Nome</th>";
        print "<th>Sobrenome</th>";
        print "<th>E-mail</th>";
        print "<th>Sexo</th>";
        print "<th>Nascido em</th>";
        print "<th>País</th>";
        print "<th>End.</th>";
        print "<th>Cidade</th>";
        print "<th>Estado</th>";
        print "<th>Tel.</th>";
        print "<th>Ações</th>";
        print "</tr>";}?>

        <?php


        if (!isset($_GET['busca'])) {
            ?>
        <?php
        } else {
            $pesquisa = $conn->real_escape_string($_GET['busca']);
            $sql = "SELECT * FROM clientes 
                WHERE id LIKE '%$pesquisa%' 
                OR nome_cliente LIKE '%$pesquisa%'
                OR sobrenome LIKE '%$pesquisa%'
                OR email_cliente LIKE '%$pesquisa%'";
                
        
        $res = $conn->query($sql) or die("ERRO ao consultar! " . $conn->error);}
         

if ($res->num_rows == 0) {

?>
<tr>

    <td colspan="3">Nenhum resultado encontrado...</td>

</tr>

            
                    <?php
            } else { 
                while($row = $res->fetch_assoc()) {
            print "<tr>";
            print "<td>" .$row['id']."</td>";
            print "<td>" .$row['pedido']."</td>";
            print "<td>" .$row['nome_cliente']."</td>";
            print "<td>" .$row['sobrenome']."</td>";
            print "<td>" .$row['email_cliente']."</td>";
            print "<td>" .$row['sexo']."</td>";
            print "<td>" .$row['data_nasc']."</td>";
            print "<td>" .$row['pais']."</td>";
            print "<td>" .$row['endereço']."</td>";
            print "<td>" .$row['cidade']."</td>";
            print "<td>" .$row['estado']."</td>";
            print "<td>" .$row['telefone']."</td>";
            print "<td>
            
            
           

            <button 
                onclick=\"location.href='?page=editar2&id=".$row['id']."';\" class='btn btn-success'>Editar
                </button>  

            <button 
                onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                {location.href='?page=salvar2&acao=excluir2&id=".$row['id']."';}else{false;}\"
                 class='btn btn-danger'>Excluir</button> 

        </td>";}
        print "</tr>";
        print "</table>";}?>
                
                
    
    </body>
</html>