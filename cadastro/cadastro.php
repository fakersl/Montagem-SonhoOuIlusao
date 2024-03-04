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
    
        $sql = "INSERT INTO usuarios (nome, cpf, email, endereco, cidade, estado, senha) VALUES ('$nome', '$cpf', '$email', '$endereco', '$cidade', '$senha)";
    
        $stmt = $conexao->prepare($sql);
    
        // Verifique se a preparação da consulta foi bem-sucedida
        if ($stmt) {
            $stmt->bind_param($id, $nome, $cpf, $email, $endereco, $cidade, $estado, $senha);
    
            if ($stmt->execute()) {
                echo 'Cadastro realizado com sucesso.';
                header('location: ../login/login.html');
            } else {
                echo 'Erro ao cadastrar: ' . $stmt->error;
            }
    
            $stmt->close();
        } else {
            echo 'Erro na preparação da consulta: ' . $conexao->error;
        }
    }
    
    $conexao->close();
    ?>
    