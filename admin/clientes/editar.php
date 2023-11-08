<?php

 

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/clientecontroller.php";

 

$clienteController = new Clientecontroller();

 

$clientes = $clienteController->editarcliente();

 

//var_dump($clientes);

?>

<main class="container mt-3 mb-3">

    <h1>Editar informações da conta</h1>

 

    <form action="editar.php?id_clientes=<?=$clientes->id_clientes ?>" method="post" class="row g-3">

        <div class="col-md-12">

            <label for="nome" class="form-label">Nome</label>

            <input type="text" name="nome" id="nome" class="form-control" required value="<?=$clientes->nome ?>">

        </div>

        <div class="col-md-6">

            <label for="email" class="form-label">Email</label>

            <input type="text" name="email" id="email" class="form-control"required value="<?=  $clientes->email?>">

        </div>

        <div class="col-md-6">

        <label for="senha" class="form-label">Senha</label>

            <input type="password" name="senha" id="senha" class="form-control">
            <p class="text-secondary">caso queira manter a senha, deixe o campo em branco.</p>

        </div>

        <div class="col-md-6">

            <label for="cpf" class="form-label">CPF</label>

            <input type="int" name="cpf" id="cpf" class="form-control"required value="<?=  $clientes->cpf?>">

        </div>


        <div class="col-md-6">

            <label for="endereco" class="form-label">endereco</label>

            <input type="text" name="endereco" id="endereco" class="form-control"required value="<?=  $clientes->endereco?>">

        </div>

        <div class="col-md-6">

            <label for="telefone" class="form-label">telefone</label>

            <input type="int" name="telefone" id="telefone" class="form-control"required value="<?=  $clientes->telefone?>">

        </div>

       

        <div class="col-12">

            <button type="submit" class="btn btn-primary">salvar</button>

            <a href="index.php" class="btn btn-secondary">Cancelar</a>

        </div>

    </form>

</main>

 

 

<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";

?>