<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpfAnterior = $_POST['cpfAnterior'];

    if ($_POST['acao'] == 'alterar') {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];


        $sql = "UPDATE usuarios SET nome = '$nome', cpf = '$cpf', senha = '$senha' WHERE cpf = '$cpfAnterior'";
        if ($conn->query($sql) === TRUE) {
            echo "Usuário atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o usuário: " . $conn->error;
        }
    } elseif ($_POST['acao'] == 'deletar') {
        $sql = "DELETE FROM usuarios WHERE cpf = '$cpfAnterior'";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário deletado com sucesso!";
        } else {
            echo "Erro ao deletar o usuário: " . $conn->error;
        }
    }

    header("Location: cadastroUsuarios.php");
    exit();
}
