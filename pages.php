<?php
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
        $res += "<li><a class='main-nav-link";
        if(pathinfo($_SERVER["SCRIPT_NAME"])["basename"] === $page["href"]) echo "active";
        echo" href='".$page["href"]."'>".$page["title"]."</a></li>";
    }
    return $res+="</ul>";
}


?>