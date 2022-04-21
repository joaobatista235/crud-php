<?php
    require 'class/Cliente.php';

    $cliente = new Cliente();
    $cliente->setNome($_POST['name']);
    $cliente->setCPF($_POST['cpf']);
    $cliente->setEmail($_POST['email']);
    $cliente->setSenha($_POST['password']);

    $cliente->adicionar();
?>
<meta http-equiv="refresh" content="0;url=index.php">
