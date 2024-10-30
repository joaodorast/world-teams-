<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TatoPhew | Redefinir Senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <img src="tatophew_logo.png" alt="Logo TatoNephew" class="tatophew_logo_redefinir">
            <nav class="button-container">
                <a href="cadastro.html" class="cadastrar-btn">Cadastre-se</a>
                <a href="login.html" class="login-btn">Logar-se</a>
            </nav>
        </header>

        <main class="main-content">
            <h2>Redefinir Senha</h2>
            <form action="processar_redefinicao.php" method="POST">
                <div>
                    <label for="senha">Nova Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                <button type="submit">Redefinir Senha</button>
            </form>
        </main>
        
        <footer class="footer">
            <p>© 2024 TatoNephew. Nós é computeiro</p>
        </footer>
    </div>
</body>
</html>