<?php

    require_once $_SERVER['DOCUMENT_ROOT']. "/includes/cabecalho.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/clientecontroller.php";

        if(isset($_GET['del']) && !empty($_GET['id_clientes'])){
            $clientecontroller = new clientecontroller();
            $clientecontroller->exculircliente();
        }
?>

    <MAIN class="container mt-3 mb-3">
        <h1>lista de clientes cadastrados <a href="cadastrarCliente.php" class= "btn btn-primary float-end">cadastrar</a></h1>
        
        
        <?php include_once $_SERVER ['DOCUMENT_ROOT']."/includes/alerta.php" ?>
        
            <table class="table table-striped">
            <thead>
                
                <tr>
                    <th>#</th>
                    <th>nome</th>
                    <th>email</th>
                    <th>cpf</th>
                    <th>endereco</th>
                    <th>telefone</th>
                    <th style ="width: 200px;"ação>ação</th>

                </tr>

            </thead>
            <tbody>
    <?php

        $clientecontroller = new Clientecontroller();

        $clientes = $clientecontroller->listarcliente();

        var_dump($clientes);
        foreach($clientes as $dados):
    

    ?>

                <tr>
                    <td><?=$dados->id_clientes ?></td>
                    <td><?=$dados->nome ?></td>
                    <td><?=$dados->email ?></td>
                    <td><?=$dados->cpf ?></td>
                    <td><?=$dados->endereco ?></td>
                    <td><?=$dados->telefone ?></td>
                    <td>
                        <a href="editar.php?id_clientes=<?=$dados->id_clientes ?>" class ="btn btn-primary">Editar</a>
                        <a href="index.php?id_clientes=<?=$dados->id_clientes?>&del" class ="btn btn-danger">Excluir</a>

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