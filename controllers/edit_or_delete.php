<?php
require '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action == 'edit') {
        header("Location: ../pages/edit.php?id=$id");
        exit;
    } elseif ($action == 'delete') {
        $stmt = $pdo->prepare('DELETE FROM notas WHERE id = :id');
        $stmt->execute(['id' => $id]);
        header("Location: ../pages/index.php");
        exit;
    }
}
?>
