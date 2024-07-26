<div class="container_header">
    <header>
        <p><span>cge</span>.notes</p>
        <hr>
        <div class="area_right_header" >
            <div>
                <p class="notes_count"> <span><?php echo $nota_count; ?> </span>
                    Notas ao total
                </p>
            </div>
            <?php if (isset($_SESSION['user_id'])): ?>
                <div class="btn_area" >
                    <a href="../pages/create_note.php" class="btn_add_note">
                        <i class="fa-regular fa-square-plus"></i>
                        Adicionar nota
                    </a>
                    <a href="../controllers/logout.php" class="btn_logout"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Sair da conta
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </header>
</div>
