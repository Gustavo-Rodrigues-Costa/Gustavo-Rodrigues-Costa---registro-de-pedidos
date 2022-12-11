<?php
include('config.php');

if(isset($_POST['email_login']) || isset($_POST['senha_login'])) {

    if(strlen($_POST['email_login']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha_login']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email_login = $conn->real_escape_string($_POST['email_login']);
        $senha_login = $conn->real_escape_string($_POST['senha_login']);

        $sql_code = "SELECT * FROM login WHERE email_login = '$email_login' AND senha_login = '$senha_login'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $login = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $login['id'];
            $_SESSION['nome'] = $login['nome'];

            header("Location: menu.php?page=novo");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tela de Login</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background-image:linear-gradient(45deg,rgb(19, 20, 19), rgb(19, 20, 19));
        }
        div{
            background-color: rgb(0, 0, 0);
            position:absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;

        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        button{
            background-color: #177649;
            border:none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        button:hover{
            background-color:  #20b670;
            cursor:pointer;
        }
    </style>
</head>
    <body>
        <div>
            <h1>Login</h1>
            <br>
            <form action="" method="POST">    
            <input type="text" placeholder="Email" name="email_login">
            <br><br>
            <input type="password" placeholder="Senha" name="senha_login">
            <br><br>
            <button type="submit">Enviar</button>
        </div>
    </body>
</html>