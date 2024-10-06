<?php

include("conexao.php");

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$sql = "SELECT nome FROM usuarios WHERE cpf = ? AND senha = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["cpf"] = $cpf;
        $_SESSION["nome"] = $row['nome'];
        header("Location: principal.php");
    } else {
        header("Location: error.php");
    }

    $stmt->close();
} else {
    echo "Erro na preparação da consulta: " . $conn->error;
}

$conn->close();
