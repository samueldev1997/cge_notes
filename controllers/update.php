<?php
require '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $conteudo = $_POST['conteudo'];

    $stmt = $pdo->prepare('UPDATE notas SET conteudo = :conteudo WHERE id = :id');
    $stmt->execute(['conteudo' => $conteudo, 'id' => $id]);

    header("Location: ../pages/index.php");
    exit;
}
?>
