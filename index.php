<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/sugunda-barra.php";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Carrossel de Imagens</title>
  <style>
    .carousel {
      width: 100%;
      height: 350px;
      overflow: hidden;
      position: relative;
      margin: 10px;
    }
    
    .carousel img {
      width: 100%;
      height: 100%;
      position: absolute;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }
    
    .carousel img.active {
      opacity: 1;
    }
    
  </style>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<div class="carousel">
  <img src="/includes/img/banner3.jpg" alt="Imagem 1" class="active">
  <img src="/includes/img/banner6.jpg" alt="Imagem 2">
  <img src="/includes/img/banner7.jpg" alt="Imagem 3">
  <img src="/includes/img/banner9.jpg" alt="Imagem 4">
</div>

<script>
  const images = document.querySelectorAll('.carousel img');
  let index = 0;

  setInterval(() => {
    images[index].classList.remove('active');
    index = (index + 1) % images.length;
    images[index].classList.add('active');
  }, 5000); // Troca a imagem a cada 3 segundos (3000 milissegundos)
</script>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Produtos</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <style>
    /* Estilos de layout para os produtos */
    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px; /* Espaçamento entre os produtos */
    }
    
    .produto {
      width: 200px; /* Largura do produto */
      text-align: center;
      border: 1px solid #ccc;
      padding: 10px;
    }
    
    .produto img {
      max-width: 100%;
      height: auto;
    }
    
    .produto h3 {
      margin-top: 10px;
      font-size: 18px;
    }
    
    .produto p {
      font-size: 14px;
    }
    
    .produto span {
      display: block;
      margin-top: 8px;
      font-weight: bold;
    }

    .btn-comprar {
      margin-top: 20px; /* Espaçamento acima do botão */
      display: flex;
      justify-content: center; /* Centraliza o botão */
    }
  </style>
</head>
<body>

<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/sugunda-barra.php";
?>

<div id="produtos" class="container mt-3 mb-3">
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/includes/alerta.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/produtocontroller.php";

    $produtoController = new produtocontroller();
    $produto = $produtoController->listarproduto();

    foreach ($produto as $dados):
    ?>
        <div class="produto">
            <img src="/uploads/<?=$dados->capa?>" width="100" alt="<?=$dados->nome?>">
            <h3><?=$dados->nome?></h3>
            <p>Preço: <?=$dados->preco?></p>
            <div class="btn-comprar">
    <a class="btn btn-primary">Comprar</a>
</div>
        </div>
    <?php endforeach; ?>
</div>

<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/rodape.php";
?>

</body>
</html>






    

<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/rodape.php";
    ?>

