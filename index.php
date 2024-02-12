<?php
session_start();

// Verifica se o usuário está autenticado. Se não estiver, redireciona para a página de login.
if (!isset($_SESSION['username'])) {
    header('Location: telas/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinos</title>
</head>
<body>
    <button type="button"> Gerar Lista</button>
    <button type="button"> Adicionar Hinos</button>
    <button type="button"> Editar Hinos</button>

</body>
</html>