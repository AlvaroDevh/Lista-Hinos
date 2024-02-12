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
        echo 'Credenciais inválidas';
    }
}
?>