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
                            <th>Capitalisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($listeCrypto as $crypto){
                            echo "<tr><td>" . $crypto["Id_cryptomonnaie"] . "</td>";
                            echo "<td>" . $crypto["nom"] . "</td>";
                            echo "<td>" . $crypto["Prix"] . "</td>";
                            echo "<td>" . $crypto["PrixMax"] . "</td></tr>";
                          }  ?>
                    </tbody>
                </table>
            </div>
        </article>
</main>