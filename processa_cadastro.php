<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_filmes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO usuarios (nome, cpf, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $cpf, $senha);

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
    header("Location: index.php");
    exit();
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
