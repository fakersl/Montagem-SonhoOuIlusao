<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'formulario';

$conexao = new mysqli($servername,$username,$password,$dbname);

if ($conexao->connect_errno) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_errno);
}

?>