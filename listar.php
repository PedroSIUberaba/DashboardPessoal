<?php
include("conexao.php");
$sql = "select * from usuarios";
$resultado = $conn->query($sql);

if (!$resultado = $conn->query($sql)) {
    die("erro");
}
?>

<style>
    .table-container {
        max-height: 400px;
        overflow-y: auto;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: white;
        padding: 20px;
        margin: 20px 0;
        overflow: hidden;
        /* Adicionado para bordas arredondadas */
    }

    .listar {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .itens,
    .itens2 {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .itens {
        background-color: #0A0078;
        color: white;
        font-weight: bold;
    }

    .borda:hover {
        background-color: #f1f1f1;
    }

    .listar input[type="text"],
    .listar input[type="password"] {
        width: calc(100% - 10px);
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s;
    }

    .listar input[type="text"]:focus,
    .listar input[type="password"]:focus {
        border-color: #007BFF;
        outline: none;
    }

    button {
        background-color: #0A0078;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
        display: flex;
        /* Alinhando ícones verticalmente */
        align-items: center;
        /* Centralizando ícones */
    }

    button:hover {
        background-color: #0056b3;
    }

    .eye-icon {
        cursor: pointer;
        margin-left: 10px;
    }

    .eye-icon img {
        width: 20px;
        height: 20px;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .listar {
            font-size: 14px;
            /* Reduzir o tamanho da fonte em telas menores */
        }

        .itens,
        .itens2 {
            padding: 10px;
            /* Ajustar o padding em telas menores */
        }
    }
</style>

<div class="table-container">
    <table class="listar">
        <tr class="borda">
            <th class="itens">Nome</th>
            <th class="itens">CPF</th>
            <th class="itens">Senha</th>
            <th class="itens" colspan="2">Funções</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) { ?>
            <tr class="borda">
                <form action="gerenciarUsuario.php" method="post">
                    <input type="hidden" name="cpfAnterior" value="<?= $row['cpf']; ?>">
                    <td class="itens2">
                        <input class="input100" type="text" id="nome" name="nome" value="<?= $row['nome']; ?>">
                    </td>
                    <td class="itens2">
                        <input class="input100" type="text" name="cpf" value="<?= $row['cpf']; ?>">
                    </td>
                    <td class="itens2">
                        <div style="display: flex; align-items: center;">
                            <input class="input100" type="password" id="senha-<?= $row['cpf']; ?>" name="senha" value="<?= $row['senha']; ?>">
                            <span class="eye-icon" onclick="togglePassword('<?= $row['cpf']; ?>')">
                                <img src="eye-icon.png" alt="Mostrar senha">
                            </span>
                        </div>
                    </td>
                    <td class="itens2">
                        <button class="login100-form-btn" type="submit" name="acao" value="alterar">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                    </td>
                    <td class="itens2">
                        <button class="login100-form-btn" type="submit" name="acao" value="deletar">
                            <i class="fa fa-ban" aria-hidden="true"></i>
                        </button>
                    </td>
                </form>
            </tr>
        <?php } ?>
    </table>
</div>

<script>
    function togglePassword(cpf) {
        var senhaInput = document.getElementById('senha-' + cpf);
        if (senhaInput.type === 'password') {
            senhaInput.type = 'text';
        } else {
            senhaInput.type = 'password';
        }
    }
</script>