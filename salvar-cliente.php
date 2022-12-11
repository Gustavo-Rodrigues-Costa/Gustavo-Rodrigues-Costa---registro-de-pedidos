<?php


    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $pedido = $_POST["pedido"];
            $nome_cliente = $_POST["nome_cliente"];
            $sobrenome = $_POST["sobrenome"];
            $email_cliente = $_POST["email_cliente"];
            $sexo = $_POST['sexo'];
            $data_nasc = $_POST["data_nasc"];
            $pais = $_POST["pais"];
            $endereço = $_POST["endereço"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $telefone = $_POST["telefone"];
        
            $sql = "SELECT (pedido, nome_cliente, sobrenome, email_cliente, sexo, data_nasc, pais, endereço, cidade, estado, telefone) FROM (clientes)";
            $res = mysqli_query($conn, "INSERT INTO clientes (pedido, nome_cliente, sobrenome, email_cliente, sexo, data_nasc, pais, endereço, cidade, estado, telefone)  VALUES ('$pedido', '$nome_cliente', '$sobrenome', '$email_cliente', '$sexo', '$data_nasc', '$pais', '$endereço', '$cidade', '$estado', '$telefone')");            
            
    

            if ($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar2';</script>";
            }else{
                print "<script>alert('Não foi possivel Cadastrar');</script>";
                print "<script>location.href='?page=listar2';</script>";
            }
            break;
        
        case 'editar2':
            $pedido = $_POST["pedido"];
            $nome_cliente = $_POST["nome_cliente"];
            $sobrenome = $_POST["sobrenome"];
            $email_cliente = $_POST["email_cliente"];
            $sexo = $_POST["sexo"];
            $data_nasc = $_POST["data_nasc"];
            $pais = $_POST["pais"];
            $endereço = $_POST["endereço"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $telefone = $_POST["telefone"];

            $sql = "UPDATE clientes SET pedido='{$pedido}', nome_cliente='{$nome_cliente}', sobrenome='{$sobrenome}', email_cliente='{$email_cliente}', sexo='{$sexo}', data_nasc='{$data_nasc}', pais='{$pais}', endereço='{$endereço}', cidade='{$cidade}', estado='{$estado}', telefone='{$telefone}'  WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            $res = $conn->query($sql);
            if ($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar2';</script>";
            }else{
                print "<script>alert('Não foi possivel Cadastrar');</script>";
                print "<script>location.href='?page=listar2';</script>";
            }
            break;

        case 'excluir2':
            $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar2';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir');</script>";
                print "<script>location.href='?page=listar2';</script>";
            }
            break;

    }