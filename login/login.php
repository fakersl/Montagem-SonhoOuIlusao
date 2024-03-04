<?php
include '../includes/includes.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT id, nome, senha FROM usuario WHERE email = '$email";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0){ 
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row["senha"])) {
            header('location: ../home/home.html');
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!"ç
    }
}

$conexao->close();

?>