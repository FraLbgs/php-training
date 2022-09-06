<?php 
$name=pathinfo($_SERVER["SCRIPT_NAME"])["filename"];

$pages = [
    [
        "href"=>"index.php",
        "title"=>"Entrainement"
    ],
    [
        "href"=>"exo2.php",
        "title"=>"Donnez moi des fruits"
    ],
    [
        "href"=>"exo3.php",
        "title"=>"Donnez moi de la thune"
    ],
    [
        "href"=>"exo4.php",
        "title"=>"Des fonctions et des tableaux"
    ],
    [
        "href"=>"exo5.php",
        "title"=>"Netflix"
    ]
];

function createNav(array $pages) : string {
    $res = "<ul class='main-nav-list'>";
    foreach($pages as $page){
        $res .= "<li><a class='main-nav-link";
        if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === $page["href"]) $res .= " active";
        $res .= "' href='".$page["href"]."'>".$page["title"]."</a></li>";
    }
    return $res.="</ul>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css?<?=time()?>">
    <title>Introduction PHP - <?= $title !== "" ? $title : $name ?></title>
</head>
<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - <?= $title !== "" ? $title : $name ?></h1>
            <nav class="main-nav">
                <?=createNav($pages)?>
                <!-- <ul class="main-nav-list">
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "index.php") echo "active" ?> " href="index.php">Entrainement</a></li>
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "exo2.php") echo "active" ?> " href="exo2.php">Donnez moi des fruits</a></li>
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "exo3.php") echo "active" ?> " href="exo3.php">Donnez moi de la thune</a></li>
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "exo4.php") echo "active" ?> " href="exo4.php">Des fonctions et des tableaux</a></li>
                    <li><a class="main-nav-link <?php if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === "exo5.php") echo "active" ?> " href="exo5.php">Netflix</a></li>
                </ul> -->
            </nav>
        </header>
