<?php
require_once '../config/config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalin Sports | Login</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_ADMIN; ?>/assets/css/login-style.css">
</head>

<body>

    <section class="left">
        <div>
            <img src="PROFILE" alt="PROFILE PHOTO">
        </div>
        <h1>ADMIN LOGIN</h1>
    </section>
    <section class="right">
        <div class="login-container">
            <!-- <div class="login-title">
                <h2>Entrar</h2>
            </div> -->
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Senha">
            <a href="#">Esqueceu a senha?</a>
            <button class="login-btn">Entrar</button>
        </div>
    </section>
</body>

</html>