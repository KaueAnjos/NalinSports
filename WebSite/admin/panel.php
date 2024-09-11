<?php
session_start();

// Verifica se o administrador está logado
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="assets/css/panel-style.css">
</head>

<body>
    <h1>Bem-vindo ao Painel de Administração</h1>
    <p>Aqui você pode gerenciar o site.</p>

    <a href="logout.php">Logout</a>
</body>

</html>
