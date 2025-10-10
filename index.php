<?php

// Lincar com as funções
require_once "src/usuario.php";

// Função de visualizar usuario
$usuarios = buscarUsuario($conexao);



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de PHP com Banco SQL</title>
</head>
<body>
    
    <h1>Testando PHP com Banco SQL</h1>
    
    <h2>Usuarios cadastrados</h2>

    <?php foreach($usuarios as $usuario) { ?>

        <tr>

            <td><?=$usuario['nome']?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id']?>">Editar</a>
                <button id="excluir" >Excluir</button>
                <!-- <a class="excluir" href="excluir.php?id= <//?=$usuario['id']?>"> Excluir</a> -->
            </td>

        </tr>
        <br>

    <?php } ?>
 
    <dialog id="janelaExcluir" >

        <div>
            <input type="password" name="nova_senha" placeholder="Atualizar senha" required>
        </div>

        <button type="submit" name="atualizar">Atualizar</button>

    </dialog>

    <br>

    <a href="cadastrar.php">Adicionar novo usuario</a>
    <script src="confirmar-excluir.js" ></script>
</body>
</html>