<?php

    require_once $_SERVER['DOCUMENT_ROOT']. "/includes/cabecalho.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/produtocontroller.php";


    $produtocontroller = new produtoController();

    $produtocontroller->cadastrarProduto();


?>
 <MAIN class="container mt-3 mb-3">
        <h1>cadastrar produto</h1>

        <form action="cadastrar.php" method="post" class="row g-2">
        <div class="col-md-12">
            <label for="nome" class ="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>

        </div>

        <div class="col-md-6">
            <label for="descricao" class ="form-label">Descrição</label>
            <input type="int" name="descricao" id="descricao" class="form-control"required>
        </div>

        <div class="col-md-6">
            <label for="quantidade" class ="form-label">Quantidade</label>
            <input type="int" name="quantidade" id="quantidade" class="form-control"required>
        </div>

        <div class="col-md-6">
            <label for="preco" class ="form-label">Preço</label>
            <input type="decimal" name="preco" id="preco" class="form-control"required>
        </div>

        <div class="col-md-6">
            <label for="cod_produto" class ="form-label">Cod_Produto</label>
            <input type="int" name="cod_produto" id="cod_produto" class="form-control"required>
        </div>

        <div class="col-md-8">
            <label for="categoria" class="form-label">perfil</label>
            <select name="categoria" class="form-select" id="perfil">
                <option>selecione o prefil</option>
                <option value="hardware">Hardware</option>
                <option value="periferico">Periferico</option>

            </select>
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

