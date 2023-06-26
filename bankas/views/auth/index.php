<div class="w3-container w3-margin">

    <h1 class="w3-card w3-pale-red w3-padding">Prisijungti į administravimo panelę</h1>

    <p class="w3-margin">Įveskite el. pašto adresą ir slaptažodį:</p>

    <form class="w3-container" action="<?= '/login' ?>" method="post">
        <input class="w3-border" type="email" name="email" placeholder="El. paštas" value="<?= $old['email'] ?? '' ?>">
        <input class="w3-border" type="password" name="password" placeholder="Slaptažodis">
        <button class="w3-btn w3-pale-red" type="submit">Prisijungti</button>
    </form>

</div>