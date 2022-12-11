<?php
    $sql = "SELECT * FROM clientes WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<h1>Editar Pedido</h1>
<form action="?page=salvar2" method="POST">
   <input type="hidden" name="acao" value="editar2"> 
   <input type="hidden" name="id" value="<?php print $row->id; ?>"> 
    <div class="mb-3">
        <label>Pedido</label>
        <input type="text" name="pedido" class="form-control" value="<?php print $row->pedido; ?>">
    </div>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_cliente" class="form-control" value="<?php print $row->nome_cliente; ?>">

    <div class="mb-3">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" value="<?php print $row->sobrenome; ?>">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email_cliente" class="form-control" value="<?php print $row->email_cliente; ?>">
    </div>
    <div class="mb-3">
        <label>Sexo: </label>
        <input type="radio" id="feminino" name="sexo" value="<?php print $row->sexo; ?>">
        <label for="feminino" value="<?php print $row->data_nasc; ?>">  Feminino</label>
        <input type="radio" id="masculino" name="sexo" value="<?php print $row->sexo; ?>">
        <label for="masculino" value="<?php print $row->data_nasc; ?>"> Masculino</label>
        <input type="radio" id="outro" name="sexo" value="<?php print $row->sexo; ?>">
        <label for="outro" value="<?php print $row->data_nasc; ?>"> Outro</label>
    </div>
    <div class="mb-3">
        <label>Nascido em</label>
        <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc; ?>">
    </div>

    <div class="mb-3">
        <label>País</label>
        <input type="text" name="pais" class="form-control" value="<?php print $row->pais; ?>">
    </div>

    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereço" class="form-control" value="<?php print $row->endereço; ?>">
    </div>

    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control" value="<?php print $row->cidade; ?>">
    </div>

    <div class="mb-3">
        <label>Estado</label>
        <input type="text" name="estado" class="form-control" value="<?php print $row->estado; ?>">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="bigint" name="telefone" class="form-control" value="<?php print $row->telefone; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>

