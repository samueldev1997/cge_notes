<?php
require '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare('INSERT INTO usuarios (username, password) VALUES (:username, :password)');
    $stmt->execute(['username' => $username, 'password' => $password]);

    echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
    echo "<script>window.location = 'login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/login_register.css"/>
    <title>Registro</title>
</head>
<body>
    <div class="container_login">
        <div class="area_login">
            <div class="style_login_register">
                <h3>Cadastro</h3>
                <form action="register.php" method="POST">
                    <label for="username">Nome de Usuário:</label>
                    <input placeholder="Escolha um nome de usuário" type="text" name="username" required>
                    <label for="password">Senha:</label>
                    <input placeholder="Escolha uma senha..." type="password" name="password" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i>Registrar</button>
                </form>
                <p>Já possui uma conta? <a href="login.php">Faça login!</a></p> 
            </div>  
            <div class="style_area_image" >
                <h2><span>Cadastre-se</span> e escreva suas melhores histórias...</h2>
                <img class="image_login" src="../src/assets/image_login.svg" alt="Imagem de login"/>   
            </div>  
        </div>
    </div>
</body>
</html>
