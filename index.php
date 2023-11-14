<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/sugunda-barra.php";
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>INFOTEC</title>
    <meta name="description" content="sistema da loja infotec">
    <meta name="keywords" content="sistema da loja infotec">
    <meta name="author" content="LUCAS, VITOR, MATHEUS">
</head>

<body>

<title>INFOTEC</title>
<style>
  /* Estilo para as imagens do carrossel */
  #carouselExampleSlidesOnly img {
    max-height: 300px; /* Defina a altura máxima desejada */
    width: auto; /* Isso manterá a proporção correta */
  }
</style>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/includes/img/tkimg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="/includes/img/tk2img.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/includes/img/tk3img.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    



    </body>
    


</html>

<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/rodape.php";
    ?>

