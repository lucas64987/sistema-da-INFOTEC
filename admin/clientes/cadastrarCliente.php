<?php

    require_once $_SERVER['DOCUMENT_ROOT']. "/includes/cabecalho.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/clientecontroller.php";


    $clientecontroller= new clientecontroller();
-
    $clientecontroller->cadastrarcliente();


?>
 <MAIN class="container mt-3 mb-3">
        <h1>faça seu cadastro na INFOTEC</h1>

        <form action="cadastrarCliente.php" method="post" class="row g-2">
        <div class="col-md-12">
            <label for="nome" class ="form-label">nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>

        </div>

        <div class="col-md-6">
            <label for="email" class ="form-label">e-mail</label>
            <input type="email" name="email" id="email" class="form-control"required>
        </div>

        <div class="col-md-6">
            <label for="senha" class ="form-label">senha</label>
            <input type="password" name="senha" id="senha" class="form-control"required>
        </div>

        <div class="col-md-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="int" name="cpf" id="cpf" class="form-control" required>
            <h9>digite seu CPF, com os pontos</h9>

        </div>

        <div class="col-md-6">
            <label for="endereco" class ="form-label">endereco</label>
            <input type="text" name="endereco" id="endereco" class="form-control"required>
        </div>

        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" name="telefone" id="telefone" class="form-control" required>
        </div>

        

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">cadastrar</button>
            <a href="index.php" class="btn btn-secondary">cancelar</a>


        </div>


        </form>

 </MAIN>      

 <?php

require_once $_SERVER['DOCUMENT_ROOT']. "/includes/rodape.php";



?>