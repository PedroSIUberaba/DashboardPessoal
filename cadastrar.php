<?php

include("conexao.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE cpf = ?");
$stmt->bind_param("s", $cpf);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

if ($count > 0) {
    echo "Um usuário com esse CPF já está cadastrado.";
    exit();
}

// Inserir novo usuário
$stmt = $conn->prepare("INSERT INTO usuarios (cpf, nome, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $cpf, $nome, $senha);

if ($stmt->execute()) {
    header("Location: cadastroUsuarios.php");
    exit();
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
