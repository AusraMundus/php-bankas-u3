<div class="w3-container w3-margin">

    <h1 class="w3-card w3-pale-red w3-padding">Pridėti naują sąskaitą</h1>

    <p class="w3-margin">Įveskite reikalingus duomenis, kad galėtumėte pridėti naują sąskaitą:</p>

    <form class="w3-card w3-padding" style="width:50%;" action="/accounts/store" method="post">
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="firstName">Vardas</label>
            <input input class="w3-input w3-border" type="text" name="firstName" id="firstName" value="<?= $firstName ?>" placeholder="Įveskite vardą" required>
        </div>
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="lastName">Pavardė</label>
            <input input class="w3-input w3-border" type="text" name="lastName" id="lastName" value="<?= $lastName ?>" placeholder="Įveskite pavardę" required>
        </div>
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="personalId">Asmens kodas</label>
            <input input class="w3-input w3-border" type="text" name="personalId" id="personalId" value="<?= $personalId ?>" placeholder="Įveskite asmens kodą" required>
        </div>
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="iban">Banko sąskaitos numeris</label>
            <input input class="w3-input w3-border" type="text" name="iban" id="iban" value="<?= $iban ?>" readonly>
        </div>
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="balance">Balansas</label>
            <input input class="w3-input w3-border" type="number" name="balance" id="balance" value=0 placeholder="0 €" readonly>
        </div>
        <div class="w3-padding">
            <button class="w3-btn w3-pale-red" type="submit">Išsaugoti</button>
            <button class="w3-btn w3-grey">
                <a href="/accounts">Atšaukti</a>
            </button>
        </div>
    </form>

</div>