<?php

require_once('class/Cliente.php');
$data = new Cliente();
$all = $data->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Clientes</title>
</head>

<body>
    <main class="content">
        <div class="container">
            <table class="table">
                <tr class="table-title">
                    <th class="table-title">Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>
                <?php foreach ($all as $key => $user) { ?>
                    <tr class="table-data">
                        <td><?=$user['ClienteNome']?></td>
                        <td><?=$user['ClienteCpf']?></td>
                        <td><?=$user['ClienteEmail']?></td>
                        <td><?=$user['ClienteSenha']?></td>
                    </tr>
                    <tr>
                        <td><a href="deleteCliente.php?id=<?=$user['ClienteId']?>">DELETAR</a></td>
                        <td><a href="#"></a>EDITAR</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main>
</body>

</html>