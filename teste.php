<!DOCTYPE html>
<?php
include("valida.php");
include("conexao.php");

$sql = "SELECT COUNT(*) AS total_usuarios FROM usuarios";
$resultado = $conn->query($sql);

$total_usuarios = 0;
if ($resultado && $resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $total_usuarios = $row['total_usuarios'];
}
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .main-container {
            display: flex;
        }

        .menu-left {
            width: 15%;
            background-color: #0A0078;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .menu-left a {
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            text-decoration: none;
            margin-bottom: 15px;
            width: 100%;
            display: block;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .menu-left a:hover {
            background-color: #333;
        }

        .cabecalho {
            width: 100%;
            padding: 20px;
            background-color: #0A0078;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            border-radius: 10px;
        }

        .ola {
            font-size: 24px;
            font-weight: bold;
        }

        .sair {
            background-color: #fff;
            color: #0A0078;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .sair:hover {
            background-color: #ddd;
            color: red;
        }

        .content {
            width: 85%;
            padding: 40px;
        }

        .wrap-main {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: 20px;
            text-align: center;
        }

        .wrap-main h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .usuarios-info {
            padding: 20px;
            background: #0A0078;
            border-radius: 10px;
            color: white;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .img-container img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="menu-left">
            <a href="principal.php">Início</a>
            <a href="cadastroUsuarios.php">Cadastrar Usuário</a>
            <a href="#">Histórico</a>
            <a href="#">Teste</a>
            <a href="#">Lebron James</a>
        </div>

        <div class="content">
            <div class="cabecalho">
                <span class="ola">Olá, <?= $_SESSION['nome']; ?>!</span>
                <a href="sair.php" class="sair">Sair</a>
            </div>

            <div class="wrap-main">
                <div class="usuarios-info">
                    Viagra
                </div>
                <div class="img-container">
                    <img src="./images/viagra.webp" width="700px" alt="Imagem de exemplo">
                </div>
            </div>
        </div>
    </div>
</body>

</html>