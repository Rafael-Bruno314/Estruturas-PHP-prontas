<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "banana";

$con = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Sem conexão com o banco de dados");
?>
