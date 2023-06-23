<h1>Pridėti naują sąskaitą</h1>

<p>Įveskite reikalingus duomenis, kad galėtumėte pridėti naują sąskaitą:</p>

<form action="/account/store" method="post">
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
        <button type="submit">Išsaugoti</button>
        <button>
            <a href="/account">Atšaukti</a>
        </button>
    </div>
</form>