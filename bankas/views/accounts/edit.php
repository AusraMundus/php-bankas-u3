<div class="w3-container w3-margin">

    <h1 class="w3-card w3-pale-red w3-padding">Redaguoti sąskaitą</h1>

    <p class="w3-margin">Redaguokite sąskaitos duomenis. Pridėkite arba išimkite lėšų iš sąskaitos:</p>

    <form action="/accounts/update/<?= $account['id'] ?>" method="post" class="w3-card w3-padding" style="width:50%;">
        <div>
            <h2><?= $firstName ?> <?= $lastName ?></h2>
        </div>
        <div>
            <p><?= $personalId ?></p>
        </div>
        <div>
            <p><?= $iban ?></p>
        </div>
        <div>
            <label for="balance">Balansas</label>
            <input type="number" name="balance" id="balance" min="0" step="0.01" value="<?= $account['balance'] ?>" required>
        </div>

        <div>
            <button class="w3-btn w3-pale-red" type="submit">Pridėti</button>
            <button class="w3-btn w3-grey" type="submit">Išimti</button>
        </div>
    </form>

    <div class="w3-margin">
        <button class="w3-btn w3-grey">
            <a href="/accounts">Atšaukti</a>
        </button>
    </div>

</div>