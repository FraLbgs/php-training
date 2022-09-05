<?php 
$name=pathinfo($_SERVER["SCRIPT_NAME"])["filename"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Introduction PHP - <?= $title !== "" ? $title : $name ?></title>
</head>
<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - <?= $title !== "" ? $title : $name ?></h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "index.php") echo "active" ?> " href="index.php">Entrainement</a></li>
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "exo2.php") echo "active" ?> " href="exo2.php">Donnez moi des fruits</a></li>
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "exo3.php") echo "active" ?> " href="exo3.php">Donnez moi de la thune</a></li>
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "exo4.php") echo "active" ?> " href="exo4.php">Des fonctions et des tableaux</a></li>
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "exo5.php") echo "active" ?> " href="exo5.php">Netflix</a></li>
                </ul>
            </nav>
        </header>
