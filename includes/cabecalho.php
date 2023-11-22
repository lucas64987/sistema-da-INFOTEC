<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        :root {
            --bs-primary-rgb: 0, 30, 141;
            --bs-secondary-rgb: 0, 74, 141;
        }

        .navbar {
            height: 160px;
        }

        .navbar-brand {
            position: absolute;
            left: 20px;
            top: 20px;
        }

        #formProcurar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #formProcurar form {
            display: flex;
            align-items: center;
        }

        #formProcurar input[type="text"] {
            color: black;
            background-color: white;
            border: 1px solid #ccc;
            padding: 10px;
            width: 400px; /* Aumente este valor conforme necessário */
        }

        #formProcurar button {
            color: black;
            background-color: white;
            border: 1px solid #ccc;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 15px;
            margin-left: 5px;
        }

    #btn-secundario button {
        color: black;
        background-color: white !important;
        border: 1px solid #ccc;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 15px;
        margin-left: 5px;
        text-align: right;
        
}

#btn-terciario button {
        color: black;
        background-color: white !important;
        border: 1px solid #ccc;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 15px;
        margin-left: 5px;
        text-align: right;
        
}
    </style>

</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #001E8D;" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="/includes/img/logo.png" alt="Logo" width="135">
                </a>

                <div id="formProcurar">
                    <form action="pesquisar.php" method="get">
                        <i class="fa-solid fa-magnifying-glass"></i>

                        <input type="text" name="q" placeholder="em desenvolvimento">

                        <button type="submit">Procurar</button>
                    </form>

                </div>

                <div id="btn-secundario" class="ms-auto">
                <a href="/admin/clientes/login.php">
                    <button type="submit">Login</button></a>

                
                <a href="/admin/clientes/index.php">
                    <button type="submit">cadastrar</button></a>

                    <a href="/admin/produtos/index.php">
                    <button type="submit">cadastrar produtos</button></a>

                    
                </div>

               

              
            </div>
        </nav>
    </header>
</body>

</html>
