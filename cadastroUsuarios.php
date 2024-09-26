<!DOCTYPE html>
<?php
include("valida.php");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
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
</head>
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
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .wrap-main h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    .form-table {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        margin: auto;
    }

    .form-table label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-table input[type="text"],
    .form-table input[type="password"] {
        width: calc(100% - 10px);
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s;
    }

    .form-table input[type="text"]:focus,
    .form-table input[type="password"]:focus {
        border-color: #007BFF;
        outline: none;
    }

    .lista {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .login100-form-btn {
        background: #0A0078;
    }

    .login100-form-btn:hover {
        background: #333333;
    }
</style>
<!--Teste-->

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
                <form method="post" action="cadastrar.php" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Cadastro
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Digite seu nome">
                        <input class="input100" type="text" id="nome" name="nome" placeholder="Digite seu nome">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="CPF Necessário: 000.000.000-00">
                        <input class="input100" type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" minlength="14" maxlength="14">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Senha necessária">
                        <input class="input100" type="password" id="senha" name="senha" placeholder="Digite sua senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
            <div class="lista">
                <?php
                include("listar.php");
                ?>
            </div>
        </div>
    </div>

</body>

<script>
    function aplicarMascaraCPF(cpf) {
        cpf = cpf.replace(/\D/g, "");
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
        return cpf;
    }

    document.getElementById('cpf').addEventListener('input', function(e) {
        e.target.value = aplicarMascaraCPF(e.target.value);
    });

    function validarCPF() {
        const cpf = document.getElementById('cpf').value.replace(/\D/g, "");
        if (cpf.length !== 11) {
            alert('Por favor, insira um CPF válido com 11 dígitos.');
            return false;
        }
        return true;
    }
</script>

</html>