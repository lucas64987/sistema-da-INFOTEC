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
</head>
<body>

<div class="carousel">
  <img src="/includes/img/tkimg.jpg" alt="Imagem 1" class="active">
  <img src="/includes/img/tk2img.jpg" alt="Imagem 2">
  <img src="/includes/img/tk3img.jpg" alt="Imagem 3">
</div>

<script>
  const images = document.querySelectorAll('.carousel img');
  let index = 0;

  setInterval(() => {
    images[index].classList.remove('active');
    index = (index + 1) % images.length;
    images[index].classList.add('active');
  }, 3000); // Troca a imagem a cada 3 segundos (3000 milissegundos)
</script>

</body>
</html>

    

<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/rodape.php";
    ?>

