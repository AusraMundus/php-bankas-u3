<div class="w3-container w3-margin">

    <h1 class="w3-card w3-pale-red w3-padding">Ištrinti sąskaitą</h1>

    <p class="w3-margin">Ar tikrai norite ištrinti sąskaitą?</p>

    <form action="/accounts/destroy/<?= $account['id'] ?>" method="post" class="w3-card w3-padding" style="width:50%;">

        <div>
            <div>
                <h2><?= $account['firstName'] ?> <?= $account['lastName'] ?></h2>
            </div>
            <h3><?= $account['iban'] ?></h3>
        </div>

        <div>
            <button class="w3-btn w3-pale-red" type="submit">Ištrinti</button>
            <button class="w3-btn w3-grey">
                <a href="/accounts">Atšaukti</a>
            </button>
        </div>
    </form>

</div>