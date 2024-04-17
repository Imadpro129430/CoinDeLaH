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

                            
                                <a href="./?action=crypto&Id_crypto=<?= $crypto["Id_cryptomonnaie"] ?>">
                                    <?= $crypto["nom"] ?> <!-- Nom de la cryptomonnaie -->
                                    <?php

                                    foreach ($photos as $photo): ?>
                                        <img src="<?= $photo['cheminPhoto'] ?>" alt="<?= $crypto['nom'] ?>"
                                            style="width: 40px; height: 40px;margin-left: 12%">
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
        <h2>Les cryptomonnaie c'est quoi<h2>

                <p>Elle fonctionne de façon décentralisée sans organe central de contrôle.
                    Un des principaux cas d'usage de cette technologie est dans le domaine des cryptos :
                    elle enregistre et met à jour, pour tous les participants,
                    les transactions de cryptos de manière sécurisée par une vérification cryptographique.</p>


    </article>
</main>