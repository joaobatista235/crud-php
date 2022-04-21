<?php

require_once('class/Cliente.php');

$cliente = new Cliente();

if(isset($_GET['id'])){
        $cliente->setId($_GET['id']);
        $cliente->delete();
}
?>
<meta http-equiv="refresh" content="0;url=users.php">
