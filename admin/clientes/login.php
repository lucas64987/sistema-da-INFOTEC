<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/sugunda-barra.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login INFOTEC (em desenvolvimento)</h1>
<form action="" method="POST">
    <p>
    <label>E-mail</label>
    <input type="text" name="email">
    </p>
    <p>
    <label>Senha</label>
    <input type="password" name="senha">
    </p>
    <p>
    <button type="submit">Entrar</button>
    </p>
</form> 
</body>
</html>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>