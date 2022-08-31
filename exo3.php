<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Introduction PHP - Exo 3</title>
</head>
<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 3</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a class="main-nav-link" href="index.php">Entrainement</a></li>
                    <li><a class="main-nav-link" href="exo2.php">Donnez moi des fruits</a></li>
                    <li><a class="main-nav-link active" href="exo3.php">Donnez moi de la thune</a></li>
                    <li><a class="main-nav-link" href="exo4.php">Des fonctions et des tableaux</a></li>
                    <li><a class="main-nav-link" href="exo5.php">Netflix</a></li>
                </ul>
            </nav>
        </header>

<?php

$fruits = ["fraise", "banane","pomme", "cerise", "ananas"];

$prices = [3, 2, 2, 5, 8];

?>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Ordonner le tableau des prix par ordre croissant et l'afficher en détail</p>
            <pre class="exercice-sandbox">
            <?php
            sort($prices);
            var_dump($prices);
            ?>
            </pre>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Ajouter 1 euro à chaque prix</p>
            <div class="exercice-sandbox">
                <?php
                foreach ($prices as $num => $price){
                    $prices[$num]++;
                } 
                var_dump($prices);
                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Créer le tableau $store qui combine les tableaux des fruits et des prix afin d'obtenir un tableau associatif d'attribution des prix. Afficher le tableau obtenu</p>
            <pre class="exercice-sandbox">
                <?php
                $store = array_combine($fruits, $prices);
                var_dump($store);
                ?>
            </pre>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des fruits ayant un prix inférieur à 4 euros</p>
            <div class="exercice-sandbox">
                <ul>
                <?php
                foreach ($store as $fruit => $price){
                    if($price < 4) echo "<li>$fruit</li>";
                }
                ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des fruits ayant un prix pair</p>
            <div class="exercice-sandbox">
                <ul>
                <?php
                foreach ($store as $fruit => $price){
                    if($price%2 === 0) echo "<li>$fruit</li>";
                }
                ?>
                </ul>
            </div>
        </section>
                    
        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Composer un panier de fruits ne dépassant pas 12 euros</p>
            <pre class="exercice-sandbox">
            <?php
            $cart = [];
            $total = 0;
            foreach($store as $fruit => $price){
                if(($total + $price) <= 12){
                    $total+=$price;
                    $cart[]=$fruit;
                }
            }
            var_dump($cart);
            ?>
            </pre>
        </section>
                    
        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">En reprenant le prix total du panier constitué à la question précédente, appliquez-lui une taxe de 18%. Afficher le total taxe comprise.</p>
            <div class="exercice-sandbox">
            <?php
            $total*=1.18;
            var_dump($total);
            ?>
            </div>
        </section>

        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Ajouter au tableau $store le fruit "kiwi" pour un prix de 1,50 € puis afficher le tableau complet</p>
            <pre class="exercice-sandbox">
            <?php
            $store["kiwi"]=1.50;
            var_dump($store);
            ?>
            </pre>
        </section>

        <!-- QUESTION 9 -->
        <?php
        $newFruits = [
            "pêche" => 3,
            "abricot" => 2,
            "mangue" => 9
        ];
        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Ajouter les nouveaux fruits du tableau $newFruits au tableau $store</p>
            <div class="exercice-sandbox">
            <?php
            $store = array_merge($store, $newFruits);
            echo '<pre>' , var_dump($store) , '</pre>';
            ?>
            </div>
        </section>

        <!-- QUESTION 10 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher le nom et le prix du fruit le moins cher</p>
            <div class="exercice-sandbox">
            <?php
            $minPrice = min($store);
            foreach($store as $fruit => $price){
                if($price === $minPrice) $cheapest = $fruit;
            }
            echo "<p>Le fruit qui coûte le moins cher est $cheapest pour un prix de $minPrice €.</p>"
            ?>
            </div>
        </section>

        <!-- QUESTION 11 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 11</h2>
            <p class="exercice-txt">Afficher les noms et le prix des fruits les plus chers</p>
            <div class="exercice-sandbox">
                <ul>
            <?php
                $maxPrice = max($store);
                foreach($store as $fruit => $price){
                    if($price === $maxPrice) echo "<li>$fruit : $price €</li>";
                }
            ?>
                </ul>
            </div>
        </section>
    </div>
<div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>