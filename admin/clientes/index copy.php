<?php

    require_once $_SERVER['DOCUMENT_ROOT']. "/includes/cabecalho.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/produtocontroller.php";

        if(isset($_GET['del']) && !empty($_GET['id_produto'])){
            $produtoController = new produtocontroller();
            $produtoController->exculirproduto();
        }
?>

    <MAIN class="container mt-3 mb-3">
        <h1>lista de produtos <a href="cadastrar.php" class= "btn btn-primary float-end">cadastrar</a></h1>
        
        
        <?php include_once $_SERVER ['DOCUMENT_ROOT']."/includes/alerta.php" ?>
        
            <table class="table table-striped">
            <thead>
                
                <tr>
                    <th>#</th>
                    <th>nome</th>
                    <th>descricao</th>
                    <th>quantidade</th>
                    <th>preco</th>
                    <th>cod produto</th>
                    <th>categoria</th>
                    <th style ="width: 200px;"ação>ação</th>

                </tr>

            </thead>
            <tbody>
    <?php

        $produtoController = new produtocontroller();

        $produto = $produtoController->listarproduto();

        //var_dump($usuario);
        foreach($produto as $dados):
    

    ?>

                <tr>
                    <td><?=$dados->id_produto ?></td>
                    <td><?=$dados->nome ?></td>
                    <td><?=$dados->descricao ?></td>
                    <td><?=$dados->quantidade ?></td>
                    <td><?=$dados->preco ?></td>
                    <td><?=$dados->cod_produto ?></td>
                    <td><?=$dados->categoria ?></td>
                    <td>
                        <a href="editar.php?id_produto=<?=$dados->id_produto ?>" class ="btn btn-primary">Editar</a>
                        <a href="index.php?id_produto=<?=$dados->id_produto?>&del" class ="btn btn-danger">Excluir</a>

                    </td>

                    </tr>

                    <?php
                        endforeach;
                    ?>


            </tbody>
        </table>

    </MAIN>

    <?php

require_once $_SERVER['DOCUMENT_ROOT']. "/includes/rodape.php";


?>