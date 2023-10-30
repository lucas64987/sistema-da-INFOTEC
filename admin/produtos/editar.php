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

            <label for="descricao" class="form-label">Email</label>

            <input type="text" name="descricao" id="descricao" class="form-control"required value="<?=  $produto->descricao?>">

        </div>

        <div class="col-md-6">

            <label for="senha" class="form-label">Senha</label>

            <input type="password" name="senha" id="senha" class="form-control">
            <p class="text-secondary">caso queira manter a senha, deixe o campo em branco.</p>

        </div>

        <div class="col-md-8">

            <label for="perfil" class="form-label">Perfil</label>

            <select name="perfil" class="form-select" id="perfil"required>

                <option>Selecione o Perfil</option>

                <option value="usuario"
                <?=($usuario->perfil == "usuario")?"selected":"";?>>Usuario</option>

                <option value="administrador"
                <?=($usuario->perfil == "adiministrador")?"selected":"";?>>Administrador</option>

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