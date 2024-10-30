<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

    $update_query = "UPDATE usuarios SET senha = ? WHERE email = ?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("ss", $hashedSenha, $email);
    $stmt->execute();

    echo "Senha redefinida com sucesso.";
}

$conn->close();
?>