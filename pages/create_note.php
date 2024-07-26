<!-- create_note.php -->
<?php
require '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conteudo = $_POST['conteudo'];

    $stmt = $pdo->prepare('INSERT INTO notas (conteudo) VALUES (:conteudo)');
    $stmt->execute(['conteudo' => $conteudo]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/styles.css">
    <title>Criar Nova Nota</title>
</head>
<body>
    <a href="index.php" class="btn_back">
        <i class="fa-solid fa-arrow-left"></i> Voltar
    </a>
    <div class="container_create_note" >
        <div class="area_create_note" >
            <h2>Criar Nova Nota</h2>
            <form action="create_note.php" method="POST">
                <textarea name="conteudo" placeholder="Conteúdo" required></textarea>
                <button type="submit"><i class="fa-solid fa-download"></i>
                    Salvar nota
                </button>
            </form>
        </div>
    </div>
</body>
</html>
