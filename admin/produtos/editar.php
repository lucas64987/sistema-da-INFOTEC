<?php

 

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/produtocontroller.php";

 

$produtoController = new produtocontroller();

 

$produto = $produtoController->editarproduto();

 

//var_dump($usuario);

?>

<main class="container mt-3 mb-3">

    <h1>Editar informações do produto</h1>

 

    <form action="editar.php?id_produto=<?=$produto->id_produto ?>" method="post" class="row g-3">

        <div class="col-md-12">

            <label for="nome" class="form-label">Nome</label>

            <input type="text" name="nome" id="nome" class="form-control" required value="<?=$produto->nome ?>">

        </div>

        <div class="col-md-6">

            <label for="descricao" class="form-label">descricao</label>

            <input type="int" name="descricao" id="descricao" class="form-control"required value="<?=  $produto->descricao?>">

        </div>

        <div class="col-md-6">

            <label for="quantidade" class="form-label">quantidade</label>

            <input type="int" name="quantidade" id="quantidade" class="form-control"required value="<?=  $produto->quantidade?>">

        </div>

        <div class="col-md-6">

            <label for="preco" class="form-label">preco</label>

            <input type="decimal" name="preco" id="preco" class="form-control"required value="<?=  $produto->preco?>">

        </div>

        <div class="col-md-6">

            <label for="cod_produto" class="form-label">cod_produto</label>

            <input type="int" name="cod_produto" id="cod_produto" class="form-control"required value="<?=  $produto->cod_produto?>">

        </div>


        <div class="col-md-8">

            <label for="categoria" class="form-label">categoria</label>

            <select name="categoria" class="form-select" id="categoria"required>

                <option>Selecione a categoria do produto</option>

                <option value="hardware"
                <?=($produto->categoria == "hardware")?"selected":"";?>>hardware</option>

                <option value="perifericos"
                <?=($produto->categoria == "periferico")?"selected":"";?>>periferico</option>

            </select>

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