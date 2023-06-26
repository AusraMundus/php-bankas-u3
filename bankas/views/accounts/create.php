<div class="w3-container w3-margin">

    <h1 class="w3-card w3-pale-red w3-padding">Pridėti naują sąskaitą</h1>

    <p class="w3-margin">Įveskite reikalingus duomenis, kad galėtumėte pridėti naują sąskaitą:</p>

    <form action="/accounts/store" method="post" class="w3-card w3-padding" style="width:50%;">
        <div>
            <label for="firstName">Vardas</label>
            <input type="text" name="firstName" placeholder="Įveskite vardą..." required>
        </div>
        <div>
            <label for="lastName">Pavardė</label>
            <input type="text" name="lastName" placeholder="Įveskite pavardę..." required>
        </div>
        <div>
            <label for="personalId">Asmens kodas</label>
            <input type="number" name="personalId" placeholder="Įveskite asmens kodą..." required>
        </div>
        <div>
            <label for="accountNo">Banko sąskaitos numeris</label>
            <input type="text" name="accountNo" placeholder="Įveskite sąskaitos numerį..." required>
        </div>
        <div>
            <label for="balance">Balansas</label>
            <input type="number" name="balance" min="0" step="0.01" placeholder="Įveskite pradinį balansą..." required>
        </div>
        <div>
            <button class="w3-btn w3-pale-red" type="submit">Išsaugoti</button>
            <button class="w3-btn w3-grey">
                <a href="/accounts">Atšaukti</a>
            </button>
        </div>
    </form>

</div>