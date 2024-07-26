<?php
session_start();

require '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/login_register.css"/>
    <title>Login</title>
</head>
<body>
    <div class="container_login">
        <div class="area_login">
            <div class="style_login_register" >
                <h3>Login</h3>
                <form action="login.php" method="POST">
                    <label for="username">Nome de Usuário:</label>
                    <input placeholder="Digite seu nome de usuário..." type="text" name="username" required>
                    <label for="password">Senha:</label>
                    <input placeholder="Digite sua senha..." type="password" name="password" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i>Entrar</button>
                </form> 
                <p>Não possui uma conta? <a href="register.php">Cadastre-se!</a></p>   
            </div>
            <div class="style_area_image" >
                <h2>Faça <span>login</span> e escreva suas melhores histórias...</h2>
                <img class="image_login" src="../src/assets/image_login.svg" alt="Imagem de login"/>   
            </div>    
        </div>
    </div>
</body>
</html>
