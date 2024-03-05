    <?php
    include '../includes/includes.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    
        $sql = "INSERT INTO usuario (nome, cpf, email, endereco, cidade, estado, senha) VALUES ('$nome', '$cpf', '$email', '$endereco', '$cidade', '$senha')";

        if ($conn->query($sql) === TRUE) {
            header('location: ../login/login.html');
            
        } else {
            echo "Erro ao cadastrar usuário: " . $conn->error;
        }
    }

    $conn->close();
    ?>