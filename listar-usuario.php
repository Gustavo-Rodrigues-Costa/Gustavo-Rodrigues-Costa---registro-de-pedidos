<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <style>
        .box-search{
            display: flex;
            justify-content: right;
            gap: .1%;
            width:70%;
        }
    </style>
</head>
<body>
    

<h1>Listar Usuários</h1>
<br>
<?php
    include('config.php');?>
    <div class="box-search">
    <form class="box-search" action="">
        <input class="form-control mr-sm-2"name="procura" value="<?php if(isset($_GET['procura'])) echo $_GET['procura']; ?>" placeholder="Buscar..." type="text">
        
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
        <br>
    </form>
    </div> 
    <br>       
<?php
    $sql = "SELECT * FROM usuarios";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover 
        table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";}


        ?>

        <?php
        if (!isset($_GET['procura'])) {
            ?>
        <?php
        } else {
            $pesquisa = $conn->real_escape_string($_GET['procura']);
            $sql = "SELECT * FROM usuarios 
                WHERE id LIKE '%$pesquisa%' 
                OR nome LIKE '%$pesquisa%'
                OR email LIKE '%$pesquisa%'
                OR senha LIKE '%$pesquisa%'";
                
        
        $res = $conn->query($sql) or die("ERRO ao consultar! " . $conn->error);}
         

if ($res->num_rows == 0) {

?>

<?php
            } else { 
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>" .$row->id."</td>";
            print "<td>" .$row->nome."</td>";
            print "<td>" .$row->email."</td>";
            print "<td>" .$row->data_nasc."</td>";
            print "<td>
            
                <button 
                onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar
                </button>  

                <button 
                onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                {location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"
                 class='btn btn-danger'>Excluir
                 </button> 
  
            </td>";}
            print "</tr>";
        }
        print "</table>";
   
?>
    </body>
</html>