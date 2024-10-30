<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $query = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $codigo = rand(100000, 999999);
        $expiracao = date("Y-m-d H:i:s", strtotime("+15 minutes"));
        
        $insert_query = "INSERT INTO recuperacao_senha (email, codigo, expiracao) VALUES (?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->bind_param("sis", $email, $codigo, $expiracao);
        $insert_stmt->execute();

        $mensagem = "Seu código de verificação é: " . $codigo;
        
       
        echo "Um código de verificação foi enviado para seu email.";
    } else {
        echo "Email não encontrado.";
    }
}

$conn->close();
?>