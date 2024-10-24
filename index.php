<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <style>
        .login100-form-btn {
            background: #0A0078;
        }

        .login100-form-btn:hover {
            background: #333333;
        }

        .txt2:hover {
            color: #0A0078;
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/cr7.png" alt="IMG">
                </div>

                <form method="post" action="login.php" class="login100-form validate-form" onsubmit="return validarSenha();">
                    <span class="login100-form-title">
                        Login
                    </span>

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
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="cadastro.html">
                            Realize seu cadastro
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>

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

        function validarSenha() {
            const senha = document.getElementById('senha').value;
            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,}$/;

            if (!regex.test(senha)) {
                alert("A senha deve ter pelo menos 6 caracteres, incluindo 1 letra maiúscula, 1 letra minúscula, 1 número e 1 caractere especial.");
                return false;
            }
            return true;
        }
    </script>
    <script src="js/main.js"></script>
</body>

</html>
