<?php

session_start(); 

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit;
}

require '../includes/config.php';

$stmt = $pdo->query('SELECT * FROM notas ORDER BY criado_em DESC');
$notas = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count_stmt = $pdo->query('SELECT COUNT(*) AS total FROM notas');
$nota_count = $count_stmt->fetch(PDO::FETCH_ASSOC)['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css"/>
    <link rel="stylesheet" href="../css/header.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>cge.notes</title>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <div class="container_notes">
        <h2>Anote seus pensamentos e crie histórias inspiradoras...</h2>
        <div class="area_note" >
            <?php 
                $note_number = 1;
                foreach ($notas as $nota): ?>
                <div class="note_content">
                    <div class="note">
                        <p><?php echo $note_number . '. ' . nl2br(htmlspecialchars($nota['conteudo'])); ?></p>
                    </div>
                    <form action="../controllers/edit_or_delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $nota['id']; ?>">
                        <button class="btn_edit" type="submit" name="action" value="edit">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn_delete" type="submit" name="action" value="delete">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            <?php
                $note_number++; 
                endforeach; 
            ?>
        </div>
    </div>
</body>
</html>
