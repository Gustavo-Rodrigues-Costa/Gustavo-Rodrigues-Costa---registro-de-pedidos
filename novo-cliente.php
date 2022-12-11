<?php
if(isset($_POST['submit'])){

    include_once('config.php');
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
}
?>

<h1>Novo Pedido</h1>
<form action="?page=salvar2" method="POST">
   <input type="hidden" name="acao" value="cadastrar"> 
    <div class="mb-3">
        <label>Pedido</label>
        <input type="text" name="pedido" class="form-control">
        <label>Nome</label>
        <input type="text" name="nome_cliente" class="form-control">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control">
        <label>E-mail</label>
        <input type="text" name="email_cliente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sexo: </label>
        <input type="radio" id="feminino" name="sexo" value="feminino">
        <label for="feminino">  Feminino</label>
        <input type="radio" id="masculino" name="sexo" value="masculino">
        <label for="masculino"> Masculino</label>
        <input type="radio" id="outro" name="sexo" value="outro">
        <label for="outro"> Outro</label>
    </div>
    <div class="mb-3">
        <label>Nascido em</label>
        <input type="date" name="data_nasc" class="form-control">
        <label>País</label>
        <input type="text" name="pais" class="form-control">
        <label>Endereço</label>
        <input type="text" name="endereço" class="form-control">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control">
        <label>Estado</label>
        <input type="text" name="estado" class="form-control">
        <label>Telefone</label>
        <input type="bigint" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>