<h1>Sąskaitų sąrašas</h1>

<?php if (empty($accounts)) : ?>
    <p>Sąskaitų sąrašas tuščias.</p>

<?php else : ?>
    <p>Sąskaitų sąrašas:</p>
    <?php foreach ($accounts as $account) : ?>
        <div>
            <h2><?= $account['firstName'] ?> <?= $account['lastName'] ?></h2>
        </div>
        <h3><?= $account['personalId'] ?></h3>
        <h3><?= $account['accountNo'] ?></h3>
        <h3><?= $account['balance'] ?> €</h3>

        <button>
            <a href="/account/edit/<?= $account['id'] ?>">Redaguoti sąskaitą</a>
        </button>
        <button>
            <a href="/account/delete/<?= $account['id'] ?>">Ištrinti sąskaitą</a>
        </button>

    <?php endforeach ?>
<?php endif ?>

<div>
    <button>
        <a href="/account/create/">Pridėti naują sąskaitą</a>
    </button>
</div>