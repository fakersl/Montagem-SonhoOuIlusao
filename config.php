<?php 

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbName = 'formulario';

$conexao = new mysqli($dbHost,$dbUsername,$dbName);

if($conexao -> connect_errno) {
    echo "Erro";
} else {
    echo "Sucesso";
}

?>