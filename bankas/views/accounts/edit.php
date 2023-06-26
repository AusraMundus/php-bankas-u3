<div class="w3-container w3-margin">

    <h1 class="w3-card w3-pale-red w3-padding">Redaguoti balansą</h1>

    <p class="w3-margin">Pridėkite arba išimkite lėšų iš sąskaitos:</p>

    <form action="/accounts/update/<?= $id ?>" method="post" class="w3-card w3-padding" style="width:50%;">
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
            <p><?= $balance ?></p>
        </div>

        <div>
            <label for="amount">Redaguoti balansą:</label>
            <input type="number" name="amount" id="amount" placeholder="Įveskite sumą" required>
        </div>

        <div>
            <button class="w3-btn w3-pale-red" type="submit" name="add" value=1>Pridėti</button>
            <button class="w3-btn w3-grey" type="submit" name="withdraw" value=1>Išimti</button>
        </div>
    </form>

    <div class="w3-margin">
        <button class="w3-btn w3-light-grey">
            <a href="/accounts">Grįžti į sąskaitų sąrašą</a>
        </button>
    </div>

</div>