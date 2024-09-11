<?php
require_once '../config/config.php';
require_once __DIR__ . '../../config/connection.php';
require_once __DIR__ . '../../config/config.php';
session_start();

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT * FROM adm WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {

        $_SESSION['admin_logged_in'] = true;
        header("Location: panel");
        exit;
    } else {
      
        echo '<p style="color: red;">Email ou senha incorretos!</p>';
    }

    $stmt->close();
}

$conn->close();
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
    <section>
        <div class="login-container">
            <div class="admin-profile">
                <div class="img-container">
                    <img src="<?php echo INCLUDE_PATH_ADMIN; ?>/assets/img/profile.jpg" alt="PROFILE PHOTO">
                </div>
                <h1>ADMIN LOGIN</h1>
            </div>
            <form method="POST" action="">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button class="login-btn" type="submit">Entrar</button>
            </form>
        </div>
    </section>
</body>

</html>
