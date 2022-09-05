<?php
$title="";
include_once "header.php";

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];
?>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et retourne la chaîne de caractère HTML permettant d'afficher les valeurs du tableau sous la forme d'une liste.</p>
            <div class="exercice-sandbox">
            <?php
            function arrayToList(array $array) : string {
                $res = "<ul>";
                foreach($array as $value){
                    $res.= "<li>$value</li>";
                }
                return $res."</ul>";
            }
            echo arrayToList($array);
            ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
            <div class="exercice-sandbox">
            <?php
            function getEvenNumbers(array $array) : array {
                $res = [];
                foreach($array as $value){
                    if($value%2 === 0)
                    $res[]=$value;
                }
                return $res;
            }
            echo arrayToList(getEvenNumbers($array));
            ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
            <div class="exercice-sandbox">
            <?php
            function getEvenIndex(array $array) : array {
                $res = [];
                foreach($array as $num => $value){
                    if($num%2 === 0)
                    $res[]=$value;
                }
                return $res;
            }
            echo arrayToList(getEvenIndex($array));
            ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
            <div class="exercice-sandbox">
            <?php
            function getDoubleValues(array $array) : array {
                return array_map(fn($f) => $f*2, $array);
            }
            echo arrayToList(getDoubleValues($array));
            ?>
            </div>
        </section>

        <!-- QUESTION 4 Bis -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4 Bis</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
            <div class="exercice-sandbox">
            <?php
            function getArrayDivided(array $array, int $a) : array {
                return array_map(fn($f) => $f/$a, $array);
            }
            echo arrayToList(getArrayDivided($array, 2));
            ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers ou de chaînes de caractères et retourne le tableau sans doublons</p>
            <div class="exercice-sandbox">
            <?php
            function uniqueValues(array $array) : array {
                $res = [];
                foreach($array as $value){
                    if(!in_array($value, $res)) $res[]=$value;
                }
                return $res;
            }
            echo arrayToList(uniqueValues($arrayA));
            ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau représentant l'intersection des 2</p>
            <div class="exercice-sandbox">
            <?php
            function interArray(array $array, array $array2) : array {
                $res = [];
                foreach($array as $value){
                    if(in_array($value, $array2)) $res[]=$value;
                }
                return $res;
            }
            echo arrayToList(interArray($arrayA, $arrayB));
            ?>
            </div>
        </section>
                    
        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
            <div class="exercice-sandbox">
            <?php
            function inAButNotInB(array $array, array $array2, bool $unique = false) : array {
                $res = [];
                foreach($array as $value){
                    if(!in_array($value, $array2)) $res[]=$value;
                }
                if($unique) $res = uniqueValues($res);
                return $res;
            }
            echo arrayToList(inAButNotInB($arrayA, $arrayB));
            ?>
            </div>
        </section>

                    
        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Réécrire la fonction précédente pour lui ajouter un paramètre booléen facultatif. Si celui-ci est à true, le tableau retourné sera sans doublons</p>
            <div class="exercice-sandbox">
            <?php
            echo arrayToList(inAButNotInB($arrayA, $arrayB, true));
            ?>
            </div>
        </section>

            
        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et un entier et retourne les n premiers éléments du tableau.</p>
            <div class="exercice-sandbox">
            <?php
            function getFirstValues(array $array, int $a) : array {
                $res = [];
                foreach($array as $num => $value){
                    $res[]=$value;
                    if($num === $a-1) break;
                }
                return $res;
            }
            echo arrayToList(getFirstValues($array, 5));
            ?>
            </div>
        </section>
    </div>
<?php include_once "footer.php" ?>
</body>
</html>