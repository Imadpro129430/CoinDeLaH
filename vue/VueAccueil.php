<main>
    <article>
        <div class="le-top-5">
            <p>Le top 5 des cryptomonnaie</p>
        </div>
        <div class="tableau">

            <table>
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>ATH (All Time High)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listeCrypto as $crypto):
                        // Récupérer les photos correspondantes à la cryptomonnaie
                    
                        $Id_cryptomonnaie = $crypto['Id_cryptomonnaie'];
                        $photos = getPhotosByIdR($Id_cryptomonnaie);
                        ?>
                        <tr>
                            <td>
                                <?= $crypto["Id_cryptomonnaie"] ?>
                            </td>
                            <td>
                                <?= $crypto["nom"] ?> <!-- Nom de la cryptomonnaie -->
                                <?php

                                foreach ($photos as $photo): ?>
                                    <img class="imgTableau" src="<?= $photo['cheminPhoto'] ?>" alt="<?= $crypto['nom'] ?>">
                                <?php endforeach; ?>

                            </td>
                            <td>
                                <?= $crypto["Prix"] ?> $
                            </td>
                            <td>
                                <?= $crypto["PrixMax"] ?> $
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </article>
</main>