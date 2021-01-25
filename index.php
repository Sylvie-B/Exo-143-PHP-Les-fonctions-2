<?php

function test1(){
    return true;
}

test1();
echo "2<br>";
function message2($texto) {
    echo "$texto";
}

message2("Ceci est un message");

echo "<br>3<br>";

function concat3 ($texto, $name) {
    echo $texto." pour ".$name;
}

concat3("Ceci est un message", "Sylvie");

echo "<br>4<br>";

function testNbr4($nbr1, $nbr2){
    if($nbr1 < $nbr2){
        echo "$nbr1 est inférieur à $nbr2";
    }
    elseif ($nbr1 === $nbr2){
        echo "$nbr1 est égal à $nbr2";
    }
    else {
        echo "$nbr1 est supérieur à $nbr2";
    }
}
testNbr4(2,5);

echo "<br>5<br>";

function concatTxtNbr5 ($nbr, $txt){
    echo $nbr.$txt;
}

concatTxtNbr5(3, " jours");

echo "<br>6<br>";

function info6 ($nom, $prenom, $age) {
    echo "Bonjour ".$prenom." ".$nom.", tu as ".$age." ans.";
}

info6("Bataille", "Sylvie", 45);

echo "<br>7<br>";

function info7 ($age, $genre){
    $art = $genre === "femme" ? "une " : "un ";
    $ref = $age < 18 ? "mineur" : "majeur";
    echo "Vous êtes ".$art.$genre." et vous êtes ".$ref.".";
}

info7(45, "femme");
