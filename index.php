<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Clientes</title>
</head>

<body>
    <main class="content">
        <div class="container">
            <h1 class="title">Cadastrar</h1>
            <form class="form" method="post" action="addClient.php">
                <input class="input" type="text" placeholder="nome" autocomplete="off" name="name" />
                <span class="input-border"></span>
                <input class="input" type="text" placeholder="CPF" autocomplete="off" name="cpf" />
                <span class="input-border"></span>
                <input class="input" type="email" placeholder="e-mail" autocomplete="off" name="email" />
                <span class="input-border"></span>
                <input class="input" type="password" placeholder="senha" autocomplete="off" name="password" />
                <span class="input-border"></span>
                <button class="submit">Concluir</button>
                <a class="usr" href="users.php">Visualizar cadastros</a>
            </form>
        </div>
    </main>
</body>

</html>