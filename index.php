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

echo "3<br>";

function concat3 ($texto, $name) {
    echo $texto." pour ".$name;
}

concat3("Ceci est un message", "Sylvie");



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

echo "4<br>";

testNbr4(2,5);

echo "<br>";

function concatTxtNbr5 ($nbr, $txt){
    echo $nbr.$txt;
}

echo "<br>";

concatTxtNbr5(3, " jours");

function info6 ($nom, $prenom, $age) {
    echo "Bonjour ".$prenom." ".$nom.", tu as ".$age." ans.";
}



info6("Bataille", "Sylvie", 45);

echo "<br>";

