<?php
 if (isset($_POST['download'])) {
     ob_clean(); // Limpar o buffer de saída

     $file_name = isset($_POST['file_name']) ? $_POST['file_name'] : '';

     if (!empty($file_name) && file_exists($file_name)) {
         header('Content-Description: File Transfer');
         header('Content-Type: application/octet-stream');
         header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');
         header('Expires: 0');
         header('Cache-Control: must-revalidate');
         header('Pragma: public');
         header('Content-Length: ' . filesize($file_name));

         readfile($file_name);
         exit;
     } else {
         echo 'O arquivo não existe.';
     }
 }
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/sugunda-barra.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        h1 {
            text-align: center;
        }

        .centro {
            margin-bottom: 20px;
        }

        .centralizar {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .redes-sociais {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .redes-sociais img {
            margin: 0 5px;
        }

        /* Estilo adicionado para o rodapé */
        footer {
            margin-top: 20px;
            text-align: center;
            margin-top: auto;
        }

        /* Adicionado estilo para o elemento que contém o rodapé */
        .content-wrapper {
            margin-bottom: 40px; /* Ajuste conforme necessário */
        }

        /* Adicionado estilo para fixar o rodapé no final da página */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .centro {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="centro">
        <br><br><br><br>
        <h1>Introdução</h1>
        <p>Bem-vindo à INFOTEC nossa loja de hardware e periféricos! Somos uma equipe apaixonada por tecnologia, e nossa missão é oferecer a você a melhor experiência em compras para atender às suas necessidades de hardware e periféricos.

            Na INFOTEC, você encontrará uma ampla variedade de produtos para atender às suas demandas, seja você um entusiasta de jogos procurando por placas de vídeo poderosas, um profissional que precisa de componentes confiáveis para montar uma estação de trabalho robusta, ou alguém que busca aprimorar sua experiência de computação com os melhores periféricos do mercado.</p>
        <h2>Funções básicas</h2>
        <ul>
            <li>Cadastro de produtos<br>Registre novos produtos no sistema para mantê-lo atualizado com o estoque disponível</li>
            <li>Editar<br>Faça ajustes nas informações dos produtos conforme necessário:</li>
            <li>Excluir<br>Remova produtos do sistema quando necessário:</li>
            <li>Consultar<br>Pesquise produtos disponíveis na loja:</li>
        </ul>

        <h2>Seção para cada funcionalidade do sistema</h2><br>
        <ol>
            <li>Cadastro de produtos<br>acesse a téla de Cadastro de produtos e preencha os campos com a informação do produto</li>
            <li>Editar<br>digite as alterações que você quer e clique em Editar, as informações do produto serão atualizadas</li>
            <li>Exclusão<br>clique em Excluir no campo do produto que você deseja excluir o produto será excluído automaticamente</li>
            <li>Consulta<br>você pode consultar todos os produtos cadastrados na loja</li>
        </ol>

        <div class="centralizar">
            <h1>Onde procurar ajuda</h1>
            <div class="redes-sociais">
                <img src="/includes/img/facebook.png" alt="Logo Facebook">
                <img src="/includes/img/instagram.png" alt="Logo Instagram">
                <img src="/includes/img/whatsapp.png" alt="Logo WhatsApp">
            </div>
            <p>
                Facebook: facebook.com/infotec<br>
                Instagram: instagram.com/infotec<br>
                WhatsApp: (14) 5555-5555
            </p>
        </div>
    </div>

    <form method="post" action="">
        <input type="hidden" name="file_name" value="guia_do_usuario.pdf">
        <button type="submit" name="download">Baixar a Guia do Usuário</button>
    </form>

    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/sugunda-barra.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Seu código CSS aqui -->
</head>

<body>
    <!-- Seu código HTML/PHP aqui -->

    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/sugunda-barra.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Seu código CSS aqui -->
</head>

<body>
    <!-- Seu código HTML/PHP aqui -->

   
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
    ?>

