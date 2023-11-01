<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT']. "/includes/sugunda-barra.php";
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Infotec - Fale Conosco</title>
    <style>
        .centro {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 35vh;
        }
 
        h1 {
            color: #001e8d;
            font-size: 30px;
        }
 
        p {
            color: black;
            font-size: 20px;
        }
 
        .redes-sociais {
            display: flex;
            align-items: center;
        }
 
        .redes-sociais img {
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="centro">
        <h1>Contate-nos</h1>
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
</body>
</html>
 
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php"; ?>