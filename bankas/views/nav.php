<div class="w3-bar w3-blue-grey">
    <a href="<?= URL ?>" class="w3-bar-item w3-button">Pagrindinis</a>

    <a href="<?= URL . 'accounts' ?>" class="w3-bar-item w3-button">Sąskaitų sąrašas</a>
    <a href="<?= URL . 'accounts/create/' ?>" class="w3-bar-item w3-button">Pridėti sąskaitą</a>

    <?php if (isset($_SESSION['email'])) : ?>
        <form action="<?= URL . 'logout' ?>" method="post" style="display: inline;">
            <button type="submit" class="w3-bar-item w3-button">Atsijungti</button>
        </form>
    <?php else: ?>
        <a href="<?= URL . 'login' ?>" class="w3-bar-item w3-button">Prisijungti</a>
    <?php endif ?>
</div>