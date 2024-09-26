<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_filmes";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$sql = "INSERT INTO usuarios (nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
    header("Location: index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
