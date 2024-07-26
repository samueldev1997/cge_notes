<?php
require '../includes/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare('SELECT * FROM notas WHERE id = :id');
    $stmt->execute(['id' => $id]);
    $nota = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (!$nota) {
    die("Nota não encontrada");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Editar Nota</title>
</head>
<body>
    <a href="index.php" class="btn_back">
        <i class="fa-solid fa-arrow-left"></i> Voltar
    </a>
    <div class="container_create_note">
        <div class="area_create_note" >
            <h1>Editar Nota</h1>
            <form action="../controllers/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $nota['id']; ?>">
                <textarea name="conteudo" required><?php echo htmlspecialchars($nota['conteudo']); ?></textarea>
                <button type="submit"><i class="fa-solid fa-download"></i>
                    Atualizar nota
                </button>
            </form>
        </div>
    </div>
</body>
</html>
