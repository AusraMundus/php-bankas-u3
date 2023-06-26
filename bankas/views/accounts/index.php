<div class="w3-container w3-margin">

    <h1 class="w3-card w3-pale-red w3-padding">Sąskaitų sąrašas</h1>

    <?php if (empty($accounts)) : ?>
        <p class="w3-margin">Sąskaitų sąrašas tuščias.</p>

    <?php else : ?>

        <?php foreach ($accounts as $account) : ?>
            <div>
                <h2><?= $account['firstName'] ?> <?= $account['lastName'] ?></h2>
            </div>
            <h3><?= $account['personalId'] ?></h3>
            <h3><?= $account['accountNo'] ?></h3>
            <h3><?= $account['balance'] ?> €</h3>

            <button class="w3-btn w3-pale-red">
                <a href="/accounts/edit/<?= $account['id'] ?>">Redaguoti sąskaitą</a>
            </button>
            <button class="w3-btn w3-grey">
                <a href="/accounts/delete/<?= $account['id'] ?>">Ištrinti sąskaitą</a>
            </button>

        <?php endforeach ?>
    <?php endif ?>

</div>