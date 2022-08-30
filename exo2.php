<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Introduction PHP - Exo 2</title>
</head>
<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 2</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a class="main-nav-link" href="index.php">Entrainement</a></li>
                    <li><a class="main-nav-link active" href="exo2.php">Donnez moi des fruits</a></li>
                    <li><a class="main-nav-link" href="exo3.php">Donnez moi de la thune</a></li>
                    <li><a class="main-nav-link" href="exo4.php">Des fonctions et des tableaux</a></li>
                    <li><a class="main-nav-link" href="exo5.php">Netflix</a></li>
                </ul>
            </nav>
        </header>

<?php

$fruits = ["fraise", "banane", "pomme", "cerise", "abricot", "pêche", "ananas", "kiwi"];

?>
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Afficher le détail de tout le tableau de fruits</p>
            <pre class="exercice-sandbox">
            <?php
                var_dump($fruits)
            ?>
            </pre>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Afficher les fruits dans une liste HTML non ordonnée</p>
            <div class="exercice-sandbox">
                <ul>
            <?php
            foreach ($fruits as $fruit){
                echo "<li>$fruit</li>";
            }
            ?>
            </ul>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Afficher les fruits dans une liste HTML non ordonnée avec pour chacun d'eux sa position dans la liste</p>
            <div class="exercice-sandbox">
            <ul>
            <?php
            foreach ($fruits as $num => $fruit){
                echo "<li>$num : $fruit</li>";
            }
            ?>
            </ul>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Afficher 1 fruit sur 2 dans une liste HTML, en commençant par la fraise</p>
            <div class="exercice-sandbox">
            <ul>
            <?php
            foreach ($fruits as $num => $fruit){
                if($num %2 === 1) continue;
                echo "<li>$num : $fruit</li>";
            }
            ?>
            </ul>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Afficher un fruit aléatoire du tableau</p>
            <div class="exercice-sandbox">
                <?php
                echo $fruits[rand(0,sizeof($fruits)-1)];
                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Afficher les fruits dans un ordre aléatoire</p>
            <div class="exercice-sandbox">
                <?php
                shuffle($fruits);
                foreach ($fruits as $fruit){
                    echo $fruit." ";
                }
                ?>
            </div>
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Afficher les fruits dont la chaîne de caractère est composée de 5 caractères au maximum</p>
            <div class="exercice-sandbox">
            <?php
                foreach ($fruits as $fruit){
                    if(mb_strlen($fruit) <= 5) echo $fruit." ";
                }
                ?>
            </div>
        </section>

        <!-- QUESTION 8 -->
        <?php
        $breakfast = "Tous les matins je mange une pomme et une banane avec une cuillère de miel.";
        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Dans la phrase suivante : "<?=$breakfast?>"</p>
            <p class="exercice-txt">Remplacez pomme par pêche et banane par mangue et affichez-la.</p>
            <div class="exercice-sandbox">
                <?php
                $input = ["pomme", "banane"];
                $replace = ["pêche", "mangue"];
                echo str_replace($input, $replace, $breakfast);

                ?>
            </div>
        </section>

        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Affichez la chaîne de caractère composée de l'ensemble des fruits de la liste, séparés par une virgule et un espace.</p>
            <div class="exercice-sandbox">
                <?php
                echo implode(", ", $fruits)
                ?>
            </div>
        </section>

        <!-- QUESTION 10 -->
        <?php

        $salad = "Dans ma salade de fruit préférée, il y a de la banane, des pêches, quelques fraises, des noix et une cuillère de miel.";
                
        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher dans une liste HTML tous les fruits de la liste qui apparaissent dans la phrase suivante : "<?=$salad?>"</p>
            <div class="exercice-sandbox">
                <ul>
                <?php
                foreach ($fruits as $fruit){
                    if(str_contains($salad, $fruit)){
                        echo "<li>$fruit</li>";
                    }
                }

                ?>
                </ul>
            </div>
        </section>
    </div>
<div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>