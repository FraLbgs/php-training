<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Introduction PHP - Exo 5</title>
</head>
<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 5</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a class="main-nav-link" href="index.php">Entrainement</a></li>
                    <li><a class="main-nav-link" href="exo2.php">Donnez moi des fruits</a></li>
                    <li><a class="main-nav-link" href="exo3.php">Donnez moi de la thune</a></li>
                    <li><a class="main-nav-link" href="exo4.php">Des fonctions et des tableaux</a></li>
                    <li><a class="main-nav-link active" href="exo5.php">Netflix</a></li>
                </ul>
            </nav>
        </header>

<?php

// Json file
try {
    $fileContent = file_get_contents("datas/series.json");
    $series = json_decode($fileContent, true);
} catch (Exception $e) {
    echo "Something went wrong with json file...";
    exit;
}

?>

        <section class="exercice">
            Sur cette page un fichier comportant les données de séries télé est importé côté serveur. (voir datas/series.json)
            Les données sont accessibles dans la variable $series.
        </section>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Récupérer dans un tableau puis affichez l'ensemble des plateformes de diffusion des séries. Afficher les par ordre alphabétique.</p>
            <pre class="exercice-sandbox">
                <?php
                // var_dump($series);
                $plateforme = [];
                foreach($series as $serie){
                    $plateforme[] = $serie["availableOn"];
                }
                $plateforme = array_unique($plateforme);
                sort($plateforme);
                var_dump($plateforme);
                ?>
            </pre>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Récupérer dans un tableau puis affichez l'ensemble des styles de séries. Afficher les par ordre alphabétique.</p>
            <pre class="exercice-sandbox">
            <?php
                $styles = [];
                foreach($series as $serie){
                    foreach($serie["styles"] as $style){
                        $styles[] = $style;
                    }
                }
                $styles = array_unique($styles);
                sort($styles);
                var_dump($styles);
                ?>
            </pre>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Afficher la liste de toutes les séries avec l'image principale, 
                le titre, l'équipe de création et la liste des acteurs</p>
            <p class="exercice-txt">L'image et le titre de la série sont des liens menant à cette 
                page avec en paramètre "serie", l'identifiant de la série</p>
            <p class="exercice-txt">Afficher une seule série par ligne sur les plus petits écrans, 
                2 séries par ligne sur les écrans intermédiaires et 4 séries par ligne sur un écran 
                d'ordinateur.</p>
            <div class="exercice-sandbox">
                <div id="link" class='serie-list'>
                    <?php
                    // var_dump($listSeries);
                    foreach($series as $serie){
                        echo "<div class='serie'><a class='ser-link' href='?serie=".$serie["id"]."#link'><img class='img' src='".$serie["image"]."' alt='title' ></a>
                        <p class='ser-title'><span class='title'>Title</span> : <a class='ser-link' href='?serie=".$serie["id"]."#link'>${serie['name']}</a></p>
                        <p class='creators'><span class='title'>Created by</span> : ".implode(", ", $serie["createdBy"])."</p>
                        <p class='actors'><span class='title'>Actors</span> : ".implode(", ", $serie["actors"])."</p> </div>";
                    }

                    ?>
                </div>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section id="question5" class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Si l'URL de la page appelée comporte l'identifiant d'une série, alors afficher toutes les informations de la série.</p>
            <p class="exercice-txt">Si l'identifiant ne correspond à aucune série, afficher un message d'erreur.</p>
            <div class="exercice-sandbox">
                <?php
                // var_dump($_GET["serie"]);
                $listIds=[];
                foreach($series as $serie){
                    if($_GET["serie"] == $serie["id"]){
                        $ongoing = $serie["ongoing"] ? "En cours" : "Terminé";
                        echo "<p><img class='img' src='".$serie["image"]."' alt='title' ></p>
                                <p>Id de la série : ".$serie["id"]."</p>
                                <p>Nom de la série : ".$serie["name"]."</p>
                                <p>Année de sortie de la série : ".$serie["launchYear"]."</p>
                                <p>Pays d'origine : ".$serie["country"]."</p>
                                <p>Disponible sur la plateforme : ".$serie["availableOn"]."</p>
                                <p>Style(s) de la série : ".implode(", ",$serie["styles"])."</p>
                                <p>Série crée par : ".implode(", ",$serie["createdBy"])."</p>
                                <p>Acteurs : ".implode(", ",$serie["actors"])."</p>
                                <p>Durée des épisodes : ".$serie["episodeDurationInMinutes"]." minutes</p>
                                <p>Nombre de saisons : ".$serie["numberOfSeasons"]."</p>
                                <p>Nombre d'épisodes : ".$serie["numberOfEpisods"]."</p>
                                <p>Production : ".$ongoing."</p>";
                        $inSerie= true;
                        break;
                    }
                }
                if(!$inSerie) echo "Cette série n'existe pas.";
                ?>
            </div>
        </section>


        <!-- QUESTION 5 -->
        <section id="question5" class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Globaliser l'entête et le pied des pages de ce mini-site.</p>
            <p class="exercice-txt">S'assurer de conserver les titres des pages et l'affichage dynamique du menu.</p>
            <div class="exercice-sandbox">

            </div>
        </section>


        <!-- QUESTION 6 -->
        <section id="question5" class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Créer un tableau listant les pages du site.</p>
            <p class="exercice-txt">Créer une fonction générant le code HTML du menu du site.</p>
            <div class="exercice-sandbox">

            </div>
        </section>

    </div>
<div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>