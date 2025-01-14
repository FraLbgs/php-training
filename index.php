<?php
$title="";
include_once "header.php";
?>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Evrivez la phrase suivante dans une balise HTML P en utilisant les 2 variables ci-dessous :</p>
            <p class="exercice-txt">"<i>Firstname</i> a obtenu <i>score</i> points à cette partie."</p>
            <div class="exercice-sandbox">
                <?php
                    $firstname = "Samir";
                    $score = 327;
                    echo "<p>$firstname a obtenu $score points à cette partie.</p>"
                ?>
                
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des produits suivants et leurs prix.</p>
            <div class="exercice-sandbox">
                <?php
                $nameProduct1 = "arc";
                $priceProduct1 = 10.30;
                $nameProduct2 = "flèche";
                $priceProduct2 = 2.90;
                $nameProduct3 = "potion";
                $priceProduct3 = 5.20;
                echo "<ul>
                        <li>$nameProduct1 : $priceProduct1 €</li>
                        <li>$nameProduct2 : $priceProduct2 €</li>
                        <li>$nameProduct3 : $priceProduct3 €</li>
                      </ul>"
                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Calculer le montant total de la commande des produits ci-dessus avec les quantités ci-dessous et appliquez lui une remise de 10%.</p>
            <div class="exercice-sandbox">
            <?php
                $quantityProduct1 = 1;
                $quantityProduct2 = 10;
                $quantityProduct3 = 4;

                $total = ($priceProduct1 * $quantityProduct1 + $priceProduct2 * $quantityProduct2 + $priceProduct3 * $quantityProduct3) * 0.9;
                echo "$total €";
            ?>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Affichez le prix le plus élevé des 3 produits ci-dessus.</p>
            <div class="exercice-sandbox">
            <?= max($priceProduct1, $priceProduct2, $priceProduct3) ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <?php

        $text1 = "Le marchand m'a vendu un arc et des flèches.";

        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Affichez dans une liste HTML le nom des produits de la question 2 qui sont présents dans la phrase : "<?=$text1?>"</p>
            <div class="exercice-sandbox">
                <ul>
            <?php
            $products = [$nameProduct1,$nameProduct2,$nameProduct3];
            foreach ($products as $product){
                if(str_contains($text1, $product)){
                    echo "<li>$product</li>";
                }
            }

            ?>
                </ul>

            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Parmis les scores suivants, affichez le prénom des joueurs qui ont obtenus entre 50 et 150 points.</p>
            <div class="exercice-sandbox">
                <?php

                $namePlayer1 = "Tim";
                $scorePlayer1 = 67;
                $namePlayer2 = "Morgan";
                $scorePlayer2 = 198;
                $namePlayer3 = "Hamed";
                $scorePlayer3 = 21;
                $namePlayer4 = "Camille";
                $scorePlayer4 = 134;
                $namePlayer5 = "Kevin";
                $scorePlayer5 = 103;

                $scores = [
                    $namePlayer1 => $scorePlayer1,
                    $namePlayer2 => $scorePlayer2,
                    $namePlayer3 => $scorePlayer3,
                    $namePlayer4 => $scorePlayer4,
                    $namePlayer5 => $scorePlayer5
                ];

                foreach ($scores as $player => $score){
                    if($score >=50 && $score <=150){
                        echo $player." " ;
                    }
                }

                ?>
            </div>
        </section>


        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">En réutilisant les scores de la question pécédente, afficher le nom du joueur ayant obtenu le plus grand score.</p>
            <div class="exercice-sandbox">
                <?php
                    $maxScore =  max(array_values($scores));
                    foreach ($scores as $player => $score){
                        if($score === $maxScore) echo $player;
                    }
                ?>
            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Affichez le prénom du joueur le plus long en nombre de caractères.</p>
            <div class="exercice-sandbox">
            <?php
                foreach ($scores as $player => $score){
                    if(strlen($player) > $maxLength || $maxLength === NULL){
                        $maxLength = strlen($player);
                        $maxLengthPlayer = $player;
                    }
                }
                echo $maxLengthPlayer;
            ?>    
            </div>
        </section>

        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Créer une variable $players ayant pour valeur un tableau multidimensionnel contenant toutes les données des joueurs avec leurs scores ci-dessus et leurs ages ci-dessous.</p>
            <ul class="exercice-txt">
                <li>Tim : 25 ans</li>
                <li>Morgan  : 34 ans</li>
                <li>Hamed : 27 ans</li>
                <li>Camille : 47 ans</li>
                <li>Kevin : 31 ans</li>
            </ul>
            <p class="exercice-txt">Afficher la valeur de cette variable avec tous les détails.</p>
            <pre class="exercice-sandbox">
                <?php
                $players = [
                    ["name" => "Tim", "age" => 25, "points" => 67],
                    ["name" => "Morgan", "age" => 34, "points" => 198],
                    ["name" => "Hamed", "age" => 27, "points" => 21],
                    ["name" => "Camille", "age" => 47, "points" => 134],
                    ["name" => "Kevin", "age" => 31, "points" => 103]
                    ];
                    var_dump($players)
                    ?>
            </pre>
        </section>

        <!-- QUESTION 10 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher le prénom et l'âge du joueur le plus jeune dans une phrase dans une balise HTML P.</p>
            <div class="exercice-sandbox">
                <?php
                foreach ($players as $player){
                    if($player["age"] < $minAge || $minAge === NULL){
                        $minAge = $player["age"];
                        $youngest = $player["name"];
                    }
                }
                echo "<p>Le plus jeune est $youngest et il a $minAge ans.</p>";
                ?>
            </div>
        </section>

    </div>
    <?php include_once "footer.php" ?>
</body>
</html>