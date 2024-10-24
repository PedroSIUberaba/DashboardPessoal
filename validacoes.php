<?php

function validarCPF($cpf) {
    $cpf = preg_replace('/\D/', '', $cpf);

    if (strlen($cpf) !== 11) {
        return false;
    }

    $soma = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma += $cpf[$i] * ($i + 1);
    }
    $digito1 = $soma % 11 < 2 ? 0 : 11 - ($soma % 11);
    
    $soma = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma += $cpf[$i] * ($i + 2);
    }
    $soma += $digito1 * 10;
    $digito2 = $soma % 11 < 2 ? 0 : 11 - ($soma % 11);

    return $digito1 == $cpf[9] && $digito2 == $cpf[10];
}

function validarSenha($senha) {
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,}$/';
    return preg_match($regex, $senha);
}

// Validação
if (!validarCPF($cpf)) {
    header("Location: error.php?msg=CPF inválido");
    exit();
}

if (!validarSenha($senha)) {
    header("Location: error.php?msg=Senha inválida. A senha deve ter pelo menos 6 caracteres, incluindo 1 letra maiúscula, 1 letra minúscula, 1 número e 1 caractere especial.");
    exit();
}
?>
