<main>
    <h1>Ajouter une cryptomonnaie</h1>
    <form action="../controleur/ajout.php" method="POST">
        <label for="Id_cryptomonnaie">ID :</label>
        <input type="text" id="Id_cryptomonnaie" name="Id_cryptomonnaie" required><br><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prix">Prix :</label>
        <input type="text" id="prix" name="prix" required><br><br>

        <label for="capitalisation">Capitalisation :</label>
        <input type="text" id="capitalisation" name="capitalisation" required><br><br>

        <input type="submit" value="Ajouter la cryptomonnaie">
    </form>

</main>