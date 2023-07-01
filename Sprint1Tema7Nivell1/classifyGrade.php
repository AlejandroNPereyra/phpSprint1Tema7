<?php

/* - Exercici 2

Practiquem una mica de TDD. 
Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries realitzar 
per provar el seu correcte funcionament. 
Programa’ls i després ves realitzant el programa a testejar pas a pas 
segons valides els tests prèviament creats. */

function classifyGrade ($number) {

if($number >= 60){

    return "First Class Grade";

} else if ($number >= 45 && $number <=59) {

    return "Second Class Grade";

} else if ($number >=33 and $number <=44) {

    return "Third Class Grade";

} else {

    return "Must repeat grades";
    
}

}

?>