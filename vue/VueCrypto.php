<main>
<section class="crypto-image">
        
<img src="<?= $LesPhotos['cheminPhoto'] ?>"  alt="<?= $crypto['nom'] ?>" >
</section>
        <section class="crypto-info">
            <h2>description</h2>
            <p><?= $Crypto['details']?></p>
        </section>

        <section class="crypto-details">
            <h2>Détails</h2>
            <ul>
                <li><strong>Algorithme :</strong> <?= $Crypto['Algorithme'] ?> </li>
                <li><strong>Date de création :</strong> <?= $Crypto['date_de_creation'] ?> </li>
                <li><strong>Capitalisation boursière :</strong> <?=$Crypto['capitalisation']?> $</li>
            </ul>
        </section>
        <section class="crypto-price">
            <h2>Prix</h2>
            <p><?= $Crypto['Prix'] ?> $</p>
        </section>
    </main>