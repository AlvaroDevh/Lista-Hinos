<?php
session_start();

// Verifica se o formulário de login foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se as credenciais são válidas (aqui você iria validar as credenciais, por exemplo, consultando um banco de dados)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Por simplicidade, vamos considerar que as credenciais são válidas
    // Em um cenário real, você precisaria verificar no banco de dados ou em algum sistema de autenticação seguro
    if ($username === 'Admin' && $password === 'TBH') {
        // Cria uma sessão e redireciona para o index
        $_SESSION['username'] = $username;
        header('Location: ../index.php');
        exit();
    } else {
        // Define a mensagem de erro na sessão
        $_SESSION['error_message'] = 'Credenciais inválidas';
        // Redireciona de volta para a página de login
        header('Location: login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="form">
        <h2>Login</h2>
        
        <!-- Exibe a mensagem de erro, se existir -->
        <?php if(isset($_SESSION['error_message'])): ?>
            <p style="color: red;"><?php echo $_SESSION['error_message']; ?></p>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>

        <form id="login-form" method="POST">
            <div class="campos">
                <input type="text" name="username" required="">
                <label>Usuário</label>
            </div>
            <div class="campos">
                <input type="password" name="password" required="">
                <label>Senha</label>
            </div>
            <button type="submit" id="sub">Enviar</button>
        </form>
        <div class="cadastro">
            <a href="#">Cadastre-se</a>
            <a href="#">Esqueceu seu Usuário / Senha</a>
        </div>
    </div>
</body>
</html>
